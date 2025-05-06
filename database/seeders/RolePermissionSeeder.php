<?php

namespace Database\Seeders;


use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Seeder;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::firstOrCreate(['name' => 'show', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name' => 'create', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name' => 'edit', 'guard_name' => 'web']);
        Permission::firstOrCreate(['name' => 'delete', 'guard_name' => 'web']);

        // Создаем роли и даем разрешения
        $admin = Role::firstOrCreate(['name' => 'admin', 'guard_name' => 'web']);
        $admin->givePermissionTo(['show', 'create', 'edit', 'delete']);

        $contractor = Role::firstOrCreate(['name' => 'contractor', 'guard_name' => 'web']);
        $contractor->givePermissionTo('show');
    }
}
