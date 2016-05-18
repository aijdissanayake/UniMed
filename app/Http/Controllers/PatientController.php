<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\DB;

//use Illuminate\Support\Facades\Auth;

class PatientController extends Controller
{
    public function home() {
      
        $directing = 1;
        $id = \Illuminate\Support\Facades\Auth::user()->id ;
        $patient= \App\patient::where('user_id','LIKE', $id)->get()[0];
        
        $hasAppointment = $patient->hasAppointment;
        //return view('patient.home.patientHome', compact('hasAppointment'));
        return view('patient.home.patientHome')->with('hasAppointment',$hasAppointment)->with('directing',$directing);
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
        // check whether patient has an appointment
        $hasAppointment = \App\patient::where('user_id','LIKE', $id)->get()[0]->hasAppointment;
        
        $currentAppointments =    \App\appointment::where('aDate','LIKE', $appDate)->where('session','LIKE', $appSession)->get();
        $noOfAppointments = count($currentAppointments); 
        
        
        
            
        if ($hasAppointment == 0) {
            if ($noOfAppointments==10){
            $directing = 2;
            return view('patient.home.patientHome')->with('hasAppointment',$hasAppointment)->with('directing',$directing);
  
        }
            else{
             $directing = 3 ;
            DB::table('patients')
            ->where('user_id', $id)
            ->update(['hasAppointment' => TRUE]);
            
            return view('patient.home.patientHome')->with('hasAppointment',$hasAppointment)->with('directing',$directing);
  
            }
        
        } 
        else{
            $directing = 4;
           return view('patient.home.patientHome')->with('hasAppointment',$hasAppointment)->with('directing',$directing);
    }
    
    }
}