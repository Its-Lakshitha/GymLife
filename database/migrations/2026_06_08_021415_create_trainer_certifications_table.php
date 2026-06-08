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
        Schema::create('trainer_certifications', function (Blueprint $table) {
            $table->ulid('id')->primary();
            $table->foreignUlid('trainer_id')->constrained()->cascadeOnDelete();
            $table->string('certification_name');
            $table->string('issuing_organization')->nullable();
            $table->date('issue_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trainer_certifications');
    }
};
