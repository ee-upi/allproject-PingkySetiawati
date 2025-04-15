<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laratrust\Contracts\LaratrustUser;
use Laratrust\Traits\HasRolesAndPermissions;
use App\Models\ArSys\Student;
use App\Models\ArSys\Staff;
use App\Models\ArSys\TelegramId;
use App\Models\ArSys\InstitutionRole;

class User extends Authenticatable implements LaratrustUser
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;
    use HasRolesAndPermissions;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'sso',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function adminlte_profile_url()
    {
        return 'usprovie';
    }

    public function student(){
        return $this->hasOne(Student::class, 'user_id', 'id');
    }

    public function staff(){
        return $this->hasOne(Staff::class, 'user_id', 'id');
    }
    public function sysrole(){
        return $this->hasOne(InstitutionRole::class, 'user_id', 'id');
    }

    public function telegram(){
        return $this->hasOne(TelegramId::class, 'user_id', 'id');
    }
}
