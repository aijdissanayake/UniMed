<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\DB;

//use Illuminate\Support\Facades\Auth;

class PatientController extends Controller
{
    public function home() {
        $id = \Illuminate\Support\Facades\Auth::user()->id ;
        $patient= \App\patient::where('user_id','LIKE', $id)->get()[0];
        
        $hasAppointment = $patient->hasAppointment;
        //return view('patient.home.patientHome', compact('hasAppointment'));
        return view('patient.home.patientHome')->with('hasAppointment', 'patient');
    }
    
    /*
     * patient tab tasks
     */
    
    
    public function viewLabTab() {
        return view('patient.lab.patientLab');
    }
    
    public function createAppointment(){
        
        //takes inputs from the form
        $inputs = Input::all();
        $appDate = $inputs['appointmentDate'];
        $appSession = $inputs['session'];
        // get the id of the current user
        $id = \Illuminate\Support\Facades\Auth::user()->id ;
        
        print  $appDate ."  ". $appSession ." " . $id."<br>";
        // check whether patient has an appointment
        $hasAppointment = \App\patient::where('user_id','LIKE', $id)->get()[0]->hasAppointment;
         print $hasAppointment . "<br>";
        
        if ($hasAppointment == 0) {
            DB::table('patients')
            ->where('user_id', $id)
            ->update(['hasAppointment' => TRUE]);
        } 
        echo 'new '.\App\patient::where('user_id','LIKE', $id)->get()[0]->hasAppointment;;
        echo "<script> alert(Im an alert box)</script>";
    }
    
}
