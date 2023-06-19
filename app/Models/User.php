<?php

namespace App\Models;

use App\Models\ManagementAccess\Role;
use App\Models\MasterData\Guru;
use App\Models\MasterData\Mitra;
use App\Models\MasterData\Siswa;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use HasApiTokens;
    // use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    use SoftDeletes;

    protected $dates = [
        'update_at',
        'created_at',
        'deleted_at',
        'email_verified_at',
    ];
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id', 'id');
    }
    public function siswa()
    {
        return $this->hasOne(Siswa::class, 'user_id');
    }
    public function guru()
    {
        return $this->hasOne(Guru::class, 'guru_id');
    }
    public function mitra()
    {
        return $this->hasOne(Mitra::class, 'mitra_id');
    }
}
