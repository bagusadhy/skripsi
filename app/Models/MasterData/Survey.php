<?php

namespace App\Models\MasterData;

use App\Models\Kegiatan\HasilSurvey;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Survey extends Model
{
    // use HasFactory;
    use SoftDeletes;

    // declare table name
    public $table = 'survey';


    // this filed must type date with format yyyy-mm-dd hh:mm:ss
    protected $date = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    // declare field that fillable
    protected $fillable = [
        'title',
        'kategori',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function hasil_survey()
    {
        return $this->hasMany(HasilSurvey::class, 'survey_id');
    }
}
