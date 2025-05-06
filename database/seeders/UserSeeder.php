<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $adminRole = Role::create(['name' => 'admin']);
        $contractorRole = Role::create(['name' => 'contractor']);


        $admin = User::create([
            'name' => 'Admin',
            'email' => 'test@example.com',
            'password' => Hash::make('123456'),
        ]);
        $admin->assignRole($adminRole);


        $contractor = User::create([
            'name' => 'Contractor',
            'email' => 'test2@example.com',
            'password' => Hash::make('123456'),
        ]);
        $contractor->assignRole($contractorRole);
    }
}
