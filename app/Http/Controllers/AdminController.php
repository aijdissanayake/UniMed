<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;


use App\User;
use Auth;
use App\Patient;
use Illuminate\Support\Facades\Input;

class AdminController extends Controller
{
    public function home() {
        return view('admin.home');
    }
    
    public function addDocPage() {
        return view('admin.new_ppl.addDoc');
    }
    
    public function createDoc($param) {
        
    }
    
}
