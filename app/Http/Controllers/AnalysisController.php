<?php

namespace App\Http\Controllers;

use App\Models\ScheduleInstance;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AnalysisController extends Controller
{
    /**
     * Display the analytics page
     */
    public function index(Request $request)
    {
        $filter = $request->get('filter', 'today');
        $startDate = $request->get('start_date');
        $endDate = $request->get('end_date');

        $data = $this->getAnalyticsData($filter, $startDate, $endDate);

        return view('analysis', [
            'stats' => $data['stats'],
            'chart_data' => $data['chart_data'],
            'filter' => $filter,
            'startDate' => $startDate,
            'endDate' => $endDate,
        ]);
    }

    /**
     * Get analytics data via AJAX
     */
    public function getData(Request $request)
    {
        $filter = $request->get('filter', 'today');
        $startDate = $request->get('start_date');
        $endDate = $request->get('end_date');

        $data = $this->getAnalyticsData($filter, $startDate, $endDate);

        return response()->json([
            'success' => true,
            'data' => $data
        ]);
    }

    /**
     * Get analytics data based on filter
     */
    private function getAnalyticsData($filter, $startDate = null, $endDate = null)
    {
        $now = Carbon::now();
        $query = ScheduleInstance::query();

        // Apply date filtering
        switch ($filter) {
            case 'today':
                $query->whereDate('scheduled_at', today());
                break;
            case 'yesterday':
                $query->whereDate('scheduled_at', now()->subDay());
                break;
            case 'custom':
                if ($startDate && $endDate) {
                    $query->whereBetween('scheduled_at', [
                        Carbon::createFromFormat('Y-m-d', $startDate)->startOfDay(),
                        Carbon::createFromFormat('Y-m-d', $endDate)->endOfDay()
                    ]);
                }
                break;
        }

        // Get basic stats
        $totalSessions = $query->count();
        $prayed = $query->where('status', 'prayed')->count();
        $skipped = $query->where('status', 'skipped')->count();
        $pending = $query->where('status', 'pending')->count();

        $completionRate = $totalSessions > 0 ? round((($prayed + $skipped) / $totalSessions) * 100, 1) : 0;

        // Chart data based on filter
        $chartData = $this->getChartData($filter, $startDate, $endDate);

        return [
            'stats' => [
                'total_sessions' => $totalSessions,
                'prayed' => $prayed,
                'skipped' => $skipped,
                'completion_rate' => $completionRate,
            ],
            'chart_data' => $chartData
        ];
    }

    /**
     * Get chart data based on filter
     */
    private function getChartData($filter, $startDate = null, $endDate = null)
    {
        switch ($filter) {
            case 'today':
                return $this->getDailyChartData(today());
            case 'yesterday':
                return $this->getDailyChartData(yesterday());
            case 'custom':
                return $this->getCustomRangeChartData($startDate, $endDate);
            default:
                return $this->getDefaultChartData();
        }
    }

    /**
     * Get chart data for a single day
     */
    private function getDailyChartData($date)
    {
        $instances = ScheduleInstance::whereDate('scheduled_at', $date)
            ->orderBy('scheduled_at')
            ->get();

        $labels = [];
        $prayedData = [];
        $skippedData = [];

        foreach ($instances as $instance) {
            $hour = $instance->scheduled_at->format('H:i');
            $labels[] = $hour;

            if ($instance->status === 'prayed') {
                $prayedData[] = 1;
                $skippedData[] = 0;
            } elseif ($instance->status === 'skipped') {
                $prayedData[] = 0;
                $skippedData[] = 1;
            } else {
                $prayedData[] = 0;
                $skippedData[] = 0;
            }
        }

        return [
            'prayed' => ScheduleInstance::whereDate('scheduled_at', $date)->where('status', 'prayed')->count(),
            'skipped' => ScheduleInstance::whereDate('scheduled_at', $date)->where('status', 'skipped')->count(),
            'pending' => ScheduleInstance::whereDate('scheduled_at', $date)->where('status', 'pending')->count(),
            'labels' => $labels,
            'prayed_data' => $prayedData,
            'skipped_data' => $skippedData,
        ];
    }

    /**
     * Get chart data for custom date range
     */
    private function getCustomRangeChartData($startDate, $endDate)
    {
        if (!$startDate || !$endDate) {
            return $this->getDefaultChartData();
        }

        $start = Carbon::createFromFormat('Y-m-d', $startDate);
        $end = Carbon::createFromFormat('Y-m-d', $endDate);

        $instances = ScheduleInstance::whereBetween('scheduled_at', [$start->startOfDay(), $end->endOfDay()])
            ->orderBy('scheduled_at')
            ->get();

        $labels = [];
        $prayedData = [];
        $skippedData = [];

        // Group by day
        $dailyStats = [];
        foreach ($instances as $instance) {
            $day = $instance->scheduled_at->format('M j');
            if (!isset($dailyStats[$day])) {
                $dailyStats[$day] = ['prayed' => 0, 'skipped' => 0, 'total' => 0];
            }

            $dailyStats[$day]['total']++;
            if ($instance->status === 'prayed') {
                $dailyStats[$day]['prayed']++;
            } elseif ($instance->status === 'skipped') {
                $dailyStats[$day]['skipped']++;
            }
        }

        foreach ($dailyStats as $day => $stats) {
            $labels[] = $day;
            $prayedData[] = $stats['prayed'];
            $skippedData[] = $stats['skipped'];
        }

        return [
            'prayed' => array_sum(array_column($dailyStats, 'prayed')),
            'skipped' => array_sum(array_column($dailyStats, 'skipped')),
            'pending' => $instances->where('status', 'pending')->count(),
            'labels' => $labels,
            'prayed_data' => $prayedData,
            'skipped_data' => $skippedData,
        ];
    }

    /**
     * Get default chart data
     */
    private function getDefaultChartData()
    {
        return [
            'prayed' => 0,
            'skipped' => 0,
            'pending' => 0,
            'labels' => [],
            'prayed_data' => [],
            'skipped_data' => [],
        ];
    }
}
