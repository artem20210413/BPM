<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RbacSeeder extends Seeder
{
    public function run(): void
    {
        // Базовые permissions (под твоё ТЗ)
        $permissions = [
            'manage users',
            'manage roles',
            'manage products',
            'manage categories',
            'manage posts',
            'view leads',
            'manage leads',
        ];

        foreach ($permissions as $name) {
            Permission::firstOrCreate(['name' => $name]);
        }

        // Роли
        $super = Role::firstOrCreate(['name' => 'SuperAdmin']);
        $admin = Role::firstOrCreate(['name' => 'Admin']);
        $moder = Role::firstOrCreate(['name' => 'Moderator']);

        // Назначение прав
        $super->syncPermissions(Permission::all()); // SuperAdmin — все права
        $admin->syncPermissions([
            'manage users',
            'manage roles',
            'manage products',
            'manage categories',
            'manage posts',
            'view leads',
            'manage leads',
        ]);
        $moder->syncPermissions([
            'manage products',
            'manage categories',
            'manage posts',
            'view leads',
            // без manage users/roles и manage leads (по желанию можешь выдать)
        ]);
    }
}
