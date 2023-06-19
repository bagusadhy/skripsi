<?php

namespace App\Models\ManagementAccess;

use App\Models\ManagementAccess\PermissionRole;
use App\Models\ManagementAccess\Role;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Permission extends Model
{
    // use HasFactory;
    use SoftDeletes;

    // declare table name
    public $table = 'permission';


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

    public function role()
    {
        return $this->belongsToMany(Role::class);
    }
    public function permission_role()
    {
        return $this->hasMany(PermissionRole::class, 'permission_id');
    }
}
