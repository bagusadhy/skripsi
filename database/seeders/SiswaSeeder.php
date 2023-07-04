<?php

namespace Database\Seeders;

use App\Models\MasterData\Siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'user_id' => 8,
                'jurusan_id' => 1,
                'kelas_id' => 1,
                'nisn' => rand(10000, 99999),
                'nama' => 'Bagus Adhy Prasetyo',
                'jenis_kelamin' => 1,
                'tempat_lahir' => 'Tokyo',
                'tanggal_lahir' => '2000-01-01',
                'agama' => 'Islam',
                'kontak' => '081234567890',
                'alamat' => 'Jl. Raya Kampus Udayana, Jimbaran, Kec. Kuta Sel., Kabupaten Badung, Bali 80361',
            ],
            [
                'user_id' => 9,
                'jurusan_id' => 1,
                'kelas_id' => 1,
                'nisn' => rand(10000, 99999),
                'nama' => 'Syafira Aulia Wahdani',
                'jenis_kelamin' => 2,
                'tempat_lahir' => 'Tokyo',
                'tanggal_lahir' => '2000-01-01',
                'agama' => 'Islam',
                'kontak' => '081234567980',
                'alamat' => 'Jl. Raya Kampus Udayana, Jimbaran, Kec. Kuta Sel., Kabupaten Badung, Bali 80361',
            ],
            [
                'user_id' => 10,
                'jurusan_id' => 1,
                'kelas_id' => 1,
                'nisn' => rand(10000, 99999),
                'nama' => 'Andre Widiyanto',
                'jenis_kelamin' => 1,
                'tempat_lahir' => 'Tokyo',
                'tanggal_lahir' => '2000-01-01',
                'agama' => 'Islam',
                'kontak' => '081234569780',
                'alamat' => 'Jl. Raya Kampus Udayana, Jimbaran, Kec. Kuta Sel., Kabupaten Badung, Bali 80361',
            ],
        ];

        Siswa::insert($data);
    }
}
