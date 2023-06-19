<?php

namespace App\Models\Kegiatan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class PengajuanMitra extends Model
{
    // use HasFactory;
    use SoftDeletes;

    // declare table name
    public $table = 'pengajuan_mitra';


    // this filed must type date with format yyyy-mm-dd hh:mm:ss
    protected $date = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // declare field that fillable
    protected $fillable = [
        'siswa_id',
        'bidang_usaha_id',
        'nama',
        'alamat',
        'kontak',
        'alasan',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
