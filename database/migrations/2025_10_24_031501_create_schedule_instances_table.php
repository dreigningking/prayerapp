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
        Schema::create('schedule_instances', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('schedule_id');
            $table->unsignedBigInteger('prayer_id');
            $table->date('scheduled_date');
            $table->time('scheduled_time');
            $table->enum('status', ['pending', 'prayed', 'skipped', 'missed'])->default('pending');
            $table->timestamp('prayed_at')->nullable();
            $table->timestamp('skipped_at')->nullable();
            $table->timestamp('notified_at')->nullable(); // when notification was sent
            $table->index(['prayer_id', 'scheduled_date']);
            $table->index(['status', 'scheduled_date']);
            $table->index('scheduled_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedule_instances');
    }
};
