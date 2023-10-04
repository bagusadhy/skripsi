<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kegiatan\Bimbingan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BimbinganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'guru_id' => 1,
                'mitra_id' => 1,
            ],
            // [
            //     'guru_id' => 1,
            //     'mitra_id' => 2,
            // ],
            // [
            //     'guru_id' => 1,
            //     'mitra_id' => 3,
            // ]
        ];

        Bimbingan::insert($data);
    }
}
