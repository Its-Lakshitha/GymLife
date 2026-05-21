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
        Schema::create('trainer_sessions', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->foreignUlid('trainer_id')->constrained()->cascadeOnDelete();
            $table->foreignUlid('member_id')->constrained()->cascadeOnDelete();
            $table->dateTime('session_start');
            $table->dateTime('session_end')->nullable();
            $table->text('notes')->nullable();
            $table->enum('status', ['scheduled', 'completed', 'canceled', 'missed'])->default('scheduled');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trainer_sessions');
    }
};
