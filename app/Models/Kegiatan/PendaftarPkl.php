<?php

namespace App\Models\Kegiatan;

use App\Models\MasterData\Mitra;
use App\Models\MasterData\Siswa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PendaftarPkl extends Model
{
    // use HasFactory;
    use SoftDeletes;

    // declare table name
    public $table = 'pendaftar_pkl';


    // this filed must type date with format yyyy-mm-dd hh:mm:ss
    protected $date = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // declare field that fillable
    protected $fillable = [
        'siswa_id',
        'mitra_id',
        'status',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function mitra()
    {
        return $this->belongsTo(Mitra::class, 'mitra_id', 'id');
    }
    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'siswa_id', 'id');
    }
}
