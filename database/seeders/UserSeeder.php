<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'lutdaus007@gmail.com',
            'password' => bcrypt('password'),
            'email_verified_at' => now()
        ]);
        $admin->assignRole('super-admin');

        $adminTk = User::create([
            'name' => 'Admin TK',
            'email' => 'tk@gmail.com',
            'password' => bcrypt('password'),
            'email_verified_at' => now()
        ]);
        $adminTk->assignRole('admin')->givePermissionTo('kelola data calon tk');

        $adminsd = User::create([
            'name' => 'Admin sd',
            'email' => 'sd@gmail.com',
            'password' => bcrypt('password'),
            'email_verified_at' => now()
        ]);
        $adminsd->assignRole('admin')->givePermissionTo('kelola data calon sd');

        $adminsmp = User::create([
            'name' => 'Admin smp',
            'email' => 'smp@gmail.com',
            'password' => bcrypt('password'),
            'email_verified_at' => now()
        ]);
        $adminsmp->assignRole('admin')->givePermissionTo('kelola data calon smp');

        $adminsma = User::create([
            'name' => 'Admin sma',
            'email' => 'sma@gmail.com',
            'password' => bcrypt('password'),
            'email_verified_at' => now()
        ]);
        $adminsma->assignRole('admin')->givePermissionTo('kelola data calon sma');

        $tk = User::create([
            'name' => 'User',
            'email' => 'tk@email.test',
            'password' => bcrypt('password'),
            'email_verified_at' => now()
        ]);
        $tk->assignRole('calon')->givePermissionTo('memilih sekolah');

        $sd = User::create([
            'name' => 'User',
            'email' => 'sd@email.test',
            'password' => bcrypt('password'),
            'email_verified_at' => now()
        ]);
        $sd->assignRole('calon')->givePermissionTo('memilih sekolah');

        $smp = User::create([
            'name' => 'User',
            'email' => 'smp@email.test',
            'password' => bcrypt('password'),
            'email_verified_at' => now()
        ]);
        $smp->assignRole('calon')->givePermissionTo('memilih sekolah');

        $sma = User::create([
            'name' => 'User',
            'email' => 'sma@email.test',
            'password' => bcrypt('password'),
            'email_verified_at' => now()
        ]);

        $sma->assignRole('calon')->givePermissionTo('memilih sekolah');
    }
}
