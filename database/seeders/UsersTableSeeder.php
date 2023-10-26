<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('adminpassword'),
            ],
            [
                'name' => 'User 1',
                'email' => 'user1@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('user1password'),
            ],
            [
                'name' => 'User 2',
                'email' => 'user2@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('user2password'),
            ],
            // Tambahkan data user lain sesuai kebutuhan Anda
        ]);
    }
}
