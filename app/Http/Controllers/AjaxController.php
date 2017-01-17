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

    public function getTransactions(Request $req){
        $transactions = array();
        if ($req->tType=="1"){
            $transactions = DB::table('incomes')
                            ->join('income_types', 'incomes.incomeType', '=', 'income_types.id')
                            ->orderBy('receiptDate', 'desc')
                            ->select('incomes.receiptDate as date', 'income_types.incomeName as name','income_types.description as description', 'incomes.value as value')
                            ->take(10)
                            ->get();
        }elseif ($req->tType=="2") {
            $transactions = DB::table('expenses')
                            ->join('expense_types', 'expenses.paymentType','=','expense_types.id')
                            ->orderBy('paymentDate', 'desc')
                            ->select('expenses.paymentDate as date', 'expense_types.expenseName as name','expense_types.description as description', 'expenses.value as value')
                            ->take(10)
                            ->get();
        }elseif ($req->tType=="3"){
            $transactions1 = DB::table('incomes')
                            ->join('income_types', 'incomes.incomeType', '=', 'income_types.id')
                            ->orderBy('receiptDate', 'desc')
                            ->select('incomes.receiptDate as date', 'income_types.incomeName as name','income_types.description as description', 'incomes.value as value')
                            ->take(10)
                            ->get();
            $transactions2 = DB::table('expenses')
                            ->join('expense_types', 'expenses.paymentType','=','expense_types.id')
                            ->orderBy('paymentDate', 'desc')
                            ->select('expenses.paymentDate as date', 'expense_types.expenseName as name','expense_types.description as description', 'expenses.value as value')
                            ->take(10)
                            ->get();

            $transactions = array_merge($transactions1, $transactions2);
        }
        return response()->json($transactions,200);
    }


    
}
