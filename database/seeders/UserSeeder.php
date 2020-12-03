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

        $user = User::create([
            'name' => 'User',
            'email' => 'test@email.test',
            'password' => bcrypt('password'),
            'email_verified_at' => now()
        ]);

        $user->assignRole('calon');
    }
}
