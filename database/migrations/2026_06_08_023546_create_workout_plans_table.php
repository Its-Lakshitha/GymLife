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
        Schema::create('workout_plans', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->foreignUlid('member_id')->constrained()->cascadeOnDelete();
            $table->foreignUlid('trainer_id')->constrained()->cascadeOnDelete();
            $table->string('created_by');
            $table->string('goal');
            $table->string('start_date');
            $table->string('duration_days');
            $table->string('days_per_week');
            $table->text('plan_description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workout_plans');
    }
};
