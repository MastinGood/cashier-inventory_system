<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;
use App\Inventory;
use App\Item;
use App\Order;
class StaffController extends Controller
{
    public function inventory_index(){
        $inventories = Inventory::all();
    	return view('staff.inventory', compact('inventories'));
    }
    public function items_index(){
        $items = Item::all();
    	return view('staff.items', compact('items'));
    }
     public function orders_index(){
        $items = Order::all();
    	return view('staff.orders', compact('items'));
    }
     public function total_index(){
    	return view('staff.totals');
    }
     public function report_index(){
    	return view('staff.reports');
    }
    public function search(Request $request){
    	$s = $request->input('search');
    	$users = User::where('name','like','%'.$s.'%')->get();

    	return view('staff.search_staff', compact('users'));
    }
}
