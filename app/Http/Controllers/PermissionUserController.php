<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PermissionUserController extends Controller
{
    //
    public function create(User $user){
        return $user;
    }
}
