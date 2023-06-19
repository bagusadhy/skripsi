<?php

namespace App\Models\Kegiatan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DokumenSiswa extends Model
{
    // use HasFactory;
    use SoftDeletes;

    // declare table name
    public $table = 'dokumen_siswa';


    // this filed must type date with format yyyy-mm-dd hh:mm:ss
    protected $date = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // declare field that fillable
    protected $fillable = [
        'siswa_id',
        'surat_pernyataan_siswa',
        'surat_izin_ortu',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
