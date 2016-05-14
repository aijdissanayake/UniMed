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

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

/*
 * Doctor's control routes
 */


// Doctor's views
Route::get('doctor/home',['as'=>'homeTab', 'uses'=> 'DoctorController@home']);
Route::get('doctor/patients', ['as'=>'patientsTab', 'uses'=>'DoctorController@viewPatientTab']);
Route::get('doctor/finance',['as'=>'financeTab', 'uses'=> 'DoctorController@viewFinanceTab']);

Route::get('doctor/inventory', ['as'=>'inventoryTab', 'uses'=>'DoctorController@viewInventoryTab']);
Route::get('doctor/lab', ['as'=>'labTab', 'uses'=>'DoctorController@viewLabTab']);

Route::get('doctor/patients/addpatient', ['as'=>'addPatient', 'uses' => 'DoctorController@regPatient']);

Route::post('doctor/patients/test', ['as'=>'patientAdded','uses'=>'DoctorController@storePatient']);

//Route::get('doctor/patients/{id}', 'DoctorController@showPatient');

Route::post('doctor/patients/search',['as'=>'searchPatients','uses'=>'DoctorController@searchPatient']);

// Doctor's views' methods




/*
 * Patient's control routes
 */




/*
 * Assistant's control routes
 */




/*
 * Lab Tech's control routes
 */



