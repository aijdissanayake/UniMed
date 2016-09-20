<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

use \DateTime; 

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
        $currentAppointments = \App\appointment::where('aDate','LIKE', '%'.date_format($date,"Y-m-d").'%') //get current appointments for the requested slot
                ->where('session_id','LIKE', $appSession)
                ->where('expired',FALSE)
                ->get();
        $noOfAppointments = count($currentAppointments);
        
            
        if (!$hasAppointment) {

            if ($noOfAppointments==10){
            $directing = 2; // to recognize the condition caused to update the html view
            return view('patient.home.patientHome')
                    ->with('hasAppointment',$hasAppointment)
                    ->with('directing',$directing)
                    ->with('title','Appoinments Full')
                    ;
  
            }

            else{             
        
            $directing = 3 ; 
            //update patient table
            $patient->hasAppointment =TRUE;
            $patient->save();

            $newAppNo ;
            $currAppNoArray = [];             
             
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
            //insert to appointment table
            $app = new \App\appointment();
            $app ->patient_id = $pID;
            $app->aDate =$date;
            $app->session_id = $appSession;
            $app->appointmentNo=$newAppNo;
            $app->save();
            
            $currentPatientsAppointment = $patient->appointments()->where('expired',FALSE)->first();
            $currentDate=substr($currentPatientsAppointment->aDate,0,10);
            
            return view('patient.home.patientHome')
                    ->with('hasAppointment',$hasAppointment)
                    ->with('directing',$directing)
                    ->with('session', $currentPatientsAppointment->session->time_Period)
                    ->with('appNo',$currentPatientsAppointment->appointmentNo)
                    ->with('appDate',$currentDate)
                    ->with('title','Appointment Made!')
                    ;
  
            }
        
        } 
        else{
            $directing = 4;
            $currentPatientsAppointment = $patient->appointments()->where('expired',FALSE)->first();
            $currentDate=substr($currentPatientsAppointment->aDate,0,10);

            return view('patient.home.patientHome')
                   ->with('hasAppointment',$hasAppointment)
                   ->with('directing',$directing)
                   ->with('session',$currentPatientsAppointment->session->time_Period)
                   ->with('appNo',$currentPatientsAppointment->appointmentNo)
                   ->with('appDate',$currentDate)
                   ->with('title','You  have an appointment!')
                   ;
            }
        
    }

    public function cancelAppointment() {
        
        $patient = \Illuminate\Support\Facades\Auth::user()->patient; 
        $pID = $patient->id ;
        $hasAppointment = $patient->hasAppointment;
        if($hasAppointment){
            $directing = 5 ;
            //set patient table has appointment
            $patient->hasAppointment =FALSE;
            $patient->save();
            //expire the appointment
            $currentPatientsAppointment=$patient->appointments()->where('expired',FALSE)->first();
            $currentPatientsAppointment->expired=TRUE;
            $currentPatientsAppointment->save();        
            //return back to the page
            return view('patient.home.patientHome')
                        ->with('directing',$directing)
        ;
        }
        $directing = 1 ;
        return view('patient.home.patientHome')
                ->with('hasAppointment', $hasAppointment)
                ->with('directing', $directing)
                ;

        }
    public function getUnavailableDates(){

        $unavailableDates = [];
        $unavailablePeriods = \App\unavailablePeriod::where('expired',FALSE)->get();
        foreach ($unavailablePeriods as $unavailablePeriod) {
            array_push($unavailableDates, [$unavailablePeriod->startDate,$unavailablePeriod->endDate]);            
        }
        return response()->json([
                'unavailableDates' => $unavailableDates
            ]);
    }   

}