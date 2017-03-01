<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class testController extends Controller
{
    public function login() {
        return view('new_interface.auth.login_mat');
    }
}
