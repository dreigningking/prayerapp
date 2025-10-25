<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('prayer_id');
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->unsignedSmallInteger('reminder_minutes')->default(15);
            $table->boolean('status')->default(true);
            $table->softDeletes();
            $table->index(['prayer_id', 'start_date']);
            $table->index('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * 
     * Every Monday at 5pm - continuously
     * 5th of Dec 12noon to 1pm
     * 7th, 8th and 9th at 10pm
     * E
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
