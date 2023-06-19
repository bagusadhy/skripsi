<?php

namespace App\Models\Kegiatan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HasilSurvey extends Model
{
    // use HasFactory;
    use SoftDeletes;

    // declare table name
    public $table = 'hasil_survey';


    // this filed must type date with format yyyy-mm-dd hh:mm:ss
    protected $date = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // declare field that fillable
    protected $fillable = [
        'survey_id',
        'mitra_id',
        'skala',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
