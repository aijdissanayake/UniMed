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
    public function updateInventoryItem()
    {

        $input = Input::all();
        $itemType = $input['update_type'];
        $add_remove = $input['add_remove'];
        $name = $input['update_items'];
        $quantity = (int)$input['quantity'];
        $feedback = "inventory updated!";

        if($add_remove=='add'){

            if ($itemType == "1") {
            
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

                $requiredItem = \App\inventoryItem::where('itemName', 'LIKE', '%' . $name . '%')->get()[0];
                $currentStock = (int)$requiredItem->currStock;
                $minimum = (int)$requiredItem->minStock;

                if($currentStock<$minimum && $minimum<$currentStock + $quantity){
                    //remove the warning
                    DB::table('inventory_items')->where('itemName', 'LIKE', '%' . $name . '%')->update(['restockNeeded'=>'0']);

                }
                DB::table('inventory_items')->where('itemName', 'LIKE', '%' . $name . '%')->update(['currStock'=>$currentStock+$quantity]);

            }


        }else{

            if ($itemType == "1") {

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

        }

        return redirect()->route('inventoryTab');
    }


    public function searchInventoryItem(){



        $input = Input::all();
        $itemType = $input['s_type'];


        if ($itemType == "Drugs") {

            $name = $input['s_drugs'];
            $requiredItem = \App\inventoryItem::where('itemName', 'LIKE', '%' . $name . '%')->get()[0];
            $quantity = $requiredItem->currStock;
            $description = \App\drug::where('drugName', 'LIKE', '%' . $name . '%')->get()[0]->description;

        }else{
            $name = $input['s_equips'];
            $requiredItem = \App\inventoryItem::where('itemName', 'LIKE', '%' . $name . '%')->get()[0];
            $quantity = $requiredItem->currStock;
            $description = \App\drug::where('drugName', 'LIKE', '%' . $name . '%')->get()[0]->description;
        }

        $drugs = drug::all();
        $equip = equipment::all();
        $items = array($drugs, $equip, $description,$quantity); //this array is used to create drop down menus and search results.
        return view('doctor.inventory.inventory_search', compact('items'));

    }

}
