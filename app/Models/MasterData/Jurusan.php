<?php

namespace App\Models\MasterData;

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
}
