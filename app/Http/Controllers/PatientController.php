<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;

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
        $appDate = Input[appointmentDate];
        $appSession = Input[session];
        
    }
    
}
