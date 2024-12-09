<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Tambahkan pengguna super admin dengan username yang beda
        User::create([
            'username' => 'admin', // Ganti 'admin' menjadi 'super-admin'
            'email' => 'admin@example.com',
            'password' => bcrypt('admin'), // Atau ganti dengan password yang unik
            'phone' => '123456789',
            'avatar' => null,
            'role' => 'admin',
        ]);

        // Tambahkan partner1 dan user1 dengan usernames yang unik
        User::create([
            'username' => 'partner1',
            'email' => 'partner1@example.com',
            'password' => bcrypt('123456'),
            'phone' => '123456789',
            'avatar' => null,
            'role' => 'partner',
        ]);

        User::create([
            'username' => 'user1',
            'email' => 'user1@example.com',
            'password' => bcrypt('123456'),
            'phone' => '123456789',
            'avatar' => null,
            'role' => 'user',
        ]);
    }
}
