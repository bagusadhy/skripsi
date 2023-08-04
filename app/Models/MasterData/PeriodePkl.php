<?php

namespace App\Models\MasterData;

use App\Models\Kegiatan\DokumenSiswa;
use App\Models\Kegiatan\Monitoring;
use App\Models\Kegiatan\PendaftarPkl;
use App\Models\Kegiatan\PengajuanMitra;
use App\Models\Kegiatan\PesertaPkl;
use App\Models\MasterData\Siswa;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PeriodePkl extends Model
{
    // use HasFactory;
    use SoftDeletes;

    // declare table name
    public $table = 'periode_pkl';


    // this filed must type date with format yyyy-mm-dd hh:mm:ss
    protected $date = [
        'tanggal_dimulai',
        'tanggal_berakhir',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // declare field that fillable
    protected $fillable = [
        'tahun',
        'pendaftaran',
        'kegiatan',
        'kegiatan_selesai',
        'status',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function peserta()
    {
        return $this->hasMany(PesertaPkl::class, 'periode_id');
    }
    public function siswa()
    {
        return $this->hasMany(Siswa::class, 'periode_id');
    }
    public function monitoring()
    {
        return $this->hasMany(Monitoring::class, 'periode_id');
    }
    public function pengajuan_mitra()
    {
        return $this->hasMany(PengajuanMitra::class, 'periode_id');
    }
    public function pendaftar()
    {
        return $this->hasMany(PendaftarPkl::class, 'periode_id');
    }
    public function dokumen()
    {
        return $this->hasMany(DokumenSiswa::class, 'periode_id');
    }
}
