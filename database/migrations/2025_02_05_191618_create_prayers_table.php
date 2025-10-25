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
        Schema::create('prayers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->after('id')->constrained()->onDelete('cascade');
            $table->text('title');
            $table->text('body');
            $table->string('file')->nullable();
            $table->string('status')->default('active'); //active, completed, archived
            $table->integer('reminder_minutes_before')->default(15); //minutes before scheduled time to remind
            $table->timestamp('completed_at')->nullable();
            $table->string('categories')->nullable(); //for organizing prayers
            $table->softDeletes();
            $table->index('status');
            $table->index('category');
            $table->timestamps();
            $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prayers');
    }
};
