<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\Patient;
use App\incomeType;
use App\expenseType;

class AjaxController extends Controller {

    //
    public function checkUN(Request $req) {
        $msg = "";

        if (User::where('email', $req->email)->exists()) {
            $msg = "This username is already in use.";
        } else {
            $msg = "username available.";
        }

        return response()->json(array('msg' => $msg), 200);
    }

    public function searchPatients(Request $request) {
        $value = $request->value;
        $col = $request->col_name;
        
        if ($col == '1'){
            $col_name = 'firstName';
        } elseif ($col == '2'){
            $col_name = 'lastName';
        } elseif ($col == '3'){
            $col_name = 'telephoneNo';
        }
        
        $patients = Patient::where($col_name, 'LIKE', '%' . $value . '%')
                ->take(20)
                ->get();
        
        if ($patients->isEmpty()){
            return response()->json([],200);
        }else{
            $pData = array();
            foreach ($patients as $patient){
                $name = $patient->firstName." ".$patient->lastName;
                
                $pData[]=array("name"=>$name ,"telephone"=>$patient->telephoneNo,
                    "id"=>$patient->id);
            }
            return response()->json($pData,200);
        }
        
        
    }

    
    public function getTTypes(Request $req) {
        $tTypes = array();
        if ($req->tType=="1"){
            $tTypes = incomeType::all();
        }elseif ($req->tType=="2") {
            $tTypes = expenseType::all();
        }
        return response()->json($tTypes,200);
    }
    
            }
