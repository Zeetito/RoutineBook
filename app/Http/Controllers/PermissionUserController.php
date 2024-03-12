<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PermissionUserController extends Controller
{
    //
    public function create(User $user){
        return view('permissionuser.create',['user'=>$user]);
    }

    public function store(Request $request){
        $user = User::find($request->input('user_id'));
        return $user->permissions;
    }
}
