<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->createMany([
            [
                'role_id' => 1,
                'gender_id' => 1,
                'first_name' => 'Iaman',
                'last_name' => 'Admin',
                'email' => 'admin@gmail.com',
                'display_picture_link' => 'display_images/admin.jpg',
                'password' => Hash::make('Admin123!')
            ],
            [
                'role_id' => 2,
                'gender_id' => 2,
                'first_name' => 'Iama',
                'last_name' => 'User',
                'email' => 'user@gmail.com',
                'display_picture_link' => 'display_images/user.jpg',
                'password' => Hash::make('User123!')
            ]
        ]);
    }
}
