<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;

//use Illuminate\Support\Facades\Auth;

class PatientController extends Controller
{
    public function home() {
        return view('patient.home.patientHome');
    }
    
    /*
     * patient tab tasks
     */
    
    
    public function viewLabTab() {
        return view('patient.lab.patientLab');
    }
    
    public function createAppointment(){
        
        $inputs = Input::all();
        $appDate = $inputs['appointmentDate'];
        $appSession = $inputs['session'];
        $id = \Illuminate\Support\Facades\Auth::user()->id ;
        print  $appDate ."  ". $appSession ." " . $id;
         
    }
    
}
