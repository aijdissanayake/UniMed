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
    public function addInventoryItem()
    {

        $input = Input::all();
        $itemType = $input['a_type'];


        if ($itemType == "Drugs") {


            $name = $input['a_drugs'];
            $quantity = (int)$input['a_quantity'];
            $requiredItem = \App\inventoryItem::where('itemName', 'LIKE', '%' . $name . '%')->get()[0];
            $currentStock = (int)$requiredItem->currStock;
            $minimum = (int)$requiredItem->minStock;

            if($currentStock<$minimum && $minimum<$currentStock + $quantity){
                //remove the warning
                DB::table('inventory_items')->where('itemName', 'LIKE', '%' . $name . '%')->update(['restockNeeded'=>'0']);


            }
            DB::table('inventory_items')->where('itemName', 'LIKE', '%' . $name . '%')->update(['currStock'=>$currentStock+$quantity]);


//            $newItem = new inventoryItem();
//            $newItem->itemName = $name;
//            $newItem->currStock = $currentStock+ (int)$quantity;
//            $newItem->save();

        }else{

            $name = $input['a_equips'];
            $quantity = (int)$input['a_quantity'];
            $requiredItem = \App\inventoryItem::where('itemName', 'LIKE', '%' . $name . '%')->get()[0];
            $currentStock = (int)$requiredItem->currStock;
            $minimum = (int)$requiredItem->minStock;

            if($currentStock<$minimum && $minimum<$currentStock + $quantity){
                //remove the warning
                DB::table('inventory_items')->where('itemName', 'LIKE', '%' . $name . '%')->update(['restockNeeded'=>'0']);

            }
            DB::table('inventory_items')->where('itemName', 'LIKE', '%' . $name . '%')->update(['currStock'=>$currentStock+$quantity]);

        }


        $drugs = drug::all();
        $equip = equipment::all();
        $items = array($drugs, $equip); //this array is used to create drop down menus.
        return view('doctor.inventory.inventory', compact('items'));
        //echo $currentStock;
    }

    public function removeInventoryItem()
    {

        $input = Input::all();
        $itemType = $input['r_type'];


        if ($itemType == "Drugs") {


            $name = $input['r_drugs'];
            $quantity = $input['r_quantity'];
            $requiredItem = \App\inventoryItem::where('itemName', 'LIKE', '%' . $name . '%')->get()[0];
            $currentStock = $requiredItem->currStock;
            $minimum = $requiredItem->minStock;

            if($quantity<$currentStock){
                DB::table('inventory_items')->where('itemName', 'LIKE', '%' . $name . '%')->update(['currStock'=>$currentStock-(int)$quantity]);

                if($currentStock-$quantity<$minimum){         // logic to display stock level critical warning
                    DB::table('inventory_items')->where('itemName', 'LIKE', '%' . $name . '%')->update(['restockNeeded'=>'1']);

                }
            }



        }else{


            $name = $input['r_equips'];
            $quantity = $input['r_quantity'];
            $requiredItem = \App\inventoryItem::where('itemName', 'LIKE', '%' . $name . '%')->get()[0];
            $currentStock = $requiredItem->currStock;
            $minimum = $requiredItem->minStock;

            if($quantity<$currentStock){
                DB::table('inventory_items')->where('itemName', 'LIKE', '%' . $name . '%')->update(['currStock'=>$currentStock-(int)$quantity]);

                // logic to dispaly stock level critical warning
                if($currentStock-$quantity<$minimum){         // logic to dispaly stock level critical warning
                    DB::table('inventory_items')->where('itemName', 'LIKE', '%' . $name . '%')->update(['restockNeeded'=>'1']);

                }
            }
        }

        $drugs = drug::all();
        $equip = equipment::all();
        $items = array($drugs, $equip); //this array is used to create drop down menus.
        return view('doctor.inventory.inventory', compact('items'));
        //echo $currentStock;
    }

    public function searchInventoryItem(){

        echo "search";

        $input = Input::all();
        $itemType = $input['s_type'];


        if ($itemType == "Drugs") {

            $name = $input['s_drugs'];
            $requiredItem = \App\inventoryItem::where('itemName', 'LIKE', '%' . $name . '%')->get()[0];
            $quantity = $requiredItem->currStock;
        }else{
            $name = $input['s_equips'];
            $requiredItem = \App\inventoryItem::where('itemName', 'LIKE', '%' . $name . '%')->get()[0];
            $quantity = $requiredItem->currStock;
        }
    }

}
