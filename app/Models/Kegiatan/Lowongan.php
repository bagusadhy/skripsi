<?php

namespace App\Models\Kegiatan;

use App\Models\MasterData\Mitra;
use App\Models\Kegiatan\PendaftarPkl;
use App\Models\Kegiatan\PesertaPkl;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lowongan extends Model
{
    // use HasFactory;
    use SoftDeletes;

    // declare table name
    public $table = 'lowongan';


    // this filed must type date with format yyyy-mm-dd hh:mm:ss
    protected $date = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // declare field that fillable
    protected $fillable = [
        'mitra_id',
        'nama',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function mitra()
    {
        return $this->belongsTo(Mitra::class, 'mitra_id', 'id');
    }

    public function pendaftar()
    {
        return $this->hasMany(PendaftarPkl::class, 'lowongan_id');
    }

    public function peserta()
    {
        return $this->hasMany(PesertaPkl::class, 'lowongan_id');
    }
}
