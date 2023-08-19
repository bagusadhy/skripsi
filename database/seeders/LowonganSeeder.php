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
                'mitra_id'      => 1,
                'jurusan_id'    => 3,
                'nama'          => 'House Keeping', // 1
                'kuota'         => 5
            ],
            [
                'mitra_id'      => 1,
                'jurusan_id'    => 1,
                'nama'          => 'Chef', // 2
                'kuota'         => 5
            ],
            [
                'mitra_id'      => 1,
                'jurusan_id'    => 2,
                'nama'          => 'Teknisi Jaringan', // 3
                'kuota'         => 5
            ],
        ];

        Lowongan::insert($lowongan);
    }
}
