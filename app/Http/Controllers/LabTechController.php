<?php

namespace App\Http\Controllers;

use App\User;
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
        $error = "";
        if ($reportType == 1){
            return view('labTech.full_blood_report', compact('error'));   
        }
        
    }
    
    public function createNewFBR(Request $request) {
        
        $this->validate($request, [
            'name' => 'exists:users',
        ]);
        
        /*
         * check for a patient by this name.
         */
        
        
        $name = $request->name;
        
        return view('labTech.test', compact('user'));
    }
    
    public function viewProfile() {
        return view('labTech.profile_labTech');
    }
    
    public function editProfile() {
        return view('labTech.profileEditable_labTech');
    }
    
}
