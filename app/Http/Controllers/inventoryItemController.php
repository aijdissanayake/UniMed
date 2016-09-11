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
        $feedback = "error!";

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

            $feedback = "Items added!";


        }else{

            if ($itemType == "1") {

                $requiredItem = \App\inventoryItem::where('itemName', 'LIKE', '%' . $name . '%')->get()[0];
                $currentStock = $requiredItem->currStock;
                $minimum = $requiredItem->minStock;

                if($quantity<$currentStock){
                    DB::table('inventory_items')->where('itemName', 'LIKE', '%' . $name . '%')->update(['currStock'=>$currentStock-(int)$quantity]);
                    $feedback = "Items removed!";

                    if($currentStock-$quantity<$minimum){         // logic to display stock level critical warning
                        DB::table('inventory_items')->where('itemName', 'LIKE', '%' . $name . '%')->update(['restockNeeded'=>'1']);
                        $feedback = "Items removed. Restock required!";

                    }
                }else{
                    $feedback = "not enough stocks!";
                }



            }else{

                $requiredItem = \App\inventoryItem::where('itemName', 'LIKE', '%' . $name . '%')->get()[0];
                $currentStock = $requiredItem->currStock;
                $minimum = $requiredItem->minStock;

                if($quantity<$currentStock){
                    DB::table('inventory_items')->where('itemName', 'LIKE', '%' . $name . '%')->update(['currStock'=>$currentStock-(int)$quantity]);
                     $feedback = "Items removed!";


                    // logic to dispaly stock level critical warning
                    if($currentStock-$quantity<$minimum){         // logic to dispaly stock level critical warning
                        DB::table('inventory_items')->where('itemName', 'LIKE', '%' . $name . '%')->update(['restockNeeded'=>'1']);
                        $feedback = "Items removed. Restock required!";

                    }
                }else{
                    $feedback = "not enough stocks!";

                }
            }

        }

        return response()->json([
                'feedback' => $feedback
        ]);
    }


    public function searchInventoryItem(){



        $input = Input::all();
        $itemType = $input['search_type'];


        if ($itemType == "1") {

            $name = $input['search_items'];
            $requiredItem = \App\inventoryItem::where('itemName', 'LIKE', '%' . $name . '%')->get()[0];
            $quantity = $requiredItem->currStock;
            $description = \App\drug::where('drugName', 'LIKE', '%' . $name . '%')->get()[0]->description;

        }else{
            $name = $input['search_items'];
            $requiredItem = \App\inventoryItem::where('itemName', 'LIKE', '%' . $name . '%')->get()[0];
            $quantity = $requiredItem->currStock;
            $description = \App\equipment::where('equipmentName', 'LIKE', '%' . $name . '%')->get()[0]->description;
        }

        
        return response()->json([
                'name' => $name,
                'itemType' => $itemType,
                'quantity' => $quantity,
                'description' => $description
        ]);
    }

}
