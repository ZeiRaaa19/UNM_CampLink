<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        // Tambahkan pengguna super admin dengan username yang beda
        User::create([
            'username' => 'admin', // Ganti 'admin' menjadi 'super-admin'
            'name' => 'Administrator',
            'email' => 'admin@example.com',
            'password' => bcrypt('admin'), // Atau ganti dengan password yang unik
            'phone' => '123456789',
            'profile_picture' => null,
            'role' => 'admin',
        ]);

        // Tambahkan partner1 dan user1 dengan usernames yang unik
        User::create([
            'username' => 'partner1',
            'name' => 'Partner1',
            'email' => 'partner1@example.com',
            'password' => bcrypt('123456'),
            'phone' => '123456789',
            'profile_picture' => null,
            'role' => 'partner',
        ]);

        User::create([
            'username' => 'user1',
            'name' => 'User1',
            'email' => 'user1@example.com',
            'password' => bcrypt('123456'),
            'phone' => '123456789',
            'profile_picture' => null,
            'role' => 'user',
        ]);
    }
}