<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\Patient;
use App\incomeType;
use App\expenseType;
use App\income;
use App\expense;
use DB;


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
        
        $patients = User::where('role', 'patient')
        ->where('name', 'LIKE', '%'.$value.'%')
        ->orWHere('telephoneNo', 'LIKE', $value.'%')
        ->take(20)->get();
        
        

        
        if ($patients->isEmpty()){
            return response()->json([],200);
        }else{
            $pData = array();
            foreach ($patients as $patient){

                $name = $patient->name;
                
                $pData[]=array("name"=>$name ,"telephone"=>$patient->telephoneNo,
                    "id"=>$patient->getPatient->id);
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

    public function getTransactions(Request $req){
        $transactions = array();
        if ($req->tType=="1"){
            $transactions = DB::select("select DATE_FORMAT(receiptDate, '%Y-%m-%d') as date, income_types.incomeName as name,income_types.description as description, incomes.value as value from incomes inner join income_types on incomes.incomeType = income_types.id order by date desc limit 10");
        }elseif ($req->tType=="2") {
            $transactions = DB::select("select DATE_FORMAT(paymentDate, '%Y-%m-%d') as date, expense_types.expenseName as name,expense_types.description as description, expenses.value as value from expenses inner join expense_types on expenses.paymentType = expense_types.id order by date desc limit 10");
        }elseif ($req->tType=="3"){
            $transactions1 = DB::select("select DATE_FORMAT(receiptDate, '%Y-%m-%d') as date, income_types.incomeName as name,income_types.description as description, incomes.value as value from incomes inner join income_types on incomes.incomeType = income_types.id order by date desc limit 10");
            $transactions2 = DB::select("select DATE_FORMAT(paymentDate, '%Y-%m-%d') as date, expense_types.expenseName as name,expense_types.description as description, expenses.value as value from expenses inner join expense_types on expenses.paymentType = expense_types.id order by date desc limit 10");

            $transactions = array_merge($transactions1, $transactions2);
        }
        return response()->json($transactions,200);
    }


    
}
