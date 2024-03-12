<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PermissionController extends Controller
{
    //
    // View all permissions
    public function index(){
        return view('permission.index');
    }

    // Create permission
    public function create(){
        return view('permission.create');
    }
}
