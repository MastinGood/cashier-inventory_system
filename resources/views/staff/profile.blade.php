@extends('layouts.profile')

@section('content')
@section('header-assets')
  <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">
  <link href="{{asset('../assets/global/plugins/ladda/ladda-themeless.min.css')}}" rel="stylesheet" type="text/css" />
 @endsection
<div class="profile">
	<div class="tabbable-line tabbable-full-width">
	    <ul class="nav nav-tabs">
	        <li class="active">
	           @if(Auth::user()->id == $user->id)
	            <a href="#tab_1_1" data-toggle="tab"> Overview </a>
	        </li>
	                                
			<li>
				<a href="#tab_1_3" data-toggle="tab"> Account </a>
			</li>
			    @else
			<li class="active">
					<a href="#tab_1_1" data-toggle="tab"> Overview </a>
			 </li>
	            @endif
	    </ul>
			<div class="tab-content">
	                                <div class="tab-pane active" id="tab_1_1">
	                                    <div class="row">
	                                        <div class="col-md-3">
	                                            <ul class="list-unstyled profile-nav">
	                                                <li>
	                                                	@if(isset($user->profiles->image) && $user->profiles->image != null)
	                                                    <img src="{{$user->profiles->image}}" class="img-responsive pic-bordered" alt="" width="100" height="100" />
	                                                    <a href="javascript:;" class="profile-edit"> edit </a>
	                                                    @else
	                                                    <img src="{{asset('assets/img/placeholder.jpg')}}" class="img-responsive">
	                                                    @endif
	                                                </li>
	                                            </ul>
	                                        </div>
	                                        <div class="col-md-9">
	                                            <div class="row">
	                                                <div class="col-md-8 profile-info">
	                                                	@if(Auth::user()->id == $user->id)
	                                                    <h1 class="font-green sbold uppercase">{{Auth::user()->name}} 
	                                                    	@if($user->isOnline())
	                                                    	<small style="font-style: normal; font-size: 10px;position: absolute;margin: 6px 10px;"><i class="fa fa-circle" style="font-size: 10px;color: limegreen;"></i> online</small>
	                                                    	@else
	                                                    	<small style="font-style: normal; font-size: 10px;position: absolute;margin: 6px 10px;"><i class="fa fa-circle" style="font-size: 10px;color: limegreen;"></i> offline</small>
	                                                    	@endif
	                                                    </h1>
	                                                    @else
	                                                    <h1 class="font-green sbold uppercase">{{$user->name}}
	                                                    	@if($user->isOnline())
	                                                    	<small style="font-style: normal; font-size: 10px;position: absolute;margin: 6px 10px;"><i class="fa fa-circle" style="font-size: 10px;color: limegreen;"></i> online</small>
	                                                    	@else
	                                                    	<small style="font-style: normal; font-size: 10px;position: absolute;margin: 6px 10px;">
	                                                    	<i class="fa fa-circle" style="font-size: 10px;"></i> offline
	                                                    	</small>
	                                                    	@endif</h1>
	                                                    @endif
	                                                    <p> 
	                                                    	@if(isset($profile->about) && $profile->about!= null)
	                                                    	{{$profile->about}}
	                                                    	@else
	                                                    	Nothing here yet!!
	                                                    	@endif
	                                                        </p>
	                                                    <p>
	                                                        <a href="javascript:;">@if(isset($profile->site) && $profile->site!= null) {{$profile->site}} @else Not specified @endif</a>
	                                                    </p>
	                                                    <ul class="list-inline">
	                                                        <li>
	                                                            <i class="fa fa-map-marker"></i>@if(isset($profile->address) && $profile->address!= null) {{$profile->address}} @else Not specified @endif</li>
	                                                        <li>
	                                                            <i class="fa fa-inbox"></i> @if(isset($profile->email) && $profile->email!= null) {{$profile->email}} @else Not specified @endif</li>
	                                                        <li>
	                                                            <i class="fa fa-briefcase"></i> @if(isset($profile->occupation) && $profile->occupation!= null) {{$profile->occupation}} @else Not specified @endif </li>
	                                                    </ul>
	                                                </div>
	                                                <!--end col-md-8-->
	                                                <div class="col-md-4">
	                                                    <div class="portlet sale-summary">
	                                                        <div class="portlet-title">
	                                                            <div class="caption font-red sbold"> Sales Summary </div>
	                                                            <div class="tools">
	                                                                <a class="reload" href="javascript:;"> </a>
	                                                            </div>
	                                                        </div>
	                                                        <div class="portlet-body">
	                                                            <ul class="list-unstyled">
	                                                                <li>
	                                                                    <span class="sale-info"> TODAY SOLD
	                                                                        <i class="fa fa-img-up"></i>
	                                                                    </span>
	                                                                    <span class="sale-num">@if(Auth::user()->id == $user->id) {{$today_sales}} @else {{$user_today_sales}} @endif  </span>
	                                                                </li>
	                                                                <li>
	                                                                    <span class="sale-info"> TOTAL SOLD </span>
	                                                                    <span class="sale-num"> @if(Auth::user()->id == $user->id) {{$total_sold}} @else {{$user_total_sold}} @endif  </span>
	                                                                </li>
	                                                                 <li>
	                                                                    <span class="sale-info"> TOTAL SALES
	                                                                        <i class="fa fa-img-down"></i>
	                                                                    </span>
	                                                                    <span class="sale-num"> @if(Auth::user()->id == $user->id) ${{$total_sales}} @else ${{$user_total_sales}} @endif  </span>
	                                                                </li>
	                                                            </ul>
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                                <!--end col-md-4-->
	                                            </div>
	                                            <!--end row-->
	                                            <div class="tabbable-line tabbable-custom-profile">
	                                                <ul class="nav nav-tabs">
	                                                    <li class="active">
	                                                        <a href="#tab_1_11" data-toggle="tab"> Today Sold </a>
	                                                    </li>
	                                                    <li>
	                                                        <a href="#tab_1_22" data-toggle="tab"> Past Transaction </a>
	                                                    </li>
	                                                </ul>
	                                                <div class="tab-content">
	                                                    <div class="tab-pane active" id="tab_1_11">
	                                                        <div class="portlet-body">
	                                                            <table class="table table-striped table-bordered table-advance table-hover">
	                                                                <thead>
	                                                                    <tr class="text-center">
	                                                                        <th class="text-center">
	                                                                            <i class="fa fa-briefcase"></i> Item code </th>
	                                                                        <th class="hidden-xs text-center">
	                                                                            <i class="fa fa-question"></i> Items Name </th>
	                                                                        	<th class="hidden-xs text-center">
	                                                                            <i class="fa fa-question"></i> Quantity </th>
	                                                                        <th class="text-center">
	                                                                            <i class="fa fa-bookmark"></i> Sub Total </th>
	                                                                        
	                                                                    </tr>
	                                                                </thead>
	                                                                <tbody>
	                                                                  @if(Auth::user()->id == $user->id)	
	                                                                  @if(count($today_trans)>0)
	                                                                  @foreach($today_trans as $today_tran)
	                                                                    <tr>
	                                                                       <td class="text-center">{{$today_tran->item_code}}</td>
	                                                                       <td class="hidden-xs text-center"> {{$today_tran->name}} </td>
	                                                                       <td class="hidden-xs text-center"> {{$today_tran->quantity}} </td>
	                                                                       <td class="text-center"> ${{$today_tran->sub_total}}
	                                                                            <span class="label label-success label-sm"> Paid </span>
	                                                                        </td>
	                                                                    </tr>
	                                                                    @endforeach
	                                                                    @endif
	                                                                    @else
																		 @if(count($user_today_trans)>0)
	                                                                  	 @foreach($user_today_trans as $user_today_tran)
	                                                                    <tr>
	                                                                       <td class="text-center">{{$user_today_tran->item_code}}</td>
	                                                                       <td class="hidden-xs text-center"> {{$user_today_tran->name}} </td>
	                                                                       <td class="hidden-xs text-center"> {{$user_today_tran->quantity}} </td>
	                                                                       <td class="text-center"> ${{$user_today_tran->sub_total}}
	                                                                            <span class="label label-success label-sm"> Paid </span>
	                                                                        </td>
	                                                                    </tr>
	                                                                    @endforeach
	                                                                    @endif
	                                                                    @endif
	                                                                </tbody>
	                                                            </table>
	                                                            @if(Auth::user()->id == $user->id)
	                                                            <div class="pull-right">
													                  <p class="pull-right">{{$today_trans->links()}}</p>
													                </div>
													                @else
													                <div class="pull-right">
													                  <p class="pull-right">{{$user_today_trans->links()}}</p>
													                </div>
													                @endif
	                                                        </div>
	                                                    </div>
	                                                    <!--tab-pane-->
	                                                    <div class="tab-pane" id="tab_1_22">
	                                                        <div class="tab-pane active" id="tab_1_1_1">
	                                                            <table class="table table-striped table-bordered table-advance table-hover">
	                                                                <thead>
	                                                                    <tr class="text-center">
	                                                                        <th class="text-center">
	                                                                            <i class="fa fa-briefcase"></i> Item code </th>
	                                                                        <th class="hidden-xs text-center">
	                                                                            <i class="fa fa-question"></i> Items Name </th>
	                                                                            <th class="hidden-xs text-center">
	                                                                            <i class="fa fa-question"></i> Date Purchase </th>
	                                                                        	<th class="hidden-xs text-center">
	                                                                            <i class="fa fa-question"></i> Quantity </th>
	                                                                        <th class="text-center">
	                                                                            <i class="fa fa-bookmark"></i> Sub Total </th>
	                                                                        
	                                                                    </tr>
	                                                                </thead>
	                                                                <tbody>
																	 @if(Auth::user()->id == $user->id)
	                                                                  @if(count($past_trans)>0)
	                                                                  @foreach($past_trans as $past_tran)
	                                                                    <tr>
	                                                                       <td class="text-center">{{$past_tran->item_code}}</td>
	                                                                       <td class="hidden-xs text-center"> {{$past_tran->name}} </td>
	                                                                       <td class="hidden-xs text-center"> {{$past_tran->save_date}} </td>
	                                                                       <td class="hidden-xs text-center"> {{$past_tran->quantity}} </td>
	                                                                       <td class="text-center"> ${{$past_tran->sub_total}}
	                                                                            <span class="label label-success label-sm"> Paid </span>
	                                                                        </td>
	                                                                    </tr>
	                                                                    @endforeach
	                                                                    @endif
																		@else
																		@if(count($user_past_trans)>0)
	                                                                  @foreach($user_past_trans as $user_past_tran)
	                                                                    <tr>
	                                                                       <td class="text-center">{{$user_past_tran->item_code}}</td>
	                                                                       <td class="hidden-xs text-center"> {{$user_past_tran->name}} </td>
	                                                                       <td class="hidden-xs text-center"> {{$user_past_tran->save_date}} </td>
	                                                                       <td class="hidden-xs text-center"> {{$user_past_tran->quantity}} </td>
	                                                                       <td class="text-center"> ${{$user_past_tran->sub_total}}
	                                                                            <span class="label label-success label-sm"> Paid </span>
	                                                                        </td>
	                                                                    </tr>
	                                                                    @endforeach
	                                                                    @endif
																		@endif
	                                                                </tbody>
	                                                               
													                  
													                
	                                                            </table>
	                                                            @if(Auth::user()->id == $user->id)
	                                                               <div class="pull-right">
													                  <p class="pull-right">{{$past_trans->links()}}</p>
													                </div>
													             @else
													             <div class="pull-right">
													                  <p class="pull-right">{{$user_past_trans->links()}}</p>
													                </div>
													             @endif
	                                                        </div>
	                                                    </div>
	                                                    <!--tab-pane-->
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <!--tab_1_2-->
	                                <div class="tab-pane" id="tab_1_3">
	                                    <div class="row profile-account">
	                                        <div class="col-md-3">
	                                            <ul class="ver-inline-menu tabbable margin-bottom-10">
	                                                <li class="active">
	                                                    <a data-toggle="tab" href="#tab_1-1">
	                                                        <i class="fa fa-cog"></i> Personal info </a>
	                                                    <span class="after"> </span>
	                                                </li>
	                                            </ul>
	                                        </div>
	                                        <div class="col-md-9">
	                                            <div class="tab-content">
	                                                <div id="tab_1-1" class="tab-pane active">
	                                                    <form role="form" action="{{route('update_profile', array('id' => Auth::user()->id))}}" method="POST" enctype="multipart/form-data">
	                                                    	{{csrf_field()}}
	                                                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
	                                                            <label class="control-label">Address</label>
	                                                            <input type="text" value="{{isset($profile->address) ? $profile->address : ''}}" placeholder="Cebu City" name="address" class="form-control" /> 
	                                                            @if ($errors->has('address'))
								                                    <span class="help-block">
								                                        <strong>{{ $errors->first('address') }}</strong>
								                                    </span>
								                                @endif
	                                                        </div>
	                                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
	                                                            <label class="control-label">Email</label>
	                                                            <input type="text" value="{{isset($profile->email) ? $profile->email : ''}}" placeholder="Jhon@gmail.com" name="email" class="form-control" /> 
	                                                            @if ($errors->has('email'))
								                                    <span class="help-block">
								                                        <strong>{{ $errors->first('email') }}</strong>
								                                    </span>
								                                @endif
	                                                        </div>
	                                                        <div class="form-group{{ $errors->has('religion') ? ' has-error' : '' }}">
	                                                            <label class="control-label">Religion</label>
	                                                            <input type="text" value="{{isset($profile->religion) ? $profile->religion : ''}}" name="religion" placeholder="Catholic" class="form-control" /> 
	                                                            @if ($errors->has('religion'))
								                                    <span class="help-block">
								                                        <strong>{{ $errors->first('religion') }}</strong>
								                                    </span>
								                                @endif
	                                                        </div>
	                                                        <div class="form-group{{ $errors->has('mobileno') ? ' has-error' : '' }}">
	                                                            <label class="control-label">Mobile Number</label>
	                                                            <input type="text" value="{{isset($profile->mobileno) ? $profile->mobileno : ''}}" name="mobileno" placeholder="+1 646 580 DEMO (6284)" class="form-control" />
	                                                            @if ($errors->has('mobileno'))
								                                    <span class="help-block">
								                                        <strong>{{ $errors->first('mobileno') }}</strong>
								                                    </span>
								                                @endif 
	                                                        </div>
	                                                        <div class="form-group{{ $errors->has('interest') ? ' has-error' : '' }}">
	                                                            <label class="control-label">Interests</label>
	                                                            <input type="text" value="{{isset($profile->interests) ? $profile->interests : ''}}" name="interests" placeholder="Design, Web etc." class="form-control" /> 
	                                                            @if ($errors->has('interest'))
								                                    <span class="help-block">
								                                        <strong>{{ $errors->first('interest') }}</strong>
								                                    </span>
								                                @endif
	                                                        </div>
	                                                        <div class="form-group{{ $errors->has('occupation') ? ' has-error' : '' }}">
	                                                            <label class="control-label">Occupation</label>
	                                                            <input type="text" value="{{isset($profile->occupation) ? $profile->occupation : ''}}" name="occupation" placeholder="Web Developer" class="form-control" />
	                                                            @if ($errors->has('occupation'))
								                                    <span class="help-block">
								                                        <strong>{{ $errors->first('occupation') }}</strong>
								                                    </span>
								                                @endif 
	                                                        </div>
	                                                        <div class="form-group{{ $errors->has('about') ? ' has-error' : '' }}">
	                                                            <label class="control-label">About</label>
	                                                            <textarea name="about" class="form-control" rows="3"></textarea>
	                                                            @if ($errors->has('about'))
								                                    <span class="help-block">
								                                        <strong>{{ $errors->first('about') }}</strong>
								                                    </span>
								                                @endif 
	                                                        </div>
	                                                        <div class="form-group{{ $errors->has('site') ? ' has-error' : '' }}">
	                                                            <label class="control-label">Website Url</label>
	                                                            <input type="text" value="{{isset($profile->site) ? $profile->site : ''}}" name="site" placeholder="http://www.mywebsite.com" class="form-control" />
	                                                            @if ($errors->has('site'))
								                                    <span class="help-block">
								                                        <strong>{{ $errors->first('site') }}</strong>
								                                    </span>
								                                @endif  
	                                                        </div>
	                                                            <div class="fileinput fileinput-new{{ $errors->has('site') ? ' has-error' : '' }}" data-provides="fileinput">
	                                                            	<h5>Profile</h5>
	                                                                <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
	                                                                    <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" /> </div>
	                                                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
	                                                                <div>
	                                                                    <span class="btn default btn-file">
	                                                                        <span class="fileinput-new"> Select image </span>
	                                                                        <span class="fileinput-exists"> Change </span>
	                                                                        <input type="file" value="{{isset($profile->image) ? $profile->image :''}}" name="images"> </span>
	                                                                    <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput"> Remove </a>
	                                                                </div>
	                                                                @if ($errors->has('image'))
								                                    <span class="help-block">
								                                        <strong>{{ $errors->first('image') }}</strong>
								                                    </span>
								                                @endif
	                                                                <br>
	                                                            </div>
	                                                        <div class="margiv-top-10">
	                                                            <button type="submit" data-loading-text="Loading..." class="btn btn-primary mt-ladda-btn ladda-button mt-progress-demo" data-style="expand-left">
				                                                    <span class="ladda-label">Update profile</span>
				                                                </button>
	                                                            <a href="javascript:;" class="btn default"> Cancel </a>
	                                                        </div>
	                                                    </form>
	                                                </div>
	                                            </div>
	                                        </div>
	                                        <!--end col-md-9-->
	                                    </div>
	                                </div>
	        </div>
	</div>
</div>
 @section('footer-assets')
  <script src="{{asset('../assets/global/plugins/ladda/spin.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('../assets/global/plugins/ladda/ladda.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('../assets/pages/scripts/ui-buttons.min.js')}}" type="text/javascript"></script>
  <script type="text/javascript" src="{{asset('js/toastr.min.js')}}"></script>
  <script type="text/javascript">
    @if(Session::has('message'))
    var type = "{{Session::get('alert-type','success')}}";
    switch(type){
      case 'success':
      toastr.success("{{Session::get('message')}}");
      break;
    }
    
   @endif
  </script>
  @endsection
@endsection