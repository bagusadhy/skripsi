<?php

namespace App\Models\MasterData;

use App\Models\User;
use App\Models\Kegiatan\Bimbingan;
use App\Models\MasterData\Jurusan;
use App\Models\Kegiatan\Monitoring;
use App\Models\Kegiatan\PesertaPkl;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Guru extends Model
{
    // use HasFactory;
    use SoftDeletes;

    // declare table name
    public $table = 'guru';


    // this filed must type date with format yyyy-mm-dd hh:mm:ss
    protected $date = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // declare field that fillable
    protected $fillable = [
        'user_id',
        'jurusan_id',
        'nama',
        'nip',
        'jenis_kelamin',
        'kontak',
        'alamat',
        'foto',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'jurusan_id', 'id');
    }

    public function bimbingan()
    {
        return $this->hasMany(Bimbingan::class, 'guru_id');
    }
    public function monitoring()
    {
        return $this->hasMany(Monitoring::class, 'guru_id');
    }
    public function peserta()
    {
        return $this->hasMany(PesertaPkl::class, 'guru_id');
    }
}
