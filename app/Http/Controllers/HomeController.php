<?php

namespace App\Http\Controllers;
use Auth;
use App\loginRecord;
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
        $role = $user->role;
        
        $loginRec = new loginRecord();
        
        $loginRec->user_id = $user->id;
        $loginRec->save();
        
        if ($user->role == 'doctor') {
            return app('App\Http\Controllers\DoctorController')->home();
        } elseif ($user->role == 'patient') {
            return app('App\Http\Controllers\PatientController')->home();
//            return view('patient.home.patientHome');
        } elseif ($user->role == 'assistant') {
            return view('assistant.index');
        } elseif ($user->role == 'labTech') {
            return view('labTech.labTechHome');
        } elseif ($user->role == 'admin'){
            return view('admin.profile_admin');
        }
//        return view('home');
        }
    }

}
