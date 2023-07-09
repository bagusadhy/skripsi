<?php

namespace App\Models\Kegiatan;

use App\Models\MasterData\Mitra;
use App\Models\MasterData\PeriodePkl;
use App\Models\MasterData\Guru;
use App\Models\MasterData\Siswa;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PesertaPkl extends Model
{
    // use HasFactory;
    use SoftDeletes;

    // declare table name
    public $table = 'peserta_pkl';


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
        'guru_id',
        'periode_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function periode_pkl()
    {
        return $this->belongsTo(PeriodePkl::class, 'periode_id', 'id');
    }
    public function mitra()
    {
        return $this->belongsTo(Mitra::class, 'mitra_id', 'id');
    }
    public function guru()
    {
        return $this->belongsTo(Guru::class, 'guru_id', 'id');
    }
    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'siswa_id', 'id');
    }
}
