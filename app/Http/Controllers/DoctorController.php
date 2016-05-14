<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Patient;
use Logger;

// Insert the path where you unpacked log4php
    // Tell log4php to use our configuration file.
Logger::configure('D:\Emrys\unimed\config.xml');

 



class DoctorController extends Controller
{

 

    
    
    public function home() {
        return view('doctor.index');
    }
    
    /*
     * patient tab tasks
     */
    
    
    public function viewPatientTab() {
        return view('doctor.patientTab');
    }
    
    public function regPatient() {
        return view('doctor.patients.addPatientForm');
    }
    
    public function storePatient(Request $request) {
        /*
         * create user first
         */
        // Fetch a logger, it will inherit settings from the root logger
        $log = Logger::getLogger('myLogger');
        $user = new User();
        
        $name = $request['firstName']." ".$request['lastName'];
        
        $user->name = $name;
        $user->password = "unicare101";
        $user->email = $request['email'];


        $user->role = 'patient';
        $user->save();
        
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
        
        return view('doctor/patients/test');
    }
    
    
    /*
     * Finance Tab & tasks
     */
    
    public function viewFinanceTab() {
        return view('doctor.finance');        
    }
    
    
    
    
}
