<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;

class LabTechController extends Controller
{
    public function home() {
        return view('labTech.labTechHome');
    }
    
    public function patientLab(){
        return view('labTech.patientLab');
    }
    
    public function newReport() {
        $inputs = Input::all();
        
        $reportType = $inputs['reportType'];
        
        if ($reportType == 1){
            return view('labTech.full_blood_report');   
        }
        
    }
    
    public function createNewFBR(Request $request) {
//        $name = $request->
        
    }
    
}
