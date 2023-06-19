<?php

namespace App\Models\Kegiatan;

use App\Models\MasterData\Guru;
use App\Models\MasterData\Mitra;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bimbingan extends Model
{
    // use HasFactory;
    use SoftDeletes;

    // declare table name
    public $table = 'bimbingan';


    // this filed must type date with format yyyy-mm-dd hh:mm:ss
    protected $date = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // declare field that fillable
    protected $fillable = [
        'guru_id',
        'mitra_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function guru()
    {
        return $this->belongsTo(Guru::class, 'guru_id', 'id');
    }

    public function mitra()
    {
        return $this->belongsTo(Mitra::class, 'mitra_id', 'id');
    }
}
