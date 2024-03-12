<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

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




    // FUNCTION
    // Check if user is admin
    public function is_admin(){
        return $this->is_admin == 1;
    }
}
