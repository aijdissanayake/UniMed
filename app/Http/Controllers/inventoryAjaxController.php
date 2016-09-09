<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\drug;

class inventoryAjaxController extends Controller
{
    public function updateDropdown(Request $request)
    {
    	
    	if($request->type_id=='1'){
    		$items = DB::table('drugs')->pluck('drugName');
	    	return response()->json([
			    'items' => $items
			]);
    	}else{
    		$items = DB::table('equipment')->pluck('equipmentName');
	    	return response()->json([
			    'items' => $items
			]);
    	}
    	
    	
    }
}