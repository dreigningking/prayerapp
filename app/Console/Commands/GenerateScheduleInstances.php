<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Schedule;
use App\Traits\ScheduleInstanceTrait;

class GenerateScheduleInstances extends Command
{
    use ScheduleInstanceTrait;

    /**
     * The name and signature of the console command.
     */
    protected $signature = 'schedule:generate-instances
                            {--tomorrow : Generate instances for tomorrow only}';

    /**
     * The console command description.
     */
    protected $description = 'Generate schedule instances for today + 30 days ahead, cleanup old instances, and mark past pending instances as skipped';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Starting schedule instance generation...');

        $tomorrowOnly = $this->option('tomorrow');

        if ($tomorrowOnly) {
            $this->generateTomorrowInstances();
        } else {
            $this->generateAllSchedules();
        }

        // Always cleanup old instances
        $deleted = $this->cleanupOldInstances();
        $this->info("Cleaned up {$deleted} old instances (older than 3 months)");

        // Mark past pending instances as skipped
        $skipped = $this->markPastPendingAsSkipped();
        $this->info("Marked {$skipped} past pending instances as skipped");

        $this->info('Schedule instance generation completed!');
    }

    /**
     * Generate instances for all active schedules (today to today + 30 days)
     */
    private function generateAllSchedules()
    {
        $schedules = Schedule::where('status', true)->get();
        $this->info("Found {$schedules->count()} active schedules");

        $totalInstances = 0;

        foreach ($schedules as $schedule) {
            $count = $this->generateInstancesForSchedule($schedule);
            $totalInstances += $count;

            if ($count > 0) {
                $this->line("Generated {$count} instances for schedule #{$schedule->id}");
            }
        }

        $this->info("Total instances generated: {$totalInstances}");
    }

    /**
     * Generate instances for tomorrow only (rolling window maintenance)
     */
    private function generateTomorrowInstances()
    {
        $tomorrow = now()->addDay();
        $schedules = Schedule::where('status', true)->get();

        $this->info("Generating instances for tomorrow ({$tomorrow->toDateString()})");

        $totalInstances = 0;

        foreach ($schedules as $schedule) {
            $this->generateDayInstances($schedule, $tomorrow);

            // Count instances generated for this schedule on tomorrow
            $futureInstances = \App\Models\ScheduleInstance::where('schedule_id', $schedule->id)
                ->whereDate('scheduled_at', '>=', $tomorrow->toDateString())
                ->count();

            $totalInstances += $futureInstances;
        }

        $this->info("Instances now available for tomorrow: {$totalInstances}");
    }

    /**
     * Generate and return count of instances for a schedule
     */
    private function generateInstancesForSchedule(Schedule $schedule): int
    {
        $beforeCount = \App\Models\ScheduleInstance::where('schedule_id', $schedule->id)
            ->whereDate('scheduled_at', '>=', now()->toDateString())
            ->count();

        $this->generateInstances($schedule);

        $afterCount = \App\Models\ScheduleInstance::where('schedule_id', $schedule->id)
            ->whereDate('scheduled_at', '>=', now()->toDateString())
            ->count();

        return $afterCount - $beforeCount;
    }

    /**
     * Get the instance count for a schedule in the future window
     */
    private function getFutureInstanceCount(Schedule $schedule): int
    {
        $cutoffDate = now()->addDays(30)->toDateString();

        return \App\Models\ScheduleInstance::where('schedule_id', $schedule->id)
            ->whereDate('scheduled_at', '<=', $cutoffDate)
            ->where('status', 'pending')
            ->count();
    }

    /**
     * Mark past pending instances as skipped
     */
    private function markPastPendingAsSkipped(): int
    {
        return \App\Models\ScheduleInstance::where('scheduled_at', '<', now())
            ->where('status', 'pending')
            ->update([
                'status' => 'skipped',
                'skipped_at' => now(),
            ]);
    }
}
