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
        Schema::create('meal_request', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->foreignUlid('member_id');
            $table->enum('meal_preference', ['vegetarian', 'vegan', 'omnivore']);
            $table->string('weight');
            $table->enum('budget_level', ['low', 'medium', 'high']);
            $table->string('notes');
            $table->enum('status', ['pending', 'accepted', 'rejected'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meal_request');
    }
};
