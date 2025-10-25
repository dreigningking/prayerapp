<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ScheduleInstance extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'schedule_id',
        'prayer_id',
        'scheduled_date',
        'scheduled_time',
        'status',
        'prayed_at',
        'skipped_at',
        'notified_at',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'scheduled_date' => 'date',
        'scheduled_time' => 'datetime:H:i',
        'prayed_at' => 'datetime',
        'skipped_at' => 'datetime',
        'notified_at' => 'datetime',
    ];

    /**
     * Get the schedule that owns this instance.
     */
    public function schedule(): BelongsTo
    {
        return $this->belongsTo(Schedule::class);
    }

    /**
     * Get the prayer for this instance.
     */
    public function prayer(): BelongsTo
    {
        return $this->belongsTo(Prayer::class);
    }

    /**
     * Scope for pending instances.
     */
    public function scopePending($query)
    {
        return $query->where('status', 'pending');
    }

    /**
     * Scope for prayed instances.
     */
    public function scopePrayed($query)
    {
        return $query->where('status', 'prayed');
    }

    /**
     * Scope for skipped instances.
     */
    public function scopeSkipped($query)
    {
        return $query->where('status', 'skipped');
    }

    /**
     * Scope for upcoming instances.
     */
    public function scopeUpcoming($query)
    {
        return $query->where('scheduled_date', '>=', today())
                    ->where('status', 'pending');
    }

    /**
     * Scope for past instances.
     */
    public function scopePast($query)
    {
        return $query->where('scheduled_date', '<', today());
    }
}
