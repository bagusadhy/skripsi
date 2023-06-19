<?php

namespace App\Models\MasterData;

use App\Models\MasterData\Siswa;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kelas extends Model
{
    // use HasFactory;
    use SoftDeletes;

    // declare table name
    public $table = 'kelas';


    // this filed must type date with format yyyy-mm-dd hh:mm:ss
    protected $date = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // declare field that fillable
    protected $fillable = [
        'kelas',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function siswa()
    {
        return $this->hasMany(Siswa::class, 'kelas_id');
    }
}
