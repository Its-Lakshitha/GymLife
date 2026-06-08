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
        Schema::create('workout_requests', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->foreignUlid('member_id')->constrained()->cascadeOnDelete();
            $table->string('goal');
            $table->string('days_per_week');
            $table->string('hours_per_day');
            $table->text('additional_notes')->nullable();
            $table->enum('status', ['pending', 'accepted', 'rejected'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workout_requests');
    }
};
