<?php

namespace App\Models\MasterData;

use App\Models\MasterData\Siswa;
use App\Models\MasterData\Guru;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Jurusan extends Model
{
    // use HasFactory;
    use SoftDeletes;

    // declare table name
    public $table = 'jurusan';


    // this filed must type date with format yyyy-mm-dd hh:mm:ss
    protected $date = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // declare field that fillable
    protected $fillable = [
        'jurusan',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function siswa()
    {
        return $this->hasMany(Siswa::class, 'jurusan_id');
    }

    public function guru()
    {
        return $this->hasMany(Guru::class, 'jurusan_id');
    }
}
