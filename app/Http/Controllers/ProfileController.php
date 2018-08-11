<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use Auth;
use App\User;
class ProfileController extends Controller
{
    public function profile($id){
    	$user = User::find($id);
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

    	return view('staff.profile',compact('profile', 'user'));
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
