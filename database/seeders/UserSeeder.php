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
                'role_id' => 2, // 'Siswa'
                'name' => 'I Nyoman Arijaya Putra S.pd',
                'email' => 'ari@gmail.com',
                'password' => Hash::make('ari@gmail.com'),
                'email_verified_at' => date('Y-m-d H:i:s'),
                'remember_token' => null,
            ],
            [
                'role_id' => 2, // 'Siswa'
                'name' => 'Herman Saputra S.Pd',
                'email' => 'herman@gmail.com',
                'password' => Hash::make('herman@gmail.com'),
                'email_verified_at' => date('Y-m-d H:i:s'),
                'remember_token' => null,
            ],
            [
                'role_id' => 2, // 'Siswa'
                'name' => 'Muthia Rifdah M S.Pd',
                'email' => 'muthia@gmail.com',
                'password' => Hash::make('muthia@gmail.com'),
                'email_verified_at' => date('Y-m-d H:i:s'),
                'remember_token' => null,
            ],
            [
                'role_id' => 3, // 'Siswa'
                'name' => 'PT Arkatama Multi Solusindo',
                'email' => 'arkatama@gmail.com',
                'password' => Hash::make('arkatama@gmail.com'),
                'email_verified_at' => date('Y-m-d H:i:s'),
                'remember_token' => null,
            ],
            [
                'role_id' => 3, // 'Siswa'
                'name' => 'PT MeetDoctor Indonesia',
                'email' => 'meetdoctor@gmail.com',
                'password' => Hash::make('meetdoctor@gmail.com'),
                'email_verified_at' => date('Y-m-d H:i:s'),
                'remember_token' => null,
            ],
            [
                'role_id' => 3, // 'Siswa'
                'name' => 'PT Laracamp Indonesia',
                'email' => 'laracamp@gmail.com',
                'password' => Hash::make('laracamp@gmail.com'),
                'email_verified_at' => date('Y-m-d H:i:s'),
                'remember_token' => null,
            ],
            [
                'role_id' => 4, // 'Siswa'
                'name' => 'Bagus Adhy Prasetyo',
                'email' => 'bagus@gmail.com',
                'password' => Hash::make('bagus@gmail.com'),
                'email_verified_at' => date('Y-m-d H:i:s'),
                'remember_token' => null,
            ],
            [
                'role_id' => 4, // 'Siswa'
                'name' => 'Syafira Aulia Wahdani',
                'email' => 'sapir@gmail.com',
                'password' => Hash::make('sapir@gmail.com'),
                'email_verified_at' => date('Y-m-d H:i:s'),
                'remember_token' => null,
            ],
            [
                'role_id' => 4, // 'Siswa'
                'name' => 'Andre Widiyanto',
                'email' => 'andre@gmail.com',
                'password' => Hash::make('andre@gmail.com'),
                'email_verified_at' => date('Y-m-d H:i:s'),
                'remember_token' => null,
            ],

        ];

        User::insert($user);
    }
}
