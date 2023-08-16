<?php

namespace App\Models\MasterData;

use App\Models\Kegiatan\AktvitasSiswa;
use App\Models\Kegiatan\DokumenSiswa;
use App\Models\Kegiatan\Laporan;
use App\Models\Kegiatan\Nilai;
use App\Models\Kegiatan\PendaftarPkl;
use App\Models\Kegiatan\PengajuanMitra;
use App\Models\Kegiatan\PesertaPkl;
use App\Models\MasterData\Jurusan;
use App\Models\MasterData\Kelas;
use App\Models\User;
use App\Models\MasterData\PeriodePkl;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Siswa extends Model
{
    // use HasFactory;
    use SoftDeletes;

    // declare table name
    public $table = 'siswa';


    // this filed must type date with format yyyy-mm-dd hh:mm:ss
    protected $date = [
        'tanggal_lahir',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // declare field that fillable
    protected $fillable = [
        'user_id',
        'jurusan_id',
        'kelas_id',
        'periode_id',
        'nama',
        'nisn',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'agama',
        'alamat',
        'kontak',
        'foto',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function isProfileComplete(): bool
    {
        return !empty($this->jurusan_id) && !empty($this->kelas_id) && !empty($this->nama) && !empty($this->nisn) && !empty($this->tempat_lahir) && !empty($this->tanggal_lahir) && !empty($this->jenis_kelamin) && !empty($this->agama) && !empty($this->alamat) && !empty($this->alamat) && !empty($this->kontak) && !empty($this->foto) ;
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function periode_pkl()
    {
        return $this->belongsTo(PeriodePkl::class, 'periode_id', 'id');
    }
    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'jurusan_id', 'id');
    }
    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id', 'id');
    }
    public function pendaftar_pkl()
    {
        return $this->hasMany(PendaftarPkl::class, 'siswa_id');
    }
    public function peserta_pkl()
    {
        return $this->hasOne(PesertaPkl::class, 'siswa_id');
    }
    public function pengajuan_mitra()
    {
        return $this->hasMany(PengajuanMitra::class, 'siswa_id');
    }
    public function dokumen_siswa()
    {
        return $this->hasOne(DokumenSiswa::class, 'siswa_id');
    }
    public function aktivitas_siswa()
    {
        return $this->hasMany(AktvitasSiswa::class, 'siswa_id');
    }
    public function nilai()
    {
        return $this->hasOne(Nilai::class, 'siswa_id');
    }
    public function laporan()
    {
        return $this->hasOne(Laporan::class, 'siswa_id');
    }
}
