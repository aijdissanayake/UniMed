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
    Route::get('doc/finance', ['as' => 'financeTab', 'uses' => 'DoctorController@viewFinanceTab']);
    Route::get('doc/profile', ['as'=>'dViewProfile', 'uses'=>'DoctorController@viewProfile']);
    Route::get('doc/editProfile', ['as'=>'dEditProfile', 'uses'=>'DoctorController@editProfile']);

    Route::get('doc/inventory', ['as' => 'inventoryTab', 'uses' => 'DoctorController@viewInventoryTab']);
    Route::get('doc/lab', ['as' => 'labTab', 'uses' => 'DoctorController@viewLabTab']);

    Route::get('doc/patients/addpatient', ['as' => 'addPatient', 'uses' => 'DoctorController@regPatient']);

    Route::post('doc/patients/test', ['as' => 'patientAdded', 'uses' => 'DoctorController@storePatient']);
    Route::post('doc/inventory/add',['as' => 'addItem',  'uses' => 'inventoryItemController@addInventoryItem']);
    Route::post('doc/inventory/remove',['as' => 'removeItem',  'uses' => 'inventoryItemController@removeInventoryItem']);
    Route::post('doc/inventory/search',['as' => 'searchItem',  'uses' => 'inventoryItemController@searchInventoryItem']);


//Route::get('doctor/patients/{id}', 'DoctorController@showPatient');

    Route::post('doc/patients/search', ['as' => 'searchPatients', 'uses' => 'DoctorController@searchPatient']);
    Route::get('doc/patients/edit/{id}', ['as' => 'editPatient', 'uses' => 'DoctorController@editPatient']);
    Route::get('doc/patients/createRecord/{id}', ['as' => 'createPatientVisitRecord', 'uses'=>'DoctorController@createPatientVisitRecord']);
    Route::post('doc/patients/storeRecord/{id}', ['as' => 'storePatientVisitRecord', 'uses'=>'DoctorController@storePatientVisitRecord']);

    Route::post('doc/patients/searchLabReports', ['as' => 'searchLabReports', 'uses' => 'DoctorController@searchLabReports']);

// Doctors Charts

    Route::get('doc/patients/stats', ['as' => 'stats', 'uses' => 'ChartController@statForm']);
    Route::post('doc/patients/stat/patientvisits', ['as' => 'patientsVisitsStat', 'uses' => 'ChartController@display']);
    Route::get('doc/patients/test', ['as' => 'test', 'uses' => 'ChartController@test']);
});

// Doctor's views' methods




/*
 * Patient's control routes
 */

Route::group(['middleware' => 'authorizer:patient'], function() {
    Route::get('pat', ['as' => 'patient', 'uses' => 'PatientController@home']);
    Route::get('pat/lab', ['as' => 'patientLabTab', 'uses' => 'PatientController@viewLabTab']);
    Route::post('pat/appointments', ['as' => 'appointment', 'uses' => 'PatientController@createAppointment']);
    Route::get('pat/profile', ['as'=>'pViewProfile', 'uses'=>'PatientController@viewProfile']);
    Route::get('pat/editProfile', ['as'=>'pEditProfile', 'uses'=>'PatientController@editProfile']);
    
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
    Route::post('lt/newRep', ['as' => 'ltNewRep', 'uses' => 'LabTechController@newReport']);
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
