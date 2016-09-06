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
        $today = \Carbon\Carbon::today();
        $id = \Illuminate\Support\Facades\Auth::user()->id ;
        $patient= \App\patient::where('user_id','LIKE', $id)->get()[0];
        $pID=$patient->id;
        $hasAppointment = $patient->hasAppointment;
        $currentAppDetails = "";
        
        if($hasAppointment){
        $currentPatientsAppointment = \App\appointment::orderBy('aDate', 'desc')
                                                ->where('patient_id',$pID)
                                                ->where('expired',FALSE)
                                                ->take(2)->first();
        $currentSession = $currentPatientsAppointment->session;
        $currentDate=substr($currentPatientsAppointment->aDate,0,10);

             if($currentSession==1){
             $currentAppDetails = "Date : " . $currentDate ."\n Session : 8am - 11am \n Appointment No :"
                     . $currentPatientsAppointment->appointmentNo ;
                     
             }
             elseif($currentSession==2){
             $currentAppDetails = "Date : " . $currentDate ."\n Session : 12noon - 3pm \n Appointment No :"
                     . $currentPatientsAppointment->appointmentNo ;
                     
             }
             elseif($currentSession==3){
             $currentAppDetails = "Date : " . $currentDate ."\n Session : 4pm - 8pm \n Appointment No :"
                     . $currentPatientsAppointment->appointmentNo ;
                     
        }}
        //return view('patient.home.patientHome', compact('hasAppointment'));
        return view('patient.home.patientHome')
                ->with('hasAppointment',$hasAppointment)
                ->with('directing',$directing)
                ->with('currentAppDetails',$currentAppDetails);
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
        $appSession = $inputs['session'];
        $today = \Carbon\Carbon::today();
        $today1= date_create($today);
        $currentAppDetails = "";
      
        
        
        if($appDate<$today){
           $directing = 0;
            return view('patient.home.patientHome')
                    ->with('hasAppointment',0)
                    ->with('directing',$directing);
   
        }
        else{
        
        // get the id of the current user
        $id = \Illuminate\Support\Facades\Auth::user()->id ;
        // check whether patient has an appointment
        $patient =  \App\patient::where('user_id','LIKE', $id)->get()[0];
        $hasAppointment = $patient->hasAppointment;
        $pID = $patient->id ; 
        $currentAppointments =    \App\appointment::where('aDate','LIKE', '%'.$appDate.'%')
                ->where('session','LIKE', $appSession)
                ->where('aDate', '>', $today)
                ->where('expired',FALSE)
                ->get();
        $noOfAppointments = count($currentAppointments); 
//        $newAppNo=$noOfAppointments+1;
        
        
            
        if ($hasAppointment == 0) {
            if ($noOfAppointments==10){
            // to recognize the condition caused to update the html view
            $directing = 2;
            return view('patient.home.patientHome')
                    ->with('hasAppointment',$hasAppointment)
                    ->with('directing',$directing)
                    ->with('currentAppDetails',$currentAppDetails);
  
        }
            else{
            $directing = 3 ;             
            $newAppNo ;

            $currAppNoArray = [];
             
             //set new app no
             foreach ($currentAppointments as $currentAppointment){
                 array_push($currAppNoArray, $currentAppointment->appointmentNo);
             }
             for($i=1; $i<=10; $i++ ){
                 if (in_array($i, $currAppNoArray)){
                     continue;
                 }
                 else {
                     $newAppNo = $i;
                     break;
                 }
             }
             //update the patients table                                     
            DB::table('patients')
            ->where('user_id', $id)
            ->update(['hasAppointment' => TRUE]);
            //insert to the appointment table
            $app = new \App\appointment();
            $app ->patient_id = $pID;
            $app->aDate =$appDate;
            $app->session =$appSession;
            $app->appointmentNo=$newAppNo;
            $app->save();
            
            $currentPatientsAppointment = \App\appointment::orderBy('aDate', 'desc')
                                                ->where('patient_id',$pID)
                                                ->where('expired',FALSE)
                                                ->take(2)->get()[0];
             
             
             $currentSession = $currentPatientsAppointment->session;
             $currentDate=substr($currentPatientsAppointment->aDate,0,10);
             
             if($currentSession==1){
             $currentAppDetails = "Date : " . $currentDate ."\n Session : 8am - 11am \n Appointment No :"
                     . $currentPatientsAppointment->appointmentNo ;
                     
             }
             elseif($currentSession==2){
             $currentAppDetails = "Date : " . $currentDate ."\n Session : 12noon - 3pm \n Appointment No :"
                     . $currentPatientsAppointment->appointmentNo ;
                     
             }
             elseif($currentSession==3){
             $currentAppDetails = "Date : " . $currentDate ." \n Session : 4pm - 8pm  \n Appointment No :"
                     . $currentPatientsAppointment->appointmentNo ;
                     
             }
            return view('patient.home.patientHome')
                    ->with('hasAppointment',$hasAppointment)
                    ->with('directing',$directing)
                    ->with('currentAppDetails',$currentAppDetails);
  
            }
        
        } 
        else{
            $currentPatientsAppointment = \App\appointment::orderBy('aDate', 'desc')
                                                ->where('patient_id',$pID)
                                                ->where('expired',FALSE)
                                                ->take(2)->get()[0];
             
             
             $currentSession = $currentPatientsAppointment->session;
             $currentDate=substr($currentPatientsAppointment->aDate,0,10);
             
             if($currentSession==1){
             $currentAppDetails = "Date : " . $currentDate ."\n Session : 8am - 11am \n Appointment No :"
                     . $currentPatientsAppointment->appointmentNo ;
                     
             }
             elseif($currentSession==2){
             $currentAppDetails = "Date : " . $currentDate ."\n Session : 12noon - 3pm \n Appointment No :"
                     . $currentPatientsAppointment->appointmentNo ;
                     
             }
             elseif($currentSession==3){
             $currentAppDetails = "Date : " . $currentDate ." \n Session : 4pm - 8pm  \n Appointment No :"
                     . $currentPatientsAppointment->appointmentNo ;
                     
             }
            $directing = 4;
           return view('patient.home.patientHome')
                   ->with('hasAppointment',$hasAppointment)
                   ->with('directing',$directing)
                   ->with('currentAppDetails',$currentAppDetails);
    }
        }
    }
    public function cancelAppointment() {
        
        $directing = 5 ;
        $currentAppDetails = '';
        
        $id = \Illuminate\Support\Facades\Auth::user()->id ;
        // check whether patient has an appointment
        $patient =  \App\patient::where('user_id','LIKE', $id)->get()[0];
        $hasAppointment = $patient->hasAppointment;
        $pID = $patient->id ;
        
        
        if($hasAppointment){
             //set patient table has appointment to 0
            DB::table('patients')
            ->where('user_id', $id)
            ->update(['hasAppointment' => FALSE]);
            
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
                ->with('currentAppDetails',$currentAppDetails)
        ;
    }
}