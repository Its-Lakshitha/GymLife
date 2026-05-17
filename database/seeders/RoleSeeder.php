<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'name' => 'Admin',
                'slug' => 'admin',
                'description' => 'System Administrator',
            ],
            [
                'name' => 'Trainer',
                'slug' => 'trainer',
                'description' => 'Gym Trainer',
            ],
            [
                'name' => 'Receptionist',
                'slug' => 'receptionist',
                'description' => 'Gym Receptionist',
            ],
            [
                'name' => 'Member',
                'slug' => 'member',
                'description' => 'Gym Member',
            ],
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
