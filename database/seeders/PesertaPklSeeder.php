<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kegiatan\PesertaPkl;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PesertaPklSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'siswa_id' => 1,
                'mitra_id' => 1,
                'lowongan_id' => 1,
                'guru_id' => 1,
                'periode_id' => 1,
            ],
            [
                'siswa_id' => 2,
                'mitra_id' => 1,
                'lowongan_id' => 1,
                'guru_id' => 1,
                'periode_id' => 1,
            ],
            [
                'siswa_id' => 3,
                'mitra_id' => 1,
                'lowongan_id' => 1,
                'guru_id' => 1,
                'periode_id' => 1,
            ],
        ];

        PesertaPkl::insert($data);
    }
}
