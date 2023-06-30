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
                'kelas'      => 'XII KUL', // 1
            ],
            [
                'kelas'      => 'XII TKJ', // 2
            ],
            [
                'kelas'      => 'XII PHT', // 3
            ],
            [
                'kelas'      => 'XII ULW', // 4
            ],
            [
                'kelas'      => 'XII PS', // 5
            ],
            [
                'kelas'      => 'XII AKC', // 6
            ],
        ];

        Kelas::insert($kelas);
    }
}
