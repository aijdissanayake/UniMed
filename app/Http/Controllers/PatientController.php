<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PatientController extends Controller
{
    public function regPatient() {
        return view('patient.addPatientForm');
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
        
        /*
         * now create patient
         */
        $patient = new Patient();
        
        $patient->firstName = $request[''];
    }
    
}
