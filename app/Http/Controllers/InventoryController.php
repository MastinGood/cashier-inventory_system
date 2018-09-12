<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inventory;
use Carbon\Carbon;
use Auth;
use App\Item;
class InventoryController extends Controller
{
    public function save(Request $request)
    {
    	$this->validate($request,[
    		'itemcode' => 'required|max:20',
    		'name' => 'required',
    		'quantity' => 'required|integer',
    		'price' => 'required|integer',
    	]);
    	$notification = array(
            'message' => 'Item successfully added!!',
            'alert-type' => 'success'
        );
    	$inventories = new Inventory;
    	$inventories->itemcode = $request['itemcode'];
    	$inventories->name = $request['name'];
    	$inventories->quantity = $request['quantity'];
    	$inventories->price = $request['price'];
    	$inventories->dateadded = Carbon::now();
    	$inventories->addedby = Auth::user()->id;
    	$inventories->save();

    	$items = new Item;
    	$items->itemcode = $request['itemcode'];
    	$items->name = $request['name'];
    	$items->quantity = $request['quantity'];
    	$items->price = $request['price'];
    	$items->dateadded = Carbon::now();
    	$items->addedby = Auth::user()->id;
    	$items->save();

    	return redirect()->back()->with($notification);
    }
    public function update(Request $request){
    	$inventory = Inventory::find($request->id);
    	$inventory->itemcode = $request->up_itemcode;
    	$inventory->name = $request->up_name;
    	$inventory->quantity = $request->up_quantity;
    	$inventory->price = $request->up_price;
    	$inventory->save();
    	$item = Item::where('itemcode', $request->up_itemcode)->first();
    	$item->itemcode = $request->up_itemcode;
    	$item->name = $request->up_name;
    	$item->quantity = $request->up_quantity;
    	$item->price = $request->up_price;
    	$item->save();
    	$notification = array(
            'message' => 'Item successfully updated!!',
            'alert-type' => 'success'
        );
    	return redirect()->back()->with($notification);

    }
}
