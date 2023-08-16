<?php

namespace App\Models\MasterData;

use App\Models\User;
use App\Models\Kegiatan\Saran;
use App\Models\Kegiatan\Bimbingan;
use App\Models\Kegiatan\Monitoring;
use App\Models\Kegiatan\PesertaPkl;
use App\Models\Kegiatan\HasilSurvey;
use App\Models\Kegiatan\Lowongan;
use App\Models\Kegiatan\PendaftarPkl;
use App\Models\MasterData\BidangUsaha;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mitra extends Model
{
    // use HasFactory;
    use SoftDeletes;

    // declare table name
    public $table = 'mitra';


    // this filed must type date with format yyyy-mm-dd hh:mm:ss
    protected $date = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // declare field that fillable
    protected $fillable = [
        'user_id',
        'bidang_usaha_id',
        'nama',
        'alamat',
        'kontak',
        'nama_pimpinan',
        'nama_pembimbing',
        'foto',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function isProfileComplete(): bool
    {
        return !empty($this->bidang_usaha_id) && !empty($this->nama) && !empty($this->alamat) && !empty($this->kontak) && !empty($this->nama_pimpinan) && !empty($this->nama_pembimbing) && !empty($this->foto);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function bidang_usaha()
    {
        return $this->belongsTo(BidangUsaha::class, 'bidang_usaha_id', 'id');
    }

    public function bimbingan()
    {
        return $this->hasMany(Bimbingan::class, 'mitra_id');
    }
    public function monitoring()
    {
        return $this->hasMany(Monitoring::class, 'mitra_id');
    }
    public function pendaftar_pkl()
    {
        return $this->hasMany(PendaftarPkl::class, 'mitra_id');
    }
    public function peserta_pkl()
    {
        return $this->hasMany(PesertaPkl::class, 'mitra_id');
    }
    public function lowongan()
    {
        return $this->hasMany(Lowongan::class, 'mitra_id');
    }
    public function hasil_survey()
    {
        return $this->hasOne(HasilSurvey::class, 'mitra_id');
    }
    public function saran()
    {
        return $this->hasOne(Saran::class, 'mitra_id');
    }
}
