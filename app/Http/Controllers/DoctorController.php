<?php

namespace App\Http\Controllers;

use DB;

use App\drug;
use App\equipment;
use App\inventoryItem;
use Illuminate\Http\Request;
use App\User;
use App\Patient;
use App\patientVisit;
use App\appointment;
use Illuminate\Support\Facades\Input;
//use Logger;

// Insert the path where you unpacked log4php
    // Tell log4php to use our configuration file.
//Logger::configure('H:\Emrys\merovingienne\testLara');

 



class DoctorController extends Controller
{

    public function home()
    {
        $appointments = appointment::all();
        return view('doctor.index.index', compact('appointments'));
    }

    /*
     * patient tab tasks
     */

    public function viewProfile() {
        return view('doctor.index.profile_doctor');
    }
    
    public function editProfile() {
        return view('doctor.index.profileEditable_doctor');
    }
    
    public function viewPatientTab()
    {
        $patientVisits = patientVisit::orderBy('created_at', 'desc')
                ->take(10)
                ->get();
        return view('doctor.patients.patientsTab', compact('patientVisits'));
    }

    public function regPatient()
    {
        return view('doctor.patients.add_new_patient');
    }

    public function editPatient($id)
    {
        $user = User::find($id);
        return view('doctor.patients.view', compact('user'));
    }

    public function storePatient(Request $request)
    {
        /*
         * validating data
         */

        $this->validate($request, [
            'email' => 'unique:users,email',
        ]);


        /*
         * create user first
         */
        // Fetch a logger, it will inherit settings from the root logger
//        $log = Logger::getLogger('myLogger');
        $user = new User();

        $name = $request['firstName'] . " " . $request['lastName'];

        $user->name = $name;
        $user->password = bcrypt("unicare101");
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
        $patient->gender = $request['gender'];
//        $patient->gender = 'male';
        $patient->birthYear = $request['birthYear'];
        $patient->telephoneNo = $request['contactNo'];
        $patient->locale = $request['locale'];
        $patient->bloodType = $request['bloodGroup'];
        $patient->save();
//        $logMessage= "Patient Added : Name > ".$name." email: " .$request['email']." BirthYear > ".$request['birthYear']."telephoneNo >".$request['contactNo']."" ;
//        $log->fatal($logMessage);

        return view('doctor/patients/test');
    }

    public function searchPatient()
    {

        $inputs = Input::all(); // inputs is an array!!

        $type = $inputs['col_name'];
        $value = $inputs['value'];

        if ($type == 1) {
            $col_name = 'firstName';
        } elseif ($type == 2) {
            $col_name = 'lastName';
        } elseif ($type == 3) {
            $col_name = 'telephoneNo';
        }


        $patients = Patient::where($col_name, 'LIKE', '%' . $value . '%')->get();

        // patients is an array of patient objects!!

        if ($patients->isEmpty()) {
            return view('doctor.patients.searchResultsEmpty');
        }


        return view('doctor.patients.searchResults', compact('patients'));
    }

    public function searchLabReports()
    {

        $inputs = Input::all(); // inputs is an array!!

        $type = $inputs['col_name'];
        $value = $inputs['value'];


        // configure query.
        if ($type == 1) {
            $col_name = 'firstName';
        } elseif ($type == 2) {
            $col_name = 'lastName';
        } elseif ($type == 3) {
            $col_name = 'telephoneNo';
        }


        $patients = Patient::where($col_name, 'LIKE', '%' . $value . '%')->get();

        // patients is an array of patient objects!!

        if ($patients->isEmpty()) {
            return view('doctor.lab.searchResultsEmpty');
        }


        return view('doctor.lab.searchResults', compact('patients'));
    }


    public function createPatientVisitRecord($id)
    {
        $patient = User::find($id)->getPatient;

        return view('doctor.patients.clinicalRecord', compact('patient'));
    }

    public function storePatientVisitRecord($id)
    {
        $input = Input::all();
        $newVRec = new patientVisit();

        $newVRec->patientID = $id;

        $newVRec->diagnosis = $input['diagnosis'];

        if ($input['prognosis'] != "") {
            $newVRec->prognosis = $input['prognosis'];
        }

        if ($input['prescDrugs'] != "") {
            $newVRec->prescDrugs = $input['prescDrugs'];
        }

        if ($input['nextVisitDate'] != "") {
            $newVRec->nextVisitDate = $input['nextVisitDate'];
        }

        if ($input['remarks'] != "") {
            $newVRec->remarks = $input['remarks'];
        }

        $newVRec->save();

        return view('doctor.patients.view', compact('newVRec'));
    }
//    public function showPatient($id) {
//        $patient = Patient::find($id);
//        
//        return view('doctor.patients.view', compact('patient'));
//    }


    /*
     * Finance Tab & tasks
     */

    public function viewFinanceTab()
    {
        return view('doctor.finance.finance');
    }

    public function viewInventoryTab()
    {
        $drugs = drug::all();
        $equip = equipment::all();
        $items = array($drugs, $equip); //this array is used to create drop down menus.
        return view('doctor.inventory.inventory', compact('items'));
    }

    public function viewLabTab()
    {
        return view('doctor.lab.lab');
    }

    


}