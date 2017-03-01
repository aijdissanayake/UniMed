<?php

namespace App\Http\Controllers;

use App\inventoryItem;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use App\drug;
use App\equipment;
use Illuminate\Support\Facades\DB;


class inventoryItemController extends Controller
{
    /**
     *
     */
    public function addItem()
    {
        

    }





    public function searchInventoryItem(){



        $input = Input::all();
        $itemType = $input['search_type'];


        
        $name = $input['search_items'];
        $requiredItem = \App\inventoryItem::where('itemName', 'LIKE', '%' . $name . '%')->get()[0];
        $quantity = $requiredItem->currStock;
        $description = \App\equipment::where('equipmentName', 'LIKE', '%' . $name . '%')->get()[0]->description;
        $type="Equipment";
        

        
        return response()->json([
            'name' => $name,
            'type' => $type,
            'quantity' => $quantity,
            'description' => $description
            ]);
    }





    public function updateDropdown(Request $request)  //used to dynamically update dropdown menus
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

    



    public function updateSummary(Request $request) //used to update inventory summary
    {
        $refillNeeded = DB::table('inventory_items')->where('restockNeeded', '=', 1)->pluck('itemName');
        return response()->json([
            'items' => $refillNeeded
            ]);

    }

}
