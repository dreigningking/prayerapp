<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\ScheduleInstance;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ScheduleController extends Controller
{
    /**
     * Display schedule instances with filters
     */
    public function index(Request $request)
    {
        $query = ScheduleInstance::with(['prayer', 'schedule']);

        // Apply filters
        $filter = $request->get('filter', 'today');
        $startDateTime = null;
        $endDateTime = null;

        $now = Carbon::now();
        switch ($filter) {
            case 'today':
                $startDateTime = $now->copy();
                $endDateTime = $now->copy()->endOfDay();
                break;
            case 'tomorrow':
                $startDateTime = $now->copy()->addDay()->startOfDay();
                $endDateTime = $now->copy()->addDay()->endOfDay();
                break;
            case 'this_week':
                $startDateTime = $now->copy()->startOfWeek();
                $endDateTime = $now->copy()->endOfWeek();
                break;
            case 'this_month':
                $startDateTime = $now->copy()->startOfMonth();
                $endDateTime = $now->copy()->endOfMonth();
                break;
            case 'custom':
                if ($request->get('start_date')) {
                    $startDateTime = Carbon::createFromFormat('Y-m-d', $request->get('start_date'))->startOfDay();
                }
                if ($request->get('end_date')) {
                    $endDateTime = Carbon::createFromFormat('Y-m-d', $request->get('end_date'))->endOfDay();
                }
            break;
        }
        if ($startDateTime && $endDateTime) {
            $query->where('scheduled_at', '>=', $startDateTime)
                ->where('scheduled_at', '<=', $endDateTime);
        }
        $scheduleInstances = $query->orderBy('scheduled_at', 'asc')
                                   ->paginate(12);
        // Rename variable for backward compatibility
        $schedules = $scheduleInstances;

        // Stats
        $stats = $this->getStats();

        return view('schedules', compact('schedules', 'stats', 'filter', 'startDateTime', 'endDateTime'));
    }

    private function getStats()
    {
        $now = now();

        // Today stats
        $todayTotal = ScheduleInstance::whereDate('scheduled_at', today())->count();
        $todayPrayed = ScheduleInstance::whereDate('scheduled_at', today())->where('status', 'prayed')->count();
        $todaySkipped = ScheduleInstance::whereDate('scheduled_at', today())->where('status', 'skipped')->count();

        // This week stats
        $weekTotal = ScheduleInstance::whereBetween('scheduled_at', [$now->startOfWeek(), $now->endOfWeek()])->count();
        $weekPrayed = ScheduleInstance::whereBetween('scheduled_at', [$now->startOfWeek(), $now->endOfWeek()])->where('status', 'prayed')->count();
        $weekSkipped = ScheduleInstance::whereBetween('scheduled_at', [$now->startOfWeek(), $now->endOfWeek()])->where('status', 'skipped')->count();

        // This month stats
        $monthTotal = ScheduleInstance::whereBetween('scheduled_at', [$now->startOfMonth(), $now->endOfMonth()])->count();
        $monthPrayed = ScheduleInstance::whereBetween('scheduled_at', [$now->startOfMonth(), $now->endOfMonth()])->where('status', 'prayed')->count();
        $monthSkipped = ScheduleInstance::whereBetween('scheduled_at', [$now->startOfMonth(), $now->endOfMonth()])->where('status', 'skipped')->count();

        return [
            'prayed_today' => $todayTotal > 0 ? "{$todayPrayed}/{$todayTotal}" : "0/0",
            'prayed_week' => $weekTotal > 0 ? "{$weekPrayed}/{$weekTotal}" : "0/0",
            'prayed_month' => $monthTotal > 0 ? "{$monthPrayed}/{$monthTotal}" : "0/0",
            'skipped' => "{$todaySkipped} today/{$weekSkipped} this week/{$monthSkipped} this month",
        ];
    }
}
