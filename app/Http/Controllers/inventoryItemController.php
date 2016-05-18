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
            $quantity = $input['a_quantity'];
            $requiredItem = \App\inventoryItem::where('itemName', 'LIKE', '%' . $name . '%')->get()[0];
            $currentStock = $requiredItem->currStock;
            $minimum = $requiredItem->minStock;
            DB::table('inventory_items')->where('itemName', 'LIKE', '%' . $name . '%')->update(['currStock'=>$currentStock+(int)$quantity]);


//            $newItem = new inventoryItem();
//            $newItem->itemName = $name;
//            $newItem->currStock = $currentStock+ (int)$quantity;
//            $newItem->save();

        }else{


            $name = $input['a_equips'];
            $quantity = $input['a_quantity'];
            $requiredItem = \App\inventoryItem::where('itemName', 'LIKE', '%' . $name . '%')->get()[0];
            $currentStock = $requiredItem->currStock;
            $minimum = $requiredItem->minStock;
            DB::table('inventory_items')->where('itemName', 'LIKE', '%' . $name . '%')->update(['currStock'=>$currentStock+(int)$quantity]);

        }


        $drugs = drug::all();
        $equip = equipment::all();
        $items = array($drugs, $equip); //this array is used to create drop down menus.
        //return view('doctor.inventory.inventory', compact('items'));
        echo $currentStock;
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
            DB::table('inventory_items')->where('itemName', 'LIKE', '%' . $name . '%')->update(['currStock'=>$currentStock-(int)$quantity]);


//            $newItem = new inventoryItem();
//            $newItem->itemName = $name;
//            $newItem->currStock = $currentStock+ (int)$quantity;
//            $newItem->save();

        }else{


            $name = $input['r_equips'];
            $quantity = $input['r_quantity'];
            $requiredItem = \App\inventoryItem::where('itemName', 'LIKE', '%' . $name . '%')->get()[0];
            $currentStock = $requiredItem->currStock;
            $minimum = $requiredItem->minStock;
            DB::table('inventory_items')->where('itemName', 'LIKE', '%' . $name . '%')->update(['currStock'=>$currentStock-(int)$quantity]);

        }


        $drugs = drug::all();
        $equip = equipment::all();
        $items = array($drugs, $equip); //this array is used to create drop down menus.
        //return view('doctor.inventory.inventory', compact('items'));
        echo $currentStock;
    }

    public function(){
        
    }

}
