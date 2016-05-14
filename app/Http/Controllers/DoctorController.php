<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Patient;


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
    
    public function createPatient(Request $request) {
        /*
         * create user first
         */
        $user = new User();
        
        $name = $request['firstName']." ".$request['lastName'];
        
        $user->name = $name;
        $user->password = "unicare101";
        $user->email = $request['email'];
        $user->save();
        
        /*
         * now create patient
         */
        $patient = new Patient();
        
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
    
    public function functionName($param) {
        
    }
    
    
}
