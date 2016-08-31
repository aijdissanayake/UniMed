<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\DB;

use \DateTime; 

//use Illuminate\Support\Facades\Auth;

class PatientController extends Controller
{
    public function home() {
      
        $directing = 1;
        $patient = \Illuminate\Support\Facades\Auth::user()->patient; 
        $pID=$patient->id;
        $hasAppointment = $patient->hasAppointment;

        if($hasAppointment){

            $currentPatientsAppointment = \App\appointment::orderBy('aDate', 'desc')
                                                ->where('patient_id',$pID)
                                                ->where('expired',FALSE)
                                                ->take(2)->first();
            
            $currentDate=substr($currentPatientsAppointment->aDate,0,10);

            return view('patient.home.patientHome')
                ->with('hasAppointment', $hasAppointment)
                ->with('directing', $directing)
                ->with('had',FALSE)
                ->with('session', $currentPatientsAppointment->session->time_Period)
                ->with('appNo',$currentPatientsAppointment->appointmentNo)
                ->with('appDate',$currentDate)
                ->with('title','You have an Appointment!')
                ;
        }

        return view('patient.home.patientHome')
                ->with('hasAppointment', $hasAppointment)
                ->with('directing', $directing)
                ->with('had',FALSE)
                ;
    }
    
    /*
     * patient tab tasks
     */
    
    
    public function viewLabTab() {
        return view('patient.lab.patientLab');
    }
    
    public function viewProfile() {
        return view('patient.home.profile_patient');
    }
    
    public function editProfile() {
        return view('patient.home.profileEditable_patient');
    }
    
    public function createAppointment(){
        
        //takes inputs from the form
        $inputs = Input::all();
        $appDate = $inputs['appointmentDate'];
        $date = date_create($appDate);       
        $appSession = $inputs['session'];    
        
        
        $patient = \Illuminate\Support\Facades\Auth::user()->patient;  // get the patient object
        $hasAppointment = $patient->hasAppointment; 
        $pID = $patient->id; 
        
        $currentAppointments = \App\appointment::where('aDate','LIKE', '%'.$appDate.'%') //get current appointments for the requested slot
                ->where('session_id','LIKE', $appSession)
                ->where('expired',FALSE)
                ->get();
        $noOfAppointments = count($currentAppointments); 
        $newAppNo=$noOfAppointments+1;
        
        
            
        if ($hasAppointment == 0) {

            if ($noOfAppointments==10){
            $directing = 2; // to recognize the condition caused to update the html view
            return view('patient.home.patientHome')
                    ->with('hasAppointment',$hasAppointment)
                    ->with('directing',$directing)
                    ->with('had',FALSE)
                    ->with('title','Appoinments Full')
                    ;
  
            }

            else{             
        
            $directing = 3 ; 
            //update patient table
            $patient->hasAppointment =TRUE;
            $patient->save();
            //insert to appointment table
            $app = new \App\appointment();
            $app ->patient_id = $pID;
            $app->aDate =$date;
            $app->session_id = $appSession;
            $app->appointmentNo=$newAppNo;
            $app->save();
            
            $currentPatientsAppointment = \App\appointment::orderBy('aDate', 'desc')
                                                ->where('patient_id',$pID)
                                                ->where('expired',FALSE)
                                                ->take(2)->get()[0];
             
            $currentDate=substr($currentPatientsAppointment->aDate,0,10);
            
            return view('patient.home.patientHome')
                    ->with('hasAppointment',$hasAppointment)
                    ->with('directing',$directing)
                    ->with('had',FALSE)
                    ->with('session', $currentPatientsAppointment->session->time_Period)
                    ->with('appNo',$currentPatientsAppointment->appointmentNo)
                    ->with('appDate',$currentDate)
                    ->with('title','Appointment Confirmed!')
                    ;
  
            }
        
        } 
        else{

            $directing = 4;

            $currentPatientsAppointment = \App\appointment::orderBy('aDate', 'desc')
                                                ->where('patient_id',$pID)
                                                ->where('expired',FALSE)
                                                ->take(2)->get()[0];

            $currentDate=substr($currentPatientsAppointment->aDate,0,10);

            return view('patient.home.patientHome')
                   ->with('hasAppointment',$hasAppointment)
                   ->with('directing',$directing)
                   ->with('had',FALSE)
                   ->with('session',$currentPatientsAppointment->session->time_Period)
                   ->with('appNo',$currentPatientsAppointment->appointmentNo)
                   ->with('appDate',$currentDate)
                   ->with('title','You already have an appointment!')
                   ;
            }
        
    }

    public function cancelAppointment() {
        
        $directing = 5 ;
        $had = FALSE ;

        // check whether patient has an appointment
        $patient = \Illuminate\Support\Facades\Auth::user()->patient; 
        $hasAppointment = $patient->hasAppointment;
        $pID = $patient->id ;
        
        
        if($hasAppointment){

             //set patient table has appointment
            $patient->hasAppointment =FALSE;
            $patient->save();

            $had = TRUE;
            
        //get the appointment in appointment table
        $currentPatientsAppointment = \App\appointment::orderBy('aDate', 'desc')
                                                ->where('patient_id',$pID)
                                                ->where('expired',FALSE)
                                                ->take(2)->get()[0];
        //change appointment to expired
        $currentPatientsAppointment->expired=TRUE;
        $currentPatientsAppointment->save();
        
        //return back to the page
        
        }
        return view('patient.home.patientHome')
                ->with('hasAppointment',$hasAppointment)
                ->with('directing',$directing)
                ->with('had',$had)
        ;
    }
}