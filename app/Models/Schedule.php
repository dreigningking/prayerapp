<?php

namespace App\Models;

use App\Models\ScheduleDay;
use App\Models\ScheduleDate;
use App\Models\ScheduleTime;
use App\Models\ScheduleMonth;
use App\Models\ScheduleInstance;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Schedule extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'prayer_id',
        'start_date',
        'end_date',
        'reminder_minutes',
        'status'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'date' => 'date',
        'times' => 'array',
        'status' => 'boolean',
    ];

    /**
     * Get the prayer that owns the schedule.
     */
    public function prayer(): BelongsTo
    {
        return $this->belongsTo(Prayer::class);
    }

    /**
     * Get the frequency for the schedule.
     */
    public function times(): HasMany
    {
        return $this->hasMany(ScheduleTime::class);
    }
    public function dates(): HasMany
    {
        return $this->hasMany(ScheduleDate::class);
    }
    public function days(): HasMany
    {
        return $this->hasMany(ScheduleDay::class);
    }
    public function months(): HasMany
    {
        return $this->hasMany(ScheduleMonth::class);
    }

    /**
     * Get the schedule instances for this schedule.
     */
    public function scheduleInstances(): HasMany
    {
        return $this->hasMany(ScheduleInstance::class);
    }
}
