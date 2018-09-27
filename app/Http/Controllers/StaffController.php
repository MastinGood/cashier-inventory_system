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
        $online_users = User::paginate(5);
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
        $top_sell = DB::table('reports')
                    ->select('name','item_code', DB::raw('COUNT(sub_total) as top_selling'))
                    ->groupBy('name','item_code')
                    ->orderBy('top_selling','DESC')
                    ->limit(5)
                    ->get();
        $usersz = User::limit(5)->get();
        foreach($usersz as $users){
            $yesterday = DB::table('reports')
                                ->where('save_date', Carbon::yesterday()->format("m-d-Y"))
                                ->select('save_id','save_by', DB::raw('SUM(sub_total) as yesterday_sale'), DB::raw('COUNT(save_id) as yesterday_sold'))
                                ->groupBy('save_id','save_by')
                                ->orderBy('yesterday_sale' ,'DESC')
                                ->get();
        }
        $yesterday_sold = Report::where('save_date', Carbon::yesterday()->format("m-d-Y"))->count();
        $yesterday_salezz = Report::where('save_date', Carbon::yesterday()->format("m-d-Y"))->get();
        $salezzz = 0;
         foreach($yesterday_salezz as $salezx){
            $salezzz += $salezx->sub_total;
        }
        $lastweek = DB::table('reports')
                                ->whereBetween('save_date', array(Carbon::now()->subWeek(1)->format("m-d-Y"),Carbon::now()->format("m-d-Y")))
                                ->select('save_id','save_by', DB::raw('SUM(sub_total) as lastweek_sale'), DB::raw('COUNT(save_id) as lastweek_sold'))
                                ->groupBy('save_id','save_by')
                                ->orderBy('lastweek_sale' ,'DESC')
                                ->get();
        $lastweek_sold = Report::whereBetween('save_date', array(Carbon::now()->subWeek(1)->format("m-d-Y"),Carbon::now()->format("m-d-Y")))->count();
        $lastweek_salezz = Report::whereBetween('save_date', array(Carbon::now()->subWeek(1)->format("m-d-Y"),Carbon::now()->format("m-d-Y")))->get();
        $lastweeks = 0;
         foreach($lastweek_salezz as $last){
            $lastweeks += $last->sub_total;
        }
        
      
        return view('staff.dashboard', compact('top_sell','online_users','tots','sold', 'today_sales','userz', 'recent_user', 'rep', 'salezz','today_sold','yesterday','salezzz','yesterday_sold','lastweek_sold','lastweek_salezz','lastweeks','lastweek'));
    }
    public function cancel(){
        $totals = Total::all();
        foreach($totals->all() as $total){
            $inventory = Inventory::where('itemcode', $total->item_code)->first();
            $updated_inventory = $inventory->quantity + $total->quantity;
            Inventory::where('itemcode', $total->item_code)->update(['quantity'=> $updated_inventory]);
            $item = Item::where('itemcode', $total->item_code)->first();
            $updated_item = $item->quantity + $total->quantity;
            Item::where('itemcode', $total->item_code)->update(['quantity'=> $updated_item]);
            $total->delete();        
        }
        return redirect()->back()->with('info', 'Your transaction successfully cancelled out!!');
    }
}
