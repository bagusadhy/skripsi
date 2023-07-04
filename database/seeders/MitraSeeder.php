<?php

namespace Database\Seeders;

use App\Models\MasterData\Mitra;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MitraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'user_id' => 5,
                'bidang_usaha_id' => 1,
                'nama' => 'PT Arkatama Multi Solusindo',
                'kontak' => '081234567890',
                'nama_pimpinan' => 'Ahsanun Naseh',
                'nama_pembimbing' => 'Makhfud',
                'alamat' => 'Jl. Raya Kampus Udayana, Jimbaran, Kec. Kuta Sel., Kabupaten Badung, Bali 80361',
            ],
            [
                'user_id' => 6,
                'bidang_usaha_id' => 1,
                'nama' => 'PT MeetDoctor Indonesia',
                'kontak' => '081234567980',
                'nama_pimpinan' => 'Monkey D Luffy',
                'nama_pembimbing' => 'Chopper',
                'alamat' => 'Jl. Raya Kampus Udayana, Jimbaran, Kec. Kuta Sel., Kabupaten Badung, Bali 80361',
            ],
            [
                'user_id' => 7,
                'bidang_usaha_id' => 1,
                'nama' => 'PT Laracamp Indonesia',
                'kontak' => '081234569780',
                'nama_pimpinan' => 'Senku Ishigami',
                'nama_pembimbing' => 'Chrome',
                'alamat' => 'Jl. Raya Kampus Udayana, Jimbaran, Kec. Kuta Sel., Kabupaten Badung, Bali 80361',
            ],
        ];

        Mitra::insert($data);
    }
}
