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
                $startDateTime = $now->copy()->startOfDay();
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
        $totalSchedules = Schedule::count();
        $todayInstances = ScheduleInstance::whereDate('scheduled_at', today())->count();
        $activeSchedules = Schedule::where('status', true)->count();
        $inactiveSchedules = Schedule::where('status', false)->count();

        return [
            'total_schedules' => $totalSchedules,
            'today_instances' => $todayInstances,
            'active' => $activeSchedules,
            'inactive' => $inactiveSchedules,
        ];
    }
}
