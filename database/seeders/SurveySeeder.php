<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\MasterData\Survey;

class SurveySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => 'Religiusitas (ketaatan dalam beribadah) yang ditunjukan oleh siswa PKL SMK Negeri 2 Malang',
                'kategori' => 'Religiusitas'
            ],
            [
                'title' => 'Sikap kejujuran yang ditunjukkan oleh siswa PKL SMK Negeri 2 Malang',
                'kategori' => 'Kejujuran'
            ],
            [
                'title' => 'Sikap tanggung jawab yang ditunjukkan oleh siswa PKL SMK Negeri 2 Malang',
                'kategori' => 'Tanggung Jawab'
            ],
            [
                'title' => 'Sikap kedisiplinan yang ditunjukkan oleh siswa PKL SMK Negeri 2 Malang',
                'kategori' => 'Kedisiplinan'
            ],
            [
                'title' => 'Ketepatan waktu dalam menyelesaikan tugas atau pekerjaan',
                'kategori' => 'Ketepatan Waktu'
            ],
        ];

        Survey::insert($data);
    }
}
