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
                'tanggal_dimulai' => '2021-01-01',
                'tanggal_berakhir' => '2023-10-30',
            ]
        ];

        PeriodePkl::insert($data);
    }
}
