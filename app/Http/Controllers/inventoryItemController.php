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
                //add logic to dispaly stock level critical warning
            }



        }else{


            $name = $input['r_equips'];
            $quantity = $input['r_quantity'];
            $requiredItem = \App\inventoryItem::where('itemName', 'LIKE', '%' . $name . '%')->get()[0];
            $currentStock = $requiredItem->currStock;
            $minimum = $requiredItem->minStock;

            if($quantity<$currentStock){
                DB::table('inventory_items')->where('itemName', 'LIKE', '%' . $name . '%')->update(['currStock'=>$currentStock-(int)$quantity]);
                //add logic to dispaly stock level critical warning
            }

        }


        $drugs = drug::all();
        $equip = equipment::all();
        $items = array($drugs, $equip); //this array is used to create drop down menus.
        return view('doctor.inventory.inventory', compact('items'));
        //echo $currentStock;
    }

    public function searchItem(){
        echo "search";
    }

}
