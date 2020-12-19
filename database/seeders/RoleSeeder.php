<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
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
        Permission::create(['name' => 'kelola data calon tk']);
        Permission::create(['name' => 'kelola data calon sd']);
        Permission::create(['name' => 'kelola data calon smp']);
        Permission::create(['name' => 'kelola data calon sma']);
        
        Permission::create(['name' => 'memilih sekolah']);
        Permission::create(['name' => 'melakukan pendaftaran tk']);
        Permission::create(['name' => 'melakukan pendaftaran sd']);
        Permission::create(['name' => 'melakukan pendaftaran smp']);
        Permission::create(['name' => 'melakukan pendaftaran sma']);

        Role::create([
            'name' => 'super-admin',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'admin',
            'guard_name' => 'web'
        ]);

        Role::create([
            'name' => 'calon',
            'guard_name' => 'web'
        ]);
    }
}
