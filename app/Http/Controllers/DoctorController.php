<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Patient;
use Illuminate\Support\Facades\Input;
//use Logger;

// Insert the path where you unpacked log4php
    // Tell log4php to use our configuration file.
//Logger::configure('H:\Emrys\merovingienne\testLara');

 



class DoctorController extends Controller
{

    public function home() {
        return view('doctor.index.index');
    }
    
    /*
     * patient tab tasks
     */
    
    
    public function viewPatientTab() {
        return view('doctor.patients.patientsTab');
    }
    
    public function regPatient() {
        return view('doctor.patients.add_new_patient');
    }
    
    public function storePatient(Request $request) {
        /*
         * create user first
         */
        // Fetch a logger, it will inherit settings from the root logger
//        $log = Logger::getLogger('myLogger');
        $user = new User();
        
        $name = $request['firstName']." ".$request['lastName'];
        
        $user->name = $name;
        $user->password = "unicare101";
        $user->email = $request['email'];


        $user->role = 'patient';
        $user->save();
//        $logMessage= "User Added : Name > ".$name." email: " .$request['email'] ;
//        $log->fatal($logMessage); 
        
        
        /*
         * now create patient
         */
        $patient = new Patient();
        $patient->user_id = $user->id;
        $patient->firstName = $request['firstName'];
        $patient->lastName = $request['lastName'];
        $patient->birthYear = $request['birthYear'];
        $patient->telephoneNo = $request['contactNo'];
        $patient->locale = $request['locale'];
        $patient->bloodType = $request['bloodGroup'];
        $patient->save();
//        $logMessage= "Patient Added : Name > ".$name." email: " .$request['email']." BirthYear > ".$request['birthYear']."telephoneNo >".$request['contactNo']."" ;
//        $log->fatal($logMessage);
        
        return view('doctor/patients/test');
    }
    
    public function searchPatient() {
        
        $inputs = Input::all(); // inputs is an array!!
        $name = $inputs['patientName'];
                
        
        $patients = Patient::where('firstName', 'LIKE', '%'.$inputs['patientName'].'%')->get();
        
        // patients is an array of patient objects!!
        
        return view('doctor.patients.searchResults2', compact('patients'));
    }
    
//    public function showPatient($id) {
//        $patient = Patient::find($id);
//        
//        return view('doctor.patients.view', compact('patient'));
//    }
    
    
    
    /*
     * Finance Tab & tasks
     */
    
    public function viewFinanceTab() {
        return view('doctor.finance.finance');        
    }
    
    public function viewInventoryTab() {
        return view('doctor.inventory.inventory');        
    }
    
    public function viewLabTab() {
        return view('doctor.lab.lab');        
    }
    
    
    
    
}
