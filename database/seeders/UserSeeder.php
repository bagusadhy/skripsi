<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'role_id' => 1, // 'Super Admin
                'name' => 'Super User',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin123'),
                'email_verified_at' => date('Y-m-d H:i:s'),
                'remember_token' => null,
            ],
            [
                'role_id' => 4, // 'Siswa'
                'name' => 'Bagus',
                'email' => 'bagus@gmail.com',
                'password' => Hash::make('bagus@gmail.com'),
                'email_verified_at' => date('Y-m-d H:i:s'),
                'remember_token' => null,
            ],
        ];

        User::insert($user);
    }
}
