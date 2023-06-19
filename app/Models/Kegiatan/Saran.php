<?php

namespace App\Models\Kegiatan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Saran extends Model
{
    // use HasFactory;
    use SoftDeletes;

    // declare table name
    public $table = 'saran';


    // this filed must type date with format yyyy-mm-dd hh:mm:ss
    protected $date = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // declare field that fillable
    protected $fillable = [
        'mitra_id',
        'saran',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
