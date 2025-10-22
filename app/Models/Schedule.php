<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Schedule extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'server_id',
        'prayer_id',
        'date',
        'time',
        'status',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'date' => 'date',
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
    public function frequency(): HasOne
    {
        return $this->hasOne(Frequency::class);
    }
}
