<?php

namespace App\Http\Controllers;

use App\User;
use Barryvdh\DomPDF\PDF;
use App\fullBloodReport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use Logger;

// Insert the path where you unpacked log4php
    // Tell log4php to use our configuration file.
//Logger::configure('D:\Emrys\unimed\config.xml');


class LabTechController extends Controller
{
    public function home() {
        return view('labTech.labTechHome');
    }
    
    public function patientLab(){
        return view('labTech.patientLab');
    }
    
    public function newReport(Request $request) {
        $inputs = Input::all();
        
        $this->validate($request, [
            'reportType' => 'between:0,5',
        ]);
        $reportType = $inputs['reportType'];
        if ($reportType == 1){
            return view('labTech.full_blood_report');   
        }
        
    }
    
    public function createNewFBR(Request $request) {
        
        $this->validate($request, [
            'name' => 'exists:users',
        ]);
        
        /*
         * check for a patient by this name.
         */
        
        $fullBloodReport = new fullBloodReport();
        
        $log = Logger::getLogger('myLogger');
        
        $user = User::where('name','LIKE',$request['name'])->first();
        
        
        $fullBloodReport->patient_id = $user->getPatient->id;
        $fullBloodReport->name = $request['name'];
        $fullBloodReport->leucocytesCount = $request['leucocytesCount'];
        $fullBloodReport->lcNeutrophils = $request['lcNeutrophils'];
        $fullBloodReport->lcLymphocytes = $request['lcLymphocytes'];
        $fullBloodReport->lcEosinophils = $request['lcEosinophils'];
        $fullBloodReport->lcMonocytes = $request['lcMonocytes'];
        $fullBloodReport->lcBasophils = $request['lcBasophils'];
        $fullBloodReport->dcNeutrophils = $request['dcNeutrophils'];
        $fullBloodReport->dcLymphocytes = $request['dcLymphocytes'];
        $fullBloodReport->dcEosinophils = $request['dcEosinophils'];
        $fullBloodReport->dcMonocytes = $request['dcMonocytes'];
        $fullBloodReport->dcBasophils = $request['dcBasophils'];
        $fullBloodReport->hb = $request['hb'];
        $fullBloodReport->hct = $request['hct'];
        $fullBloodReport->rbc = $request['rbc'];
        $fullBloodReport->mch = $request['mch'];
        $fullBloodReport->mcv = $request['mcv'];
        $fullBloodReport->mchc = $request['mchc'];
        $fullBloodReport->rdw = $request['rdw'];
        $fullBloodReport->plateletCount = $request['plateletCount'];
        
        $fullBloodReport->save();
        
        //logger
        $pID = $user->getPatient->id;
        $name = $request['name'];
        $logMessage= " Full Blood Report Added : Patient ID :".$pID." Patient Name :".$name ;
        $log->info($logMessage); 
        
        return view('labTech.full_blood_report_view', compact('fullBloodReport'));
    }
    
    public function viewProfile() {
        return view('labTech.profile_labTech');
    }
    
    public function editProfile() {
        return view('labTech.profileEditable_labTech');
    }
    
}
