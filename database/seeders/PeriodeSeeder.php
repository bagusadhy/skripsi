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
                'pendaftaran' => '2023-06-01',
                'kegiatan' => '2023-07-01',
                'kegiatan_selesai' => '2023-12-30',
                'status' => '1'
            ],
        ];

        PeriodePkl::insert($data);
    }
}
