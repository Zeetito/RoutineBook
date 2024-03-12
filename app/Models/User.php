<?php

namespace App\Models;

use App\Models\Permission;
use App\Models\PermissionUser;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use App\Permissions\HasRolesAndPermissions;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, HasRolesAndPermissions,Notifiable;

    protected $fillable = [
        'username',
        'firstname',
        'lastname',
        'othername',
        'gender',
        'identity_number',
        'index_number',
        'email',
        'is_staff',
        'is_admin',
        'program_id',
        'class_group_id',
        'password',
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    // RELATIONSHIPS
    public function permissions()
    {
        return $this->belongsToMany(Permission::class, "permission_users")
        ;
    }


    // FUNCTION
    // Check if user is admin
    public function is_admin(){
        return $this->is_admin == 1;
    }

    // Get user full name
    public function fullname(){
        return $this->firstname." ".$this->othername." ".$this->lastname;
    }


    // STATIC FUNCTIONS
    // Get all staff
    public static function staff(){
        return self::where('is_staff',1);
    }

    // Get all Students
    public static function students(){
        return self::where('is_staff',0);
    }


}
