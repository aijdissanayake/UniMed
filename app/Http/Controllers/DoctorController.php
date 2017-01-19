<?php

namespace App\Http\Controllers;

use DB;
use App\drug;
use App\doctor;
use App\equipment;
use App\inventoryItem;
use Illuminate\Http\Request;
use App\User;
use Auth;
use App\Patient;
use App\Assistant;
use App\patientVisit;
use App\appointment;
use App\income;
use App\incomeType;
use App\expense;
use App\expenseType;
use Validator;
use Illuminate\Support\Facades\Input;

class DoctorController extends Controller {

    public function home() {
        $today = \Carbon\Carbon::today();
        $appointments = appointment::orderBy('aDate', 'asc')
                ->where('aDate', '>=', $today) // check for validity by date
                ->where('expired', FALSE)
                ->take(10)
                ->get();
                $totalAppointments = count(appointment::where('expired', FALSE)
                    ->get());
                $inventory = inventoryItem::all();
                $homeData = array($appointments, $inventory, $totalAppointments);
                return view('doctor.index.index', compact('homeData'));
            }

    /*
     * patient tasks
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
        $doctors = doctor::take(5)->get();
//        $assistants = Assistant::orderBy('created_at', 'desc')
        return view('doctor.settings.settings', compact('doctor','doctors'));
    }

    public function viewPatientTab() {
        $patientVisits = patientVisit::orderBy('created_at', 'desc')
        ->take(10)
        ->get();
        return view('doctor.patients.patientsTab', compact('patientVisits'));
    }

    public function viewAllPatients(){
        $patients = patient::paginate(10);
        return view('doctor.patients.viewAllPatients', compact('patients'));
    }

    /*
     * view patient's profile
     */

    public function viewPatientDetails($id) {
        // uses the same view as returned when registering a new patient
        $patient = patient::find($id);
        if ($patient){
            $visitRecs = patientVisit::where('patientID', 'LIKE', $id)->orderBy('created_at', 'desc')->take(5)->get();
            return view('doctor.patients.viewPatient', compact('patient', 'visitRecs'));
        }
        else {
            return view('doctor.patients.common_error');
        }
    }

    // All visit records of a given patient
    public function viewAllPatientVisitRecords($id) {
        $Name = patient::find($id)->getUser->name;
        $Count = patientVisit::count();
        $VRecs = patientVisit::where('patientID','LIKE',$id)->paginate(10);
        return view('doctor.patients.viewClinicalReports', compact('VRecs', 'Name', 'Count'));
    }
    
    public function viewPatientVisitRecord($recordID) {
        $VRec = patientVisit::find($recordID);
        if ($VRec){
            return view('doctor.patients.viewVisitRecord', compact('VRec'));
        }
        else{
            return view('doctor.patients.common_error');
        }
    }

    public function regPatient() {
        return view('doctor.patients.add_new_patient');
    }

    public function updatePatient(Request $request, $id) {
        $patient = patient::find($id);
        $user = User::find($patient->user_id);

        $patient->firstName = $request['firstName'];
        $patient->lastName = $request['lastName'];
        $patient->gender = $request['gender'];
//        $patient->gender = 'male';
        $patient->birthYear = $request['birthYear'];
        $patient->telephoneNo = $request['contactNo'];
        $patient->locale = $request['locale'];
        $patient->bloodType = $request['bloodGroup'];
        
        if ($patient->height!=$request['height']){
            $patient->height = $request['height'];
            $patient->bmi = ($patient->weight)/pow(($patient->height/100),2);
        }

        $patient->occupation = $request['occupation'];
        $patient->save();

        $user->name = $request['firstName']." ".$request['lastName'];
        $user->save();

        return redirect()->route('viewPatient',[$patient]);

    }

    public function storePatient(Request $request) {
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
        $user->active = 1;
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
        $patient->height = $request['height'];
        $patient->occupation = $request['occupation'];
        $patient->bmi = 0;
        $patient->save();


        return redirect()->route('viewPatient',[$patient]);
    }

    public function searchPatient(Request $request) {

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

    

    public function createPatientVisitRecord($id) {
        $patient = patient::find($id);

        return view('doctor.patients.visitRecord', compact('patient'));
    }

    public function storePatientVisitRecord($id, Request $request) {

        $newVRec = new patientVisit();

        $newVRec->patientID = $id;

        $newVRec->diagnosis = $request['diagnosis'];

        if ($request['prognosis'] != "") {
            $newVRec->prognosis = $request['prognosis'];
        }

        if ($request['prescDrugs'] != "") {
            $newVRec->prescDrugs = $request['prescDrugs'];
        }

        if ($request['nextVisitDate'] != "") {
            $newVRec->nextVisitDate = date_create($request['nextVisitDate']);
        }

        if ($request['remarks'] != "") {
            $newVRec->remarks = $request['remarks'];
        }

        if ($request['complaints'] != "") {
            $newVRec->complaints = $request['complaints'];
        }

        if ($request['cFindings'] != "") {
            $newVRec->cFindings = $request['cFindings'];
        }

        if ($request['investigations'] != "") {
            $newVRec->investigations = $request['investigations'];
        }

        if ($request['weight'] != "") {
            $newVRec->weight = $request['weight'];
            $pat = patient::find($id);
            $pat->weight = $request['weight'];
            $pat->bmi = $request['weight']/pow(($pat->height/100),2);
            $pat->save();
        }

        $newVRec->save();

        return redirect()->route('viewVisitRecord',[$newVRec->id]);
    }

    /*
     * Finance Tab & tasks
     */

    public function viewFinanceTab() {
        $incomes = DB::table('incomes')
        ->whereRaw('year(receiptDate) = ?', [date('Y')])
        ->whereRaw('month(receiptDate) = ?',[date('m')])
        ->sum('value');
                    // ->get();
        $expenses = DB::table('expenses')
        ->whereRaw('year(paymentDate) = ?', [date('Y')])
        ->whereRaw('month(paymentDate) = ?',[date('m')])
        ->sum('value');
                    // ->get();
        return view('doctor.finance.finance', compact('incomes', 'expenses'));
    }

    public function createTransaction(Request $request) {
        $rules = [
        'tType' => 'required|in:1,2',
        'trxn_value' => 'required|digits_between:1,8',
        'remarks' => 'alpha_dash|size:255',
        ];
        
        $messages = [
        'tType.required'=> "You didn't say the kind of transaction. Income or expense?",
        'tType.in' => "That didn't work, income or expense? Please select one.",
        'trxn_value.required' => "Can we please have a transaction value as well?",
        'trxn_value.digits_between' => "The value doesn't seem right. Please try again.",
        'remarks.size' => "That's a long description! Maybe shorten it?"
        ];
        
        $validator = Validator::make($request->all(), $rules, $messages);
        
        if ($validator->fails()) {
            return redirect('doc/finance/newTransaction')
            ->withErrors($validator)
            ->withInput();
        }
        
        $tSubType;
        if ($request['tSubType']=="-1"){
            $newSubType;
            if ($request['tType']==1){
                $newSubType = new incomeType();
                $newSubType->incomeName = $request['subTypeName'];
            }elseif ($request['tType'] ==2) {
                $newSubType = new expenseType();
                $newSubType->expenseName = $request['subTypeName'];
            }
            $newSubType->description = $request['subTypeDesc'];
            $newSubType->save();
            $tSubType = $newSubType->id;
        }else{
            $tSubType = $request['tSubType'];
        }
        
        $transaction;
        if ($request['tType'] == 1) {
            $transaction = new income();
            $transaction->receivedByID = Auth::user()->id;
            $transaction->receiptDate = date_create($request['trxnDate']);
            $transaction->incomeType = $tSubType;
        } elseif ($request['tType'] == 2) {
            $transaction = new expense();
            $transaction->paidByID = Auth::user()->id;
            $transaction->paymentDate = date_create($request['trxnDate']);
            $transaction->paymentType = $tSubType;
        }        
        
        $transaction->value = $request['trxn_value'];
        $transaction->remarks = $request['trxnDescription'];
        $transaction->save();
        return view('doctor.finance.new_transaction_record');
    }

    /*
     * Inventory methods
     */
    
    public function createAssistant(Request $request) {

    }

    public function viewInventoryTab() {
        $drugs = drug::all();
        $equip = equipment::all();
        $items = array($drugs, $equip); //this array is used to create drop down menus.
        return view('doctor.inventory.inventory', compact('items'));
    }

    

    public function viewAppointmentSettingsPage() {
        return view('doctor.settings.appointmentsettings');
    }

    public function addSession(Request $request) {
        $startTime = $request->input('startTime');
        $endTime = $request->input('endTime');
        $timePeriod = date('h:i a', strtotime($startTime)) . " - " . date('h:i a', strtotime($endTime));
        $session = new \App\session();
        $session->time_Period = $timePeriod;
        $session->start_time = $request->input('startTime');
        $session->end_time = $request->input('endTime');
        if ($request->input('availableNow')) {
            $session->available = 1;
        }
        $session->save();
        return view('doctor.settings.appointmentsettings');
    }

    public function unavailablePeriodTest(Request $request) {
        $unavailablePeriod = new \App\unavailablePeriod();
        $unavailablePeriod->startDate = $request->input('startDate');
        $unavailablePeriod->endDate = $request->input('endDate');
        $unavailablePeriod->message = $request->input('message');
        if($request->input('holiday')){
         $unavailablePeriod->holiday = TRUE;
     }
     $unavailablePeriod->save();

     return view('doctor.settings.appointmentsettings');
 }

 public function unavailablePeriod(Request $request) {
    $unavailablePeriod = new \App\unavailablePeriod();
    $unavailablePeriod->startDate = $request->input('startDate');
    $unavailablePeriod->endDate = $request->input('endDate');
    $unavailablePeriod->message = $request->input('message');
    if($request->input('dayType')=="holiday"){
     $unavailablePeriod->holiday = TRUE;
 }
 $unavailablePeriod->save();

 foreach (\App\session::where('available',TRUE)->get() as $avbSession) {
    if ($request->input('dayType')=="holiday") {
        DB::insert('INSERT INTO session_unavailableperiod (session_id, unavailable_period_id) values (?, ?)', [$avbSession->id,$unavailablePeriod->id]);
    }
    elseif ($request->input($avbSession->id)) {
        DB::insert('INSERT INTO session_unavailableperiod (session_id, unavailable_period_id) values (?, ?)', [$avbSession->id,$unavailablePeriod->id]);
    }
}
foreach ($unavailablePeriod->sessions as $session) {
} 

return view('doctor.settings.appointmentsettings');
}

public function viewInventorySettings() {
    return view('doctor.inventory.inventorySettings');
}

    /*
    * Lab tasks
    */

    public function viewLabTab() {
        return view('doctor.lab.lab');
    }

    public function searchLabReports() {

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

    public function manageDoctors(){
        $doctors = doctor::all();
        $doc_count = user::where('role',"doctor")->count();
        $assistant_doc_count = user::where('role',"assistantDoctor")->count();
        $active_doc_count = user::where('role',"doctor" )->where('active',1)->count();
        $active_a_doc_count = user::where('role',"assistantDoctor" )->where('active',1)->count();
        $current_doctor = Auth::user()->id;
        return view('doctor.settings.manageDoctors', ['doctors' => $doctors] , ['data'=>array($doc_count,$assistant_doc_count,$active_doc_count,$active_a_doc_count,$current_doctor)]);
    }

    public function changeUserAccountStatus($id){


        $user= User::find($id);
        if ($user->active==0){
            $user->active=1;
        }elseif($user->active==1){
            $user->active=0;
        }
        $user->save();
        return back();
    }

    public function changePassword($id, Request $request){

        $user = User::find($id);
        $msg = "orig";
        if ($user){
            $newPassword = $request['newPassword'];
            if (strlen($newPassword)>4){
                if (!preg_match('/[^A-Za-z0-9.@#\\-$&]/', $newPassword)){
                    $user->password = bcrypt($newPassword);
                    $user->save();
                    $msg = "Password changed successfully.";

                }else{
                    $msg = "Failed to change password. Please make sure you entered a valid password with at least 5 characters.";
                }

            }else{
                $msg = "Failed to change password. Please make sure you entered a valid password with at least 5 characters.";
            }

        }
        return redirect()->back()->with('msg', $msg);
    }

    public function saveNewDoctor(Request $request){
        $user = new User();

        $name = $request['firstName'] . " " . $request['lastName'];

        $user->name = $name;
        $user->password = bcrypt("unicare101");
        $user->email = $request['email'];
        $user->gender = $request['gender'];

        $user->role = $request['role'];
        $user->active = 1;
        $user->save();


        $doc = new doctor();
        $doc->doctorName = $name;
        $doc->RegNO = $request['regNo'];
        $doc->user_id = $user->id;
        $doc->save();

        return redirect()->route('manageDoctors');
    }

}
