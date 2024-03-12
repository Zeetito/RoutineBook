<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //



    // STAFF
    // All Staff
    public function staff(){
        return view('staff.index');
    }
}
