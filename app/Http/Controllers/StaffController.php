<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;
use App\Inventory;
use App\Item;
use App\Order;
use App\Total;
use Carbon\Carbon;
use App\Report;
use Auth;
use DB;
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
       $date = Carbon::now()->format('M d, Y');
        $totals = Total::all();
        $sum = 0;
        foreach($totals as $total){
             
            $sum += $total->sub_total;
           
        }
        
    	return view('staff.totals', compact('totals', 'sum','date'));
    }
     public function report_index(){
     	$reportss = Report::orderBy('created_at', 'DESC')->get();
     	
    	return view('staff.reports', compact('reportss'));
    }
    public function search(Request $request){
    	$s = $request->input('search');
    	$users = User::where('name','like','%'.$s.'%')->get();

    	return view('staff.search_staff', compact('users'));
    }
    public function staff_save_report(){
        
        $totals = Total::all();
        $orders = Order::all();
        $total = 0;
        $notification = array(
            'message' => 'Item ordered successfully!!',
            'alert-type' => 'success');
         foreach($totals as $tot){

            $rep = new Report;
            $rep->save_id = Auth::user()->id;
            $rep->save_by = Auth::user()->name;
            $rep->save_date = Carbon::now()->format("m-d-Y");
            $rep->name = $tot->item($tot->item_code)->name;
            $rep->item_code = $tot->item_code;
            $rep->quantity = $tot->quantity;
            $rep->sub_total = $tot->sub_total;
            $rep->total = $tot->sub_total += $tot->sub_total;
            $rep->save();

            $tot->delete();
         }
         foreach($orders as $order){
            $order->delete();
         }
          
         return redirect()->back()->with('info', 'Successfully submitted report!!');
    }
    public function dashboard(){
        $online_users = User::all();
        $recent_user = User::orderBy('created_at', 'DESC')->get();
        $sales = Report::all();
        $userz = User::all()->count();
        $sold = Report::all()->count();
        $today_sold = Report::where('save_date', Carbon::now()->format("m-d-Y"))->count();
        $today_sales = Report::where('save_date', Carbon::now()->format("m-d-Y"))->count();
        $today_salezz = Report::where('save_date', Carbon::now()->format("m-d-Y"))->get();
        $salezz = 0;
         foreach($today_salezz as $salez){
            $salezz += $salez->sub_total;
        }
       
        $tots = 0;
        foreach($sales->all() as $sale){
            $tots += $sale->sub_total;
        }
        $users = User::limit(5)->get();
        foreach($users as $user){
            $rep = DB::table('reports')
                                ->where('save_date', Carbon::now()->format("m-d-Y"))
                                ->select('save_id','save_by', DB::raw('SUM(sub_total) as today_sale'), DB::raw('COUNT(save_id) as today_sold'))
                                ->groupBy('save_id','save_by')
                                ->orderBy('today_sale' ,'DESC')
                                ->get();
        }
    
        return view('staff.dashboard', compact('online_users','tots','sold', 'today_sales','userz', 'recent_user', 'rep', 'salezz','today_sold'));
    }
}
