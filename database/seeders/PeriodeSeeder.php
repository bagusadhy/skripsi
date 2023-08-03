<?php

namespace Database\Seeders;

use App\Models\MasterData\PeriodePkl;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeriodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'tahun' => '2023',
                'pendaftaran' => '2023-01-01',
                'kegiatan' => '2023-10-30',
                'kegiatan_selesai' => '2023-11-30',
                'status' => '1'
            ],
        ];

        PeriodePkl::insert($data);
    }
}
