<?php

namespace App\Models\Kegiatan;

use App\Models\MasterData\PeriodePkl;
use App\Models\MasterData\Siswa;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AktivitasSiswa extends Model
{
    // use HasFactory;
    use SoftDeletes;

    // declare table name
    public $table = 'aktivitas_siswa';


    // this filed must type date with format yyyy-mm-dd hh:mm:ss
    protected $date = [
        'tanggal',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // declare field that fillable
    protected $fillable = [
        'siswa_id',
        'periode_id',
        'tanggal',
        'jurnal',
        'status',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'siswa_id', 'id');
    }
    public function periode_pkl()
    {
        return $this->belongsTo(PeriodePkl::class, 'periode_id', 'id');
    }
}
