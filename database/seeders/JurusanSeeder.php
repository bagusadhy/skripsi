<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MasterData\Jurusan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jurusan = [
            [
                'jurusan'      => 'Kuliner', // 1
            ],
            [
                'jurusan'      => 'Teknik Jaringan Komputer dan Telekomunikasi', // 2
            ],
            [
                'jurusan'      => 'Perhotelan', // 3
            ],
            [
                'jurusan'      => 'Usaha Layanan Wisata', // 4
            ],
            [
                'jurusan'      => 'Pekerja Sosial', // 5
            ],
            [
                'jurusan'      => 'Asisten Keperawatan dan Caregiver', // 6
            ],
        ];

        Jurusan::insert($jurusan);
    }
}
