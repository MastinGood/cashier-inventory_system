<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use Auth;
use App\User;
use App\Total;
use App\Report;
use App\Order;
use App\Item;
use Carbon\Carbon;
class ProfileController extends Controller
{
    public function profile($id){
        $past_trans = Report::where('save_id', Auth::user()->id)->paginate(10);
        $today_trans = Report::where('save_id', Auth::user()->id)
                              ->where('save_date', Carbon::now()->format("m-d-Y"))->paginate(10);
        $today_sales = Report::where('save_id', Auth::user()->id)
                              ->where('save_date', Carbon::now()->format("m-d-Y"))
                              ->count();
        $total_sales = 0;
        $tots = Report::where('save_id', Auth::user()->id)->get();
        foreach($tots as $total){
            $total_sales += $total->sub_total;
        }
        $total_sold = Report::where('save_id', Auth::user()->id)->count();
        // view user
    	$user = User::find($id);
        $user_past_trans = Report::where('save_id', $id)->paginate(10);
        $user_today_trans = Report::where('save_id', $id)
                              ->where('save_date', Carbon::now()->format("m-d-Y"))->paginate(10);
        $user_today_sales = Report::where('save_id', $id)
                              ->where('save_date', Carbon::now()->format("m-d-Y"))
                              ->count();
        $user_total_sales = 0;
        $user_tots = Report::where('save_id', $id)->get();
        foreach($user_tots as $user_total){
            $user_total_sales += $user_total->sub_total;
        }
        $user_total_sold = Report::where('save_id', $id)->count();

        $profile = Profile::where('staffid', $id)->first();
    	if($profile){
    	$profile = Profile::where('staffid', $id)->first();
    	}
    	else{
    	$pro = new Profile;
    	$pro->staffid = Auth::user()->id;
    	$pro->address = "";
    	$pro->email = "";
    	$pro->religion = "";
    	$pro->mobileno = "";
    	$pro->interests = "";
    	$pro->occupation = "";
    	$pro->about = "";
    	$pro->site = "";
    	$pro->image = "";
    	$pro->save();
    	}

    	return view('staff.profile',compact('profile', 'user', 'today_sales','total_sales', 'total_sold', 'today_trans', 'past_trans','user_today_sales','user_total_sales', 'user_total_sold', 'user_today_trans', 'user_past_trans'));
    }
    public function update_profile(Request $request,$id){
    	$this->validate($request,[
    		'address' => 'required',
    		'email' => 'required|email',
    		'religion' => 'required',
    		'mobileno' => 'required',
    		'interests' => 'required',
    		'occupation' => 'required',
    		'site' => 'required'
    	]);
    	$data = array(
    		'address' => $request->input('address'),
    		'email' => $request->input('email'),
    		'religion' => $request->input('religion'),
    		'mobileno' => $request->input('mobileno'),
    		'interests' => $request->input('interests'),
    		'occupation' => $request->input('occupation'),
    		'about' => $request->input('about'),
    		'site' => $request->input('site')
    	);
    	$notification = array(
            'message' => 'Your profile successfully updated!',
            'alert-type' => 'success'
        );
    	Profile::where('staffid', $id)->update($data);
    	return redirect()->back()->with($notification);

    }
}
