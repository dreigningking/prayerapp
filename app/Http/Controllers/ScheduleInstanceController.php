<?php

namespace App\Http\Controllers;

use App\Models\ScheduleInstance;
use App\Models\Schedule;
use App\Traits\ScheduleInstanceTrait;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class ScheduleInstanceController extends Controller
{
    use ScheduleInstanceTrait;

    /**
     * Get upcoming schedule instances
     */
    public function upcoming(Request $request): JsonResponse
    {
        $instances = ScheduleInstance::with(['prayer', 'schedule'])
            ->upcoming()
            ->orderBy('scheduled_at')
            ->get();

        return response()->json([
            'success' => true,
            'data' => $instances
        ]);
    }

    /**
     * Get past schedule instances
     */
    public function past(Request $request): JsonResponse
    {
        $instances = ScheduleInstance::with(['prayer', 'schedule'])
            ->past()
            ->orderBy('scheduled_at', 'desc')
            ->paginate(20);

        return response()->json([
            'success' => true,
            'data' => $instances
        ]);
    }

    /**
     * Get today's schedule instances
     */
    public function today(Request $request): JsonResponse
    {
        $instances = ScheduleInstance::with(['prayer', 'schedule'])
            ->whereDate('scheduled_at', today())
            ->orderBy('scheduled_at')
            ->get();

        return response()->json([
            'success' => true,
            'data' => $instances
        ]);
    }

    /**
     * Mark instance as prayed
     */
    public function markAsPrayed(ScheduleInstance $instance): JsonResponse
    {
        $this->markAsPrayed($instance);

        return response()->json([
            'success' => true,
            'message' => 'Prayer marked as completed'
        ]);
    }

    /**
     * Mark instance as skipped
     */
    public function markAsSkipped(ScheduleInstance $instance): JsonResponse
    {
        $this->markAsSkipped($instance);

        return response()->json([
            'success' => true,
            'message' => 'Prayer marked as skipped'
        ]);
    }

    /**
     * Generate instances for a schedule
     */
    public function generateInstances(Schedule $schedule): JsonResponse
    {
        $this->generateInstances($schedule);

        return response()->json([
            'success' => true,
            'message' => 'Schedule instances generated successfully'
        ]);
    }

    /**
     * Get prayer statistics
     */
    public function statistics(Request $request): JsonResponse
    {
        $today = today();

        $stats = [
            'today_completed' => ScheduleInstance::whereDate('scheduled_at', $today)
                ->where('status', 'prayed')
                ->count(),
            'today_total' => ScheduleInstance::whereDate('scheduled_at', $today)
                ->count(),
            'week_completed' => ScheduleInstance::whereDate('scheduled_at', '>=', $today->startOfWeek())
                ->whereDate('scheduled_at', '<=', $today->endOfWeek())
                ->where('status', 'prayed')
                ->count(),
            'week_total' => ScheduleInstance::whereDate('scheduled_at', '>=', $today->startOfWeek())
                ->whereDate('scheduled_at', '<=', $today->endOfWeek())
                ->count(),
            'upcoming_count' => ScheduleInstance::upcoming()->count(),
        ];

        return response()->json([
            'success' => true,
            'data' => $stats
        ]);
    }
}
