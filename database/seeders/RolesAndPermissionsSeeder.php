<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //разрешение на просмотр,добавление,редактирования,удаление
        Permission::create(['name' => 'view']);
        Permission::create(['name' => 'create']);
        Permission::create(['name' => 'edit']);
        Permission::create(['name' => 'delete']);
        $admin = Role::create(['name' => 'admin']);
        $admin->givePermissionTo('view','create','edit','delete');

        $contractor = Role::create(['name' => 'contractor']);
        $contractor->givePermissionTo('view');
    }
}
