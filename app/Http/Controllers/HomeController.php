<?php

namespace App\Http\Controllers;
use Auth;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        if (Auth::guest()){
            return view('login');
        } else {
        $user = Auth::user();
        if ($user->role == 'doctor') {
            return view('doctor.index.index');
        } elseif ($user->role == 'patient') {
            return view('patient.home.patientHome');
        } elseif ($user->role == 'assistant') {
            return view('assistant.index');
        } elseif ($user->role == 'labtech') {
            return view('labTech.labTechHome');
        }
//        return view('home');
        }
    }

}
