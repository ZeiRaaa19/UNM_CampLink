<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'username' => 'admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('123456'), // Ganti dengan password yang sesuai
                'profile_picture' => null,
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'partner1',
                'email' => 'partner@example.com',
                'password' => Hash::make('123456'), // Ganti dengan password yang sesuai
                'profile_picture' => null,
                'role' => 'partner',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'username' => 'user1',
                'email' => 'user@example.com',
                'password' => Hash::make('123456'), // Ganti dengan password yang sesuai
                'profile_picture' => null,
                'role' => 'user',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}