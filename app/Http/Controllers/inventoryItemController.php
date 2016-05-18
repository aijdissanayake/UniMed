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





        $drugs = drug::all();
        $equip = equipment::all();
        $items = array($drugs, $equip); //this array is used to create drop down menus.
        //return view('doctor.inventory.inventory', compact('items'));
        echo $currentStock;
    }

}
