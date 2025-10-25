<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prayer;
use App\Models\Schedule;
use App\Models\Frequency;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Traits\ScheduleInstanceTrait;
use App\Models\Comment;
use App\Models\ScheduleInstance;



class PrayerPointController extends Controller
{
    use ScheduleInstanceTrait;
    

    public function index(Request $request)
    {
        $userId = Auth::id();
        $query = Prayer::where('user_id', $userId);

        // Apply filters
        $filter = $request->get('filter', 'all');
        $search = $request->get('search');
        $sort = $request->get('sort', 'newest');

        // Filter logic
        switch($filter) {
            case 'active':
                $query->where('status', 'active');
                break;
            case 'completed':
                $query->where('status', 'completed');
                break;
            case 'archived':
                $query->where('status', 'completed')
                      ->where('completed_at', '<', now()->subMonths(3));
                break;
            // 'all' shows everything
        }

        // Search logic
        if($search) {
            $query->where(function($q) use ($search) {
                $q->where('title', 'LIKE', "%{$search}%")
                  ->orWhere('body', 'LIKE', "%{$search}%");
            });
        }

        // Sort logic
        switch($sort) {
            case 'oldest':
                $query->orderBy('created_at', 'asc');
                break;
            case 'alphabetical':
                $query->orderBy('title', 'asc');
                break;
            case 'priority':
                $query->orderBy('priority', 'desc');
                break;
            default: // newest
                $query->orderBy('created_at', 'desc');
        }

        $prayerPoints = $query->paginate(12);

        // Calculate stats
        $stats = [
            'total' => Prayer::where('user_id', $userId)->count(),
            'completed' => Prayer::where('user_id', $userId)->where('status', 'completed')->count(),
            'pending' => Prayer::where('user_id', $userId)->where('status', 'active')->count(),
            'high_priority' => 0, // TODO: Implement priority system
        ];

        // If you want to add schedule instance stats too
        $pendingInstances = DB::table('schedule_instances')
            ->join('prayers', 'schedule_instances.prayer_id', '=', 'prayers.id')
            ->where('prayers.user_id', $userId)
            ->where('schedule_instances.status', 'pending')
            ->count();

        $stats['pending_instances'] = $pendingInstances;

        return view('prayer-point.lists', compact('prayerPoints', 'stats'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'categories' => 'required|array',
            'file' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:10240',
            'enable_schedule' => 'nullable|boolean',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after_or_equal:start_date',
            'reminder_minutes' => 'nullable|integer|min:0',
            'reminder_unit' => 'nullable|string|in:minutes,hours',
            'is_everyday' => 'nullable|boolean',
            'prayer_times' => 'nullable|array',
            'cycleType' => 'nullable|string|in:cycleDays,cycleDates',
            'selected_days' => 'nullable|array',
            'selected_dates' => 'nullable|array',
            'selected_months' => 'nullable|array',
        ]);

        // Handle file upload
        $filePath = null;
        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filePath = $file->store('prayers', 'public');
        }

        // Create the prayer point
        $prayer = new Prayer();
        $prayer->user_id = Auth::id();
        $prayer->title = $validated['title'];
        $prayer->body = $validated['body'];
        $prayer->status = 'active';
        $prayer->reminder_minutes_before = $request->input('reminder_minutes', 15);

        if ($filePath) {
            $prayer->file = $filePath;
        }

        $prayer->save();

        // Handle categories
        if (!empty($validated['categories'])) {
            $prayer->categories = $validated['categories'];
            $prayer->save();
        }

        // Handle schedule if enabled
        if ($request->boolean('enable_schedule')) {
            $this->createSchedule($prayer, $request);
        }

        return redirect()->route('prayer-point.index')
            ->with('success', 'Prayer point created successfully!');
    }

    private function createSchedule(Prayer $prayer, Request $request)
    {
        
        // Convert reminder time to minutes
        $reminderMinutes = $request->input('reminder_minutes', 15);
        if ($request->input('reminder_unit') === 'hours') {
            $reminderMinutes *= 60;
        }

        // Create schedule record
        $schedule = new Schedule([
            'prayer_id' => $prayer->id,
            'start_date' => $request->input('start_date', now()->toDateString()),
            'end_date' => $request->input('end_date'),
            'reminder_minutes' => $reminderMinutes,
            'status' => true, // boolean active
        ]);

        $schedule->save();

        // Save prayer times to schedule_times table
        $prayerTimes = $request->input('prayer_times', ['09:00']);
        foreach ($prayerTimes as $time) {
            DB::table('schedule_times')->insert([
                'schedule_id' => $schedule->id,
                'time' => $time,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // Save selected days to schedule_days table (if specified)
        // Note: User selects EITHER days OR dates, not both
        if ($request->has('selected_days') && is_array($request->input('selected_days'))) {
            foreach ($request->input('selected_days') as $day) {
                DB::table('schedule_days')->insert([
                    'schedule_id' => $schedule->id,
                    'day' => (int)$day,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }

        // Save selected dates to schedule_dates table (if specified)
        // Note: User selects EITHER dates OR days, not both
        if ($request->has('selected_dates') && is_array($request->input('selected_dates'))) {
            foreach ($request->input('selected_dates') as $date) {
                DB::table('schedule_dates')->insert([
                    'schedule_id' => $schedule->id,
                    'date' => (int)$date,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }

        // Save selected months to schedule_months table (if specified)
        if ($request->has('selected_months') && is_array($request->input('selected_months'))) {
            foreach ($request->input('selected_months') as $month) {
                DB::table('schedule_months')->insert([
                    'schedule_id' => $schedule->id,
                    'month' => (int)$month,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }

        // Generate schedule instances for the 30-day window
        $this->generateInstances($schedule);

        return $schedule;
    }

    /**
     * Show prayer point detail page with schedules and comments
     */
    public function show(Prayer $prayer)
    {
        // Ensure user owns this prayer
        if ($prayer->user_id !== Auth::id()) {
            abort(403);
        }

        // Get all schedule instances for this prayer
        $scheduleInstances = $prayer->scheduleInstances()
            ->orderBy('scheduled_at')
            ->get();

        // Get comments with user info
        $comments = $prayer->comments()->with('user')->orderBy('created_at', 'desc')->get();

        return view('prayer-point.details', compact('prayer', 'scheduleInstances', 'comments'));
    }

    /**
     * Store a comment on a prayer point
     */
    public function storeComment(Request $request, Prayer $prayer)
    {
        $validated = $request->validate([
            'body' => 'required|string|max:1000',
        ]);

        $comment = new Comment();
        $comment->user_id = Auth::id();
        $comment->prayer_id = $prayer->id;
        $comment->body = $validated['body'];
        $comment->save();

        return redirect()->back()->with('success', 'Comment added successfully!');
    }

    /**
     * Delete a comment
     */
    public function deleteComment(Comment $comment)
    {
        // Ensure user owns the comment
        if ($comment->user_id !== Auth::id()) {
            abort(403);
        }

        $comment->delete();

        return redirect()->back()->with('success', 'Comment deleted successfully!');
    }

    /**
     * Bulk update schedule instances (mark as prayed, missed, or skipped)
     */
    public function bulkUpdateInstances(Request $request)
    {
        $validated = $request->validate([
            'instance_ids' => 'required|array',
            'instance_ids.*' => 'exists:schedule_instances,id',
            'action' => 'required|in:prayed,missed,skipped',
        ]);

        $userId = Auth::id();
        $instanceIds = $validated['instance_ids'];
        $action = $validated['action'];

        // Ensure user owns these instances
        $instances = ScheduleInstance::whereIn('id', $instanceIds)
            ->whereHas('prayer', function($query) use ($userId) {
                $query->where('user_id', $userId);
            })
            ->get();

        foreach ($instances as $instance) {
            switch ($action) {
                case 'prayed':
                    $this->markAsPrayed($instance);
                    break;
                case 'missed':
                    $instance->update([
                        'status' => 'missed',
                        'missed_at' => now(),
                    ]);
                    break;
                case 'skipped':
                    $this->markAsSkipped($instance);
                    break;
            }
        }

        return redirect()->back()->with('success', 'Schedule instances updated successfully!');
    }
}
