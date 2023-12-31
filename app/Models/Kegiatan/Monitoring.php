<?php

namespace App\Models\Kegiatan;

use App\Models\MasterData\Guru;
use App\Models\MasterData\Mitra;
use App\Models\MasterData\PeriodePkl;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Monitoring extends Model
{
    // use HasFactory;
    use SoftDeletes;

    // declare table name
    public $table = 'monitoring';


    // this filed must type date with format yyyy-mm-dd hh:mm:ss
    protected $date = [
        'tanggal_pelaksanaan',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // declare field that fillable
    protected $fillable = [
        'guru_id',
        'mitra_id',
        'periode_id',
        'topik',
        'permasalahan',
        'tujuan',
        'peserta_pkl',
        'deskripsi',
        'tanggal_pelaksanaan',
        'foto',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function periode_pkl()
    {
        return $this->belongsTo(PeriodePkl::class, 'periode_id', 'id');
    }
    public function guru()
    {
        return $this->belongsTo(Guru::class, 'guru_id', 'id');
    }
    public function mitra()
    {
        return $this->belongsTo(Mitra::class, 'mitra_id', 'id');
    }
}
