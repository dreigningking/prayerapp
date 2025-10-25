<?php

namespace App\Traits;

use Carbon\Carbon;
use App\Models\Schedule;
use App\Models\Frequency;
use App\Models\ScheduleInstance;

trait ScheduleInstanceTrait
{
    /**
     * Generate schedule instances for a given schedule
     * Creates instances for today to today + 30 days
     */
    public function generateInstances(Schedule $schedule): void
    {
        $startDate = now()->startOfDay();
        $endDate = now()->addDays(30)->endOfDay();

        // Get all prayer times for this schedule
        $prayerTimes = $schedule->times()->pluck('time')->toArray();

        // Get constraints (mutual exclusive: days OR dates OR neither)
        $hasDays = $schedule->days()->exists();
        $allowedDays = $hasDays ? $schedule->days()->pluck('day')->toArray() : null;

        $hasDates = $schedule->dates()->exists();
        $allowedDates = $hasDates ? $schedule->dates()->pluck('date')->toArray() : null;

        // Generate instances for each day in the window
        $currentDate = $startDate->copy();
        while ($currentDate <= $endDate) {
            // Check if this date passes the constraints
            if ($this->datePassesConstraints($currentDate, $allowedDays, $allowedDates)) {
                // Create instance for each prayer time
                foreach ($prayerTimes as $time) {
                    // Skip if instance already exists
                    if (!$this->instanceExists($schedule->id, $currentDate->toDateString(), $time)) {
                        ScheduleInstance::create([
                            'schedule_id' => $schedule->id,
                            'prayer_id' => $schedule->prayer_id,
                            'scheduled_date' => $currentDate->toDateString(),
                            'scheduled_time' => $time,
                            'status' => 'pending',
                        ]);
                    }
                }
            }

            $currentDate->addDay();
        }
    }

    /**
     * Generate instances for a specific day (used by daily cron)
     */
    public function generateDayInstances(Schedule $schedule, Carbon $date): void
    {
        // Get all prayer times for this schedule
        $prayerTimes = $schedule->times()->pluck('time')->toArray();

        // Get constraints
        $hasDays = $schedule->days()->exists();
        $allowedDays = $hasDays ? $schedule->days()->pluck('day')->toArray() : null;

        $hasDates = $schedule->dates()->exists();
        $allowedDates = $hasDates ? $schedule->dates()->pluck('date')->toArray() : null;

        // Check if this date passes constraints
        if ($this->datePassesConstraints($date, $allowedDays, $allowedDates)) {
            // Create instance for each prayer time
            foreach ($prayerTimes as $time) {
                // Skip if instance already exists
                if (!$this->instanceExists($schedule->id, $date->toDateString(), $time)) {
                    ScheduleInstance::create([
                        'schedule_id' => $schedule->id,
                        'prayer_id' => $schedule->prayer_id,
                        'scheduled_date' => $date->toDateString(),
                        'scheduled_time' => $time,
                        'status' => 'pending',
                    ]);
                }
            }
        }
    }

    /**
     * Check if date passes constraint rules (mutual exclusive)
     * User selects EITHER days OR dates OR neither (everyday)
     */
    private function datePassesConstraints(Carbon $date, ?array $allowedDays, ?array $allowedDates): bool
    {
        // If days are specified, check if date's day of week matches
        if ($allowedDays !== null) {
            return in_array($date->dayOfWeek, $allowedDays);
        }

        // If dates are specified, check if date's day of month matches
        if ($allowedDates !== null) {
            return in_array($date->day, $allowedDates);
        }

        // No constraints = everyday
        return true;
    }

    /**
     * Check if schedule instance already exists
     */
    private function instanceExists(int $scheduleId, string $date, string $time): bool
    {
        return ScheduleInstance::where('schedule_id', $scheduleId)
            ->where('scheduled_date', $date)
            ->where('scheduled_time', $time)
            ->exists();
    }

    /**
     * Generate instances for all active schedules
     */
    public function generateAllInstances(): void
    {
        $schedules = Schedule::where('status', true)->get();

        foreach ($schedules as $schedule) {
            $this->generateInstances($schedule);
        }
    }

    /**
     * Mark a schedule instance as prayed
     */
    public function markAsPrayed(ScheduleInstance $instance): void
    {
        $instance->update([
            'status' => 'prayed',
            'prayed_at' => now(),
        ]);
    }

    /**
     * Mark a schedule instance as skipped
     */
    public function markAsSkipped(ScheduleInstance $instance): void
    {
        $instance->update([
            'status' => 'skipped',
            'skipped_at' => now(),
        ]);
    }

    /**
     * Get upcoming instances for notifications
     */
    public function getUpcomingInstances(int $minutesAhead = 60): array
    {
        $now = now();
        $futureTime = $now->copy()->addMinutes($minutesAhead);

        return ScheduleInstance::with(['prayer', 'schedule'])
            ->where('scheduled_date', $now->toDateString())
            ->where('scheduled_time', '>=', $now->format('H:i:s'))
            ->where('scheduled_time', '<=', $futureTime->format('H:i:s'))
            ->where('status', 'pending')
            ->orderBy('scheduled_time')
            ->get()
            ->toArray();
    }

    /**
     * Clean up old schedule instances (older than 3 months)
     */
    public function cleanupOldInstances(): int
    {
        $cutoffDate = now()->subMonths(3)->toDateString();

        return ScheduleInstance::where('scheduled_date', '<', $cutoffDate)
            ->delete();
    }
}
