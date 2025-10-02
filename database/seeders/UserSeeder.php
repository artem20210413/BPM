<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $super = User::firstOrCreate(
            ['email' => 'superadmin@example.com'],
            ['name' => 'Super Admin', 'password' => Hash::make('password!')]
        );
        $super->assignRole('SuperAdmin');

        $admin = User::firstOrCreate(
            ['email' => 'admin@example.com'],
            ['name' => 'Admin', 'password' => Hash::make('password!')]
        );
        $admin->assignRole('Admin');

        $moder = User::firstOrCreate(
            ['email' => 'moderator@example.com'],
            ['name' => 'Moderator', 'password' => Hash::make('password')]
        );
        $moder->assignRole('Moderator');
    }
}
