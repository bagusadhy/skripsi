<?php

namespace App\Models\MasterData;

use App\Models\MasterData\Mitra;
use App\Models\Kegiatan\PengajuanMitra;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BidangUsaha extends Model
{
    // use HasFactory;
    use SoftDeletes;

    // declare table name
    public $table = 'bidang_usaha';


    // this filed must type date with format yyyy-mm-dd hh:mm:ss
    protected $date = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // declare field that fillable
    protected $fillable = [
        'title',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function mitra()
    {
        return $this->hasMany(Mitra::class, 'bidang_usaha_id');
    }

    public function pengajuan_mitra()
    {
        return $this->hasMany(PengajuanMitra::class, 'bidang_usaha_id');
    }
}
