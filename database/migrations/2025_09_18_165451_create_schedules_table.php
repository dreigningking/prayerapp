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
            $table->unsignedBigInteger('server_id')->nullable();
            $table->unsignedBigInteger('prayer_id')->nullable();
            $table->date('date');
            $table->string('time');
            $table->boolean('status');
            $table->softDeletes();
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
