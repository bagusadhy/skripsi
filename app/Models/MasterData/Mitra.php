<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mitra extends Model
{
    // use HasFactory;
    use SoftDeletes;

    // declare table name
    public $table = 'mitra';


    // this filed must type date with format yyyy-mm-dd hh:mm:ss
    protected $date = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // declare field that fillable
    protected $fillable = [
        'user_id',
        'bidang_usaha_id',
        'nama',
        'alamat',
        'kontak',
        'nama_pimpinan',
        'nama_pembimbing',
        'foto',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
