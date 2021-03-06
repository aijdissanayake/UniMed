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
     * @return \Illuminate\Http\Respons
     */
    public function index() {
        if (Auth::guest()){
            return view('auth.login');
        }
            
        if (Auth::user()->active == 0){
            Auth::logout();
            // return view('auth.login');
            return view('auth.account_inactive');
        }
            
        /*
         *     Record login for analytical purposes
         */
        $user = Auth::user();
        $role = $user->role;
        
        $loginRec = new loginRecord();
        
        $loginRec->user_id = $user->id;
        $loginRec->save();
        
        /*
         * end login record.
         * Below, the app(...) construct is made
         * because we have added dynamic data to the pages,
         * which need to be constructed each time.
         */
        
        if ($role == 'doctor' || $role == 'assistant') {
            return app('App\Http\Controllers\DoctorController')->home();
        } elseif ($role == 'patient') {
            return app('App\Http\Controllers\PatientController')->home();
//            return view('patient.home.patientHome');
        } elseif ($role == 'labTech') {
            return view('labTech.labTechHome');
        } elseif ($role == 'admin'){
            return app('App\Http\Controllers\AdminController')->home();
        }
//        return view('home');
        }

}
