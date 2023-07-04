<?php

namespace Database\Seeders;

use App\Models\MasterData\Guru;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'user_id' => 2,
                'jurusan_id' => 1,
                'nip' => rand(10000, 99999),
                'nama' => 'I Nyoman Arijaya Putra S.pd',
                'jenis_kelamin' => 1,
                'kontak' => '081234567890',
                'alamat' => 'Jl. Raya Kampus Udayana, Jimbaran, Kec. Kuta Sel., Kabupaten Badung, Bali 80361',
            ],
            [
                'user_id' => 3,
                'jurusan_id' => 1,
                'nip' => rand(10000, 99999),
                'nama' => 'Herman Saputra S.Pd',
                'jenis_kelamin' => 1,
                'kontak' => '081234567980',
                'alamat' => 'Jl. Raya Kampus Udayana, Jimbaran, Kec. Kuta Sel., Kabupaten Badung, Bali 80361',
            ],
            [
                'user_id' => 4,
                'jurusan_id' => 1,
                'nip' => rand(10000, 99999),
                'nama' => 'Muthia Rifdah M S.Pd',
                'jenis_kelamin' => 2,
                'kontak' => '081234569780',
                'alamat' => 'Jl. Raya Kampus Udayana, Jimbaran, Kec. Kuta Sel., Kabupaten Badung, Bali 80361',
            ],
        ];

        Guru::insert($data);
    }
}

