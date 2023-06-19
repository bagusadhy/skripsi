<?php

namespace App\Models\ManagementAccess;

use App\Models\User;
use App\Models\ManagementAccess\Permission;
use App\Models\ManagementAccess\PermissionRole;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    // use HasFactory;
    use SoftDeletes;

    // declare table name
    public $table = 'role';


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

    public function permission()
    {
        return $this->belongsToMany(Permission::class);
    }
    public function permission_role()
    {
        return $this->hasMany(PermissionRole::class, 'role_id');
    }
    public function user()
    {
        return $this->hasOne(User::class, 'role_id');
    }
}
