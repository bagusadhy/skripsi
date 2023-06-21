<?php

namespace Database\Seeders;

use App\Models\ManagementAccess\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = [
            [
                'title'      => 'Super Admin', // 1
            ],
            [
                'title'      => 'Guru', // 2
            ],
            [
                'title'      => 'Mitra', // 3
            ],
            [
                'title'      => 'Siswa', // 4
            ],
        ];

        Role::insert($role);
    }
}
