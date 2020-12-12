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

        $admin->assignRole('admin');

        $tk = User::create([
            'name' => 'User',
            'email' => 'tk@email.test',
            'password' => bcrypt('password'),
            'email_verified_at' => now()
        ]);
        $tk->assignRole('calon');

        $sd = User::create([
            'name' => 'User',
            'email' => 'sd@email.test',
            'password' => bcrypt('password'),
            'email_verified_at' => now()
        ]);
        $sd->assignRole('calon');

        $smp = User::create([
            'name' => 'User',
            'email' => 'smp@email.test',
            'password' => bcrypt('password'),
            'email_verified_at' => now()
        ]);
        $smp->assignRole('calon');

        $sma = User::create([
            'name' => 'User',
            'email' => 'sma@email.test',
            'password' => bcrypt('password'),
            'email_verified_at' => now()
        ]);

        $sma->assignRole('calon');
    }
}
