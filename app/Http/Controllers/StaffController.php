<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;
class StaffController extends Controller
{
    public function inventory_index(){
    	return view('staff.inventory');
    }
    public function items_index(){
    	return view('staff.items');
    }
     public function orders_index(){
    	return view('staff.orders');
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
