<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\MasterData\Kelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelas = [
            [
                'jurusan_id' => 1,
                'kelas'      => 'XII KUL', // 1
            ],
            [
                'jurusan_id' => 2,
                'kelas'      => 'XII TKJ', // 2
            ],
            [
                'jurusan_id' => 3,
                'kelas'      => 'XII PHT', // 3
            ],
            [
                'jurusan_id' => 4,
                'kelas'      => 'XII ULW', // 4
            ],
            [
                'jurusan_id' => 5,
                'kelas'      => 'XII PS', // 5
            ],
            [
                'jurusan_id' => 6,
                'kelas'      => 'XII AKC', // 6
            ],
        ];

        Kelas::insert($kelas);
    }
}
