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
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('id');
            $table->ulid('id')->primary()->first();
            $table->foreignUlid('role_id')->constrained('roles')->cascadeOnDelete();
            $table->renameColumn('name', 'first_name');
            $table->string('last_name')->after('first_name');
            $table->string('phone_number')->after('email');
            $table->text('address')->after('phone_number');
            $table->string('date_of_birth')->after('address');
            $table->enum('gender', ['male', 'female', 'other'])->after('date_of_birth');
            $table->enum('user_status', ['active', 'inactive'])->after('gender');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('name', 'first_name');
            $table->dropColumn([
                'id',
                'role_id',
                'first_name',
                'last_name',
                'phone_number',
                'address',
                'date_of_birth',
                'gender',
                'user_status',
            ]);
        });
    }
};
