<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kegiatan\Lowongan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class LowonganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lowongan = [
            [
                'mitra_id'  => 1,
                'nama'      => 'House Keeping', // 1
            ],
            [
                'mitra_id'  => 1,
                'nama'      => 'Chef', // 2
            ],
            [
                'mitra_id'  => 1,
                'nama'      => 'Teknisi Jaringan', // 3
            ],
        ];

        Lowongan::insert($lowongan);
    }
}
