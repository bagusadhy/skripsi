<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use App\Models\MasterData\Jurusan;

class Template extends Model
{
    // use HasFactory;
    use SoftDeletes;

    // declare table name
    public $table = 'template';


    // this filed must type date with format yyyy-mm-dd hh:mm:ss
    protected $date = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // declare field that fillable
    protected $fillable = [
        'jurusan_id',
        'laporan',
        'penilaian',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class, 'jurusan_id', 'id');
    }
}
