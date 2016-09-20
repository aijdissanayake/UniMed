<?php

namespace App\Http\Controllers;

use DB;

use App\drug;
use App\equipment;
use App\inventoryItem;
use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Patient;
use App\patientVisit;
use App\appointment;
use Illuminate\Support\Facades\Input;


class DoctorController extends Controller
{
    
    public function home()
    {   $today = \Carbon\Carbon::today();
        $appointments = appointment::orderBy('aDate','asc')                
                ->where('aDate', '>=', $today) // check for validity by date
                ->where('expired',FALSE)                
                ->take(10)
                ->get();
        $totalAppointments = count(appointment::where('expired',FALSE)
                ->get());
        $inventory = inventoryItem::all();
        $homeData = array($appointments, $inventory,$totalAppointments);
        return view('doctor.index.index', compact('homeData'));
        
    }

    /*
     * patient tab tasks
     */

    public function viewProfile() {
        $doctor = Auth::user()->getDoctor;
        return view('doctor.index.profile_doctor', compact('doctor'));
    }
    
    public function editProfile() {
        return view('doctor.index.profileEditable_doctor');
    }
    
    public function viewSettingsPage() {
        $doctor = Auth::user()->getDoctor;
        return view('doctor.settings.settings', compact('doctor'));
    }
    
    public function viewPatientTab()
    {
        $patientVisits = patientVisit::orderBy('created_at', 'desc')
                ->take(10)
                ->get();
        return view('doctor.patients.patientsTab', compact('patientVisits'));
    }
    
    /*
     * view patient's profile
     */
    
    public function viewPatientDetails($id)
    {
        // uses the same view as returned when registering a new patient
        $patient = patient::find($id);
        return view('doctor.patients.viewPatient', compact('patient'));
    }
    
    
    public function viewPatientVisitRecords($id)
    {
        $patient = patient::find($id);
        return view('doctor.patients.viewClinicalReports', compact('patient'));
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
            'firstName' => 'alpha',
            'lastName' => 'alpha',
            'contactNo' => 'digits:10',
            'email' => 'unique:users,email',
            'bloodGroup' => 'in:A+,A-,B+,B-,AB+,AB-,O-,O+'
        ]);
        

        /*
         * create user first
         */
        $user = new User();

        $name = $request['firstName'] . " " . $request['lastName'];

        $user->name = $name;
        $user->password = bcrypt("unicare101");
        $user->email = $request['email'];
        $user->gender = $request['gender'];


        $user->role = 'patient';
        $user->save();
        


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
          

        return view('doctor.patients.viewPatient',  compact('patient'));
    }

    public function searchPatient(Request $request)
    {
        $this->validate($request, [
            
        ]);
                
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
        $patient = patient::find($id);

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

    public function viewAppointmentSettingsPage(){
        return view('doctor.settings.appointmentsettings');
    }
    
    public function addSession(Request $request)
    {
        $startTime = $request->input('startTime');
        $endTime = $request->input('endTime');
        $timePeriod = date('h:i a' , strtotime($startTime)) . " - " . date('h:i a', strtotime($endTime));
        $session = new \App\session();
        $session->time_Period = $timePeriod;
        $session->start_time = $request->input('startTime');
        $session->end_time = $request->input('endTime');
        if($request->input('availableNow')){
            $session->available = 1;
        }
        $session->save();
        return view('doctor.settings.appointmentsettings');
    }

    public function unavailablePeriod(Request $request)
    {   
        $unavailablePeriod = new \App\unavailablePeriod();
        $unavailablePeriod->startDate = $request->input('startDate');
        $unavailablePeriod->endDate = $request->input('endDate');
        $unavailablePeriod->message = $request->input('message');
        $unavailablePeriod->save();

        return view('doctor.settings.appointmentsettings');
    }


    public function viewInventorySettings()
    {
        return view('doctor.inventory.inventorySettings');
    }



}
