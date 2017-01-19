<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */

//Route::get('/', function () {
//    return view('welcome');
//});

  use App\Patient;

  Route::get('/', 'HomeController@index');

  Route::auth();

  Route::get('/home', 'HomeController@index');

//Route::get('/checkAuth');

/*
 * Doctor's control routes
 */


// Doctor's views

Route::group(['middleware' => 'authorizer:doctor'], function() {
    Route::get('doc', ['as' => 'homeTab', 'uses' => 'DoctorController@home']);
    Route::get('doc/patients', ['as' => 'patientsTab', 'uses' => 'DoctorController@viewPatientTab']);
    
    Route::get('doc/profile', ['as'=>'dViewProfile', 'uses'=>'DoctorController@viewProfile']);
    Route::get('doc/editProfile', ['as'=>'dEditProfile', 'uses'=>'DoctorController@editProfile']);

    Route::get('doc/inventory', ['as' => 'inventoryTab', 'uses' => 'DoctorController@viewInventoryTab']);
    Route::get('doc/lab', ['as' => 'labTab', 'uses' => 'DoctorController@viewLabTab']);
    Route::get('doc/lab/addNewLabTech', ['as' => 'addNewLabTech', 'uses' => function(){
        return view('doctor.lab.add_new_lab_tech');
    }]);

    Route::get('doc/patients/addpatient', ['as' => 'addPatient', 'uses' => 'DoctorController@regPatient']);

    Route::post('doc/patients/storePatient', ['as' => 'patientAdded', 'uses' => 'DoctorController@storePatient']);
    Route::post('doc/inventory/add',['as' => 'addItem',  'uses' => 'inventoryItemController@updateInventoryItem']);
    Route::post('doc/inventory/search',['as' => 'searchItem',  'uses' => 'inventoryItemController@searchInventoryItem']);
    Route::get('doc/inventory/settings',['as'=> 'inventorySettings', 'uses' => 'doctorController@viewInventorySettings']);
    
    Route::get('doc/settings',['as' => 'settings',  'uses' => 'DoctorController@viewSettingsPage']);
    Route::get('doc/settings/appointments', ['as'=>'docAppSettings', 'uses'=>'DoctorController@viewAppointmentSettingsPage']);
    Route::post('doc/settings/appointments/sessionAdded',['as'=>'addSession', 'uses'=>'DoctorController@addSession']);
    Route::post('doc/settings/appointments/unavailability',['as'=>'unavailablePeriod','uses'=>'DoctorController@unavailablePeriod']);
    Route::get('doc/settings/manageDoctors',['as' => 'manageDoctors',  'uses'=>'DoctorController@manageDoctors']);
    Route::get('doc/settings/manageDoctors/deactivate/{id}',['as' => 'deactivateDoctor',  'uses'=>'DoctorController@deactivateDoctor']);
    Route::get('doc/settings/manageDoctors/activate/{id}',['as' => 'activateDoctor',  'uses'=>'DoctorController@activateDoctor']);
    Route::get('doc/settings/manageDoctors/addNewDoctor',['as' => 'addNewDoctor',  'uses'=>function(){
        return view('doctor.settings.addNewDoctor');
    }]);
    Route::post('doc/settings/manageDoctors/saveNewDoctor',['as' => 'saveNewDoctor',  'uses'=>'DoctorController@saveNewDoctor']);


    Route::get('doc/patients/view/{id}', ['as' => 'viewPatient', 'uses' => 'DoctorController@viewPatientDetails']);

    // edit patient details

    Route::get('doc/patients/edit/{id}', ['as' => 'editPatient', 'uses' => function($id){
        $patient = patient::find($id);
        return view('doctor.patients.edit_patient', compact('patient'));
    }]);
    Route::post('doc/patients/update/{id}', ['as' => 'updatePatient', 'uses' => 'DoctorController@updatePatient']);

    // patient visits

    Route::get('doc/patients/createRecord/{id}', ['as' => 'createPatientVisitRecord', 'uses'=>'DoctorController@createPatientVisitRecord']);
    Route::get('doc/patients/newVisitRecord', ['as' => 'newVisitRecord', 'uses'=>function(){
        return view('doctor.patients.visitRecordWithSearch');
    }]);
    Route::get('doc/patients/view/vr/{id}', ['as'=>'viewVisitRecord','uses'=>'DoctorController@viewPatientVisitRecord']);
    Route::get('doc/patients/view/vrs/{id}', ['as'=>'viewAllVisits','uses'=>'DoctorController@viewAllPatientVisitRecords']);
    Route::post('doc/patients/storeRecord/{id}', ['as' => 'storePatientVisitRecord', 'uses'=>'DoctorController@storePatientVisitRecord']);

    Route::post('doc/patients/searchLabReports', ['as' => 'searchLabReports', 'uses' => 'DoctorController@searchLabReports']);
    
    // financial routes

    Route::get('doc/finance', ['as' => 'financeTab', 'uses' => 'DoctorController@viewFinanceTab']);
    Route::get('doc/finance/newTransaction', ['as'=> 'addTransaction', 'uses'=>function(){
        return view('doctor.finance.new_transaction_record');
    }]);

    Route::get('doc/finance/newAssistant', ['as'=> 'addAssistant', 'uses'=>function(){
        return view('doctor.finance.new_assistant');
    }]);
    Route::get('doc/finance/newTx', ['as'=>'createTx', 'uses'=>'DoctorController@CreateTransaction']);

    Route::get('doc/patients/all',['as'=>'viewAllPatients','uses'=>'DoctorController@viewAllPatients']);

// Doctors Charts

    Route::get('doc/patients/stats', ['as' => 'stats', 'uses' => 'ChartController@statForm']);
    Route::post('doc/patients/stat/patientvisits', ['as' => 'patientsVisitsStat', 'uses' => 'ChartController@display']);
    Route::get('doc/patients/test', ['as' => 'test', 'uses' => 'ChartController@test']);

    // Doctor's views' methods

    Route::get('doc/patients/chkuid', 'AjaxController@checkUN');
    Route::get('doc/finance/chkuid', 'AjaxController@checkUN');
    Route::get('doc/patients/search', 'AjaxController@searchPatients');

    Route::get('doc/finance/getTrx', ['as' => 'getTrx', 'uses' => 'AjaxController@getTransactions']);
    Route::get('doc/finance/newTransaction/tTypes', 'AjaxController@getTTypes');

    Route::get('doc/updateDropdown', 'inventoryItemController@updateDropdown');
    Route::get('doc/updateSummary', 'inventoryItemController@updateSummary');
});






/*
 * Patient's control routes
 */

Route::group(['middleware' => 'authorizer:patient'], function() {
    Route::get('pat', ['as' => 'patient', 'uses' => 'PatientController@home']);
    Route::get('pat/lab', ['as' => 'patientLabTab', 'uses' => 'PatientController@viewLabTab']);
    Route::post('pat/appointments', ['as' => 'appointment', 'uses' => 'PatientController@createAppointment']);
    Route::get('pat/profile', ['as'=>'pViewProfile', 'uses'=>'PatientController@viewProfile']);

    Route::get('pat/editProfile', ['as'=>'pEditProfile', 'uses'=>'PatientController@editProfile']);
    Route::get('pat/cancelAppointment',['as'=>'cancelAppointment', 'uses'=>'PatientController@cancelAppointment']);
    Route::get('dates', ['as' => 'unavailableDates', 'uses' => 'PatientController@getUnavailableDates']);

    Route::get('sessions',['as'=>'availableSessions','uses'=>'PatientController@getSessions']);

    Route::get('pat/view/vr/', ['as' => 'pVisitRecords', 'uses' => 'PatientController@viewAllVisitRecords']);
    Route::get('pat/view/vr/{id}', ['as' => 'pSingleVisitRecord', 'uses' => 'PatientController@viewSingleVisitRecord']);
    
});




/*
 * Assistant's control routes
 */


Route::group(['middleware' => 'authorizer:assistant'], function() {
    Route::get('ast', ['as' => 'ast', 'uses' => 'AssistantController@home']);
    Route::get('ast/finance', ['as' => 'astFinance', 'uses' => 'AssistantController@viewFinTab']);
    Route::get('ast/lab', ['as' => 'astLab', 'uses' => 'AssistantController@viewLabTab']);
    Route::get('ast/inventory', ['as' => 'astInventory', 'uses' => 'AssistantController@viewInvTab']);
    Route::get('ast/reports', ['as' => 'astReports', 'uses' => 'AssistantController@viewRep']);
    Route::get('ast/newtrec', ['as' => 'astAddTRec', 'uses' => 'AssistantController@addTransRec']);
    Route::get('ast/profile', ['as'=>'astViewProfile', 'uses'=>'AssistantController@viewProfile']);
    Route::get('ast/editProfile', ['as'=>'astEditProfile', 'uses'=>'AssistantController@editProfile']);
});


/*
 * Lab Tech's control routes
 */


Route::group(['middleware' => 'authorizer:labTech'], function() {
    Route::get('lt', ['as' => 'lt', 'uses' => 'LabTechController@home']);
    Route::get('lt/newRep', ['as' => 'ltNewRep', 'uses' => 'LabTechController@newReport']);
    Route::post('lt/newfbr', ['as' => 'ltNewFbr', 'uses' => 'LabTechController@createNewFBR']);
    Route::get('lt/pat', ['as' => 'ltLab', 'uses' => 'LabTechController@patientLab']);
    Route::get('lt/profile', ['as'=>'ltViewProfile', 'uses'=>'LabTechController@viewProfile']);
    Route::get('lt/editProfile', ['as'=>'ltEditProfile', 'uses'=>'LabTechController@editProfile']);
});

/*
 * Admin's control routes
 */

Route::group(['middleware' => 'authorizer:admin'], function() {
    Route::get('admin', ['as' => 'adminHome', 'uses' => 'AdminController@home']);
//    Route::post('admin/adddoc', ['as' => 'admin', 'uses' => 'AdminController@addDoc']);
//    Route::get('admin/addpat', ['as' => 'ltLab', 'uses' => 'Admin@patientLab']);
});


/*
 * Testing routes for the new interface
 */

Route::get('testLogin', 'testController@login');
Route::get('test', function(){
    return view('mat_test')->with('htmlCode','Nothing');
});