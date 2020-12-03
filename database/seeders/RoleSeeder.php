<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'admin',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'calon',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'calon-sma',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'calon-smp',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'calon-sd',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'calon-tk',
            'guard_name' => 'web'
        ]);
    }
}
