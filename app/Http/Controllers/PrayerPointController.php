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



class PrayerPointController extends Controller
{
    use ScheduleInstanceTrait;
    

    public function index()
    {
        // Get user's prayer points with schedules
        $prayerPoints = Prayer::with('schedules')
            ->where('user_id', Auth::id())
            ->orderBy('created_at', 'desc')
            ->paginate(2);

        // Calculate stats
        $userId = Auth::id();
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

        return view('prayer-points', compact('prayerPoints', 'stats'));
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
     * Get comments for a prayer point (AJAX)
     */
    public function getComments(Request $request, Prayer $prayer)
    {
        $comments = $prayer->comments()->with('user')->orderBy('created_at', 'desc')->get();

        return response()->json([
            'success' => true,
            'comments' => $comments->map(function($comment) {
                return [
                    'id' => $comment->id,
                    'body' => $comment->body,
                    'user_name' => $comment->user->name ?? 'Anonymous',
                    'created_at' => $comment->created_at->diffForHumans(),
                ];
            })
        ]);
    }
}
