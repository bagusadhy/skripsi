<?php

namespace Database\Seeders;

use App\Models\MasterData\BidangUsaha;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BidangUsahaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => 'Teknologi dan Jaringan'
            ],
            [
                'title' => 'Perhotelan'
            ],
            [
                'title' => 'Pariwisata'
            ],
            [
                'title' => 'Sosial'
            ],
            [
                'title' => 'Kesehatan'
            ],
            [
                'title' => 'Kuliner'
            ],
        ];

        BidangUsaha::insert($data);
    }
}
