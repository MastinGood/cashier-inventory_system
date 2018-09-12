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
	                                                    <img src="{{$user->profiles->image}}" class="img-responsive pic-bordered" alt="" />
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
	                                                    <h1 class="font-green sbold uppercase">{{Auth::user()->name}}</h1>
	                                                    @else
	                                                    <h1 class="font-green sbold uppercase">{{$user->name}}</h1>
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
	                                                                    <span class="sale-num"> 23 </span>
	                                                                </li>
	                                                                <li>
	                                                                    <span class="sale-info"> WEEKLY SALES
	                                                                        <i class="fa fa-img-down"></i>
	                                                                    </span>
	                                                                    <span class="sale-num"> 87 </span>
	                                                                </li>
	                                                                <li>
	                                                                    <span class="sale-info"> TOTAL SOLD </span>
	                                                                    <span class="sale-num"> 2377 </span>
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
	                                                        <a href="#tab_1_11" data-toggle="tab"> Latest Customers </a>
	                                                    </li>
	                                                    <li>
	                                                        <a href="#tab_1_22" data-toggle="tab"> Feeds </a>
	                                                    </li>
	                                                </ul>
	                                                <div class="tab-content">
	                                                    <div class="tab-pane active" id="tab_1_11">
	                                                        <div class="portlet-body">
	                                                            <table class="table table-striped table-bordered table-advance table-hover">
	                                                                <thead>
	                                                                    <tr>
	                                                                        <th>
	                                                                            <i class="fa fa-briefcase"></i> Company </th>
	                                                                        <th class="hidden-xs">
	                                                                            <i class="fa fa-question"></i> Descrition </th>
	                                                                        <th>
	                                                                            <i class="fa fa-bookmark"></i> Amount </th>
	                                                                        <th> </th>
	                                                                    </tr>
	                                                                </thead>
	                                                                <tbody>
	                                                                    <tr>
	                                                                        <td>
	                                                                            <a href="javascript:;"> Pixel Ltd </a>
	                                                                        </td>
	                                                                        <td class="hidden-xs"> Server hardware purchase </td>
	                                                                        <td> 52560.10$
	                                                                            <span class="label label-success label-sm"> Paid </span>
	                                                                        </td>
	                                                                        <td>
	                                                                            <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> View </a>
	                                                                        </td>
	                                                                    </tr>
	                                                                    <tr>
	                                                                        <td>
	                                                                            <a href="javascript:;"> Smart House </a>
	                                                                        </td>
	                                                                        <td class="hidden-xs"> Office furniture purchase </td>
	                                                                        <td> 5760.00$
	                                                                            <span class="label label-warning label-sm"> Pending </span>
	                                                                        </td>
	                                                                        <td>
	                                                                            <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> View </a>
	                                                                        </td>
	                                                                    </tr>
	                                                                    <tr>
	                                                                        <td>
	                                                                            <a href="javascript:;"> FoodMaster Ltd </a>
	                                                                        </td>
	                                                                        <td class="hidden-xs"> Company Anual Dinner Catering </td>
	                                                                        <td> 12400.00$
	                                                                            <span class="label label-success label-sm"> Paid </span>
	                                                                        </td>
	                                                                        <td>
	                                                                            <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> View </a>
	                                                                        </td>
	                                                                    </tr>
	                                                                    <tr>
	                                                                        <td>
	                                                                            <a href="javascript:;"> WaterPure Ltd </a>
	                                                                        </td>
	                                                                        <td class="hidden-xs"> Payment for Jan 2013 </td>
	                                                                        <td> 610.50$
	                                                                            <span class="label label-danger label-sm"> Overdue </span>
	                                                                        </td>
	                                                                        <td>
	                                                                            <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> View </a>
	                                                                        </td>
	                                                                    </tr>
	                                                                    <tr>
	                                                                        <td>
	                                                                            <a href="javascript:;"> Pixel Ltd </a>
	                                                                        </td>
	                                                                        <td class="hidden-xs"> Server hardware purchase </td>
	                                                                        <td> 52560.10$
	                                                                            <span class="label label-success label-sm"> Paid </span>
	                                                                        </td>
	                                                                        <td>
	                                                                            <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> View </a>
	                                                                        </td>
	                                                                    </tr>
	                                                                    <tr>
	                                                                        <td>
	                                                                            <a href="javascript:;"> Smart House </a>
	                                                                        </td>
	                                                                        <td class="hidden-xs"> Office furniture purchase </td>
	                                                                        <td> 5760.00$
	                                                                            <span class="label label-warning label-sm"> Pending </span>
	                                                                        </td>
	                                                                        <td>
	                                                                            <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> View </a>
	                                                                        </td>
	                                                                    </tr>
	                                                                    <tr>
	                                                                        <td>
	                                                                            <a href="javascript:;"> FoodMaster Ltd </a>
	                                                                        </td>
	                                                                        <td class="hidden-xs"> Company Anual Dinner Catering </td>
	                                                                        <td> 12400.00$
	                                                                            <span class="label label-success label-sm"> Paid </span>
	                                                                        </td>
	                                                                        <td>
	                                                                            <a class="btn btn-sm grey-salsa btn-outline" href="javascript:;"> View </a>
	                                                                        </td>
	                                                                    </tr>
	                                                                </tbody>
	                                                            </table>
	                                                        </div>
	                                                    </div>
	                                                    <!--tab-pane-->
	                                                    <div class="tab-pane" id="tab_1_22">
	                                                        <div class="tab-pane active" id="tab_1_1_1">
	                                                            <div class="scroller" data-height="290px" data-always-visible="1" data-rail-visible1="1">
	                                                                <ul class="feeds">
	                                                                    <li>
	                                                                        <div class="col1">
	                                                                            <div class="cont">
	                                                                                <div class="cont-col1">
	                                                                                    <div class="label label-success">
	                                                                                        <i class="fa fa-bell-o"></i>
	                                                                                    </div>
	                                                                                </div>
	                                                                                <div class="cont-col2">
	                                                                                    <div class="desc"> You have 4 pending tasks.
	                                                                                        <span class="label label-danger label-sm"> Take action
	                                                                                            <i class="fa fa-share"></i>
	                                                                                        </span>
	                                                                                    </div>
	                                                                                </div>
	                                                                            </div>
	                                                                        </div>
	                                                                        <div class="col2">
	                                                                            <div class="date"> Just now </div>
	                                                                        </div>
	                                                                    </li>
	                                                                    <li>
	                                                                        <a href="javascript:;">
	                                                                            <div class="col1">
	                                                                                <div class="cont">
	                                                                                    <div class="cont-col1">
	                                                                                        <div class="label label-success">
	                                                                                            <i class="fa fa-bell-o"></i>
	                                                                                        </div>
	                                                                                    </div>
	                                                                                    <div class="cont-col2">
	                                                                                        <div class="desc"> New version v1.4 just lunched! </div>
	                                                                                    </div>
	                                                                                </div>
	                                                                            </div>
	                                                                            <div class="col2">
	                                                                                <div class="date"> 20 mins </div>
	                                                                            </div>
	                                                                        </a>
	                                                                    </li>
	                                                                    <li>
	                                                                        <div class="col1">
	                                                                            <div class="cont">
	                                                                                <div class="cont-col1">
	                                                                                    <div class="label label-danger">
	                                                                                        <i class="fa fa-bolt"></i>
	                                                                                    </div>
	                                                                                </div>
	                                                                                <div class="cont-col2">
	                                                                                    <div class="desc"> Database server #12 overloaded. Please fix the issue. </div>
	                                                                                </div>
	                                                                            </div>
	                                                                        </div>
	                                                                        <div class="col2">
	                                                                            <div class="date"> 24 mins </div>
	                                                                        </div>
	                                                                    </li>
	                                                                    <li>
	                                                                        <div class="col1">
	                                                                            <div class="cont">
	                                                                                <div class="cont-col1">
	                                                                                    <div class="label label-info">
	                                                                                        <i class="fa fa-bullhorn"></i>
	                                                                                    </div>
	                                                                                </div>
	                                                                                <div class="cont-col2">
	                                                                                    <div class="desc"> New order received. Please take care of it. </div>
	                                                                                </div>
	                                                                            </div>
	                                                                        </div>
	                                                                        <div class="col2">
	                                                                            <div class="date"> 30 mins </div>
	                                                                        </div>
	                                                                    </li>
	                                                                    <li>
	                                                                        <div class="col1">
	                                                                            <div class="cont">
	                                                                                <div class="cont-col1">
	                                                                                    <div class="label label-success">
	                                                                                        <i class="fa fa-bullhorn"></i>
	                                                                                    </div>
	                                                                                </div>
	                                                                                <div class="cont-col2">
	                                                                                    <div class="desc"> New order received. Please take care of it. </div>
	                                                                                </div>
	                                                                            </div>
	                                                                        </div>
	                                                                        <div class="col2">
	                                                                            <div class="date"> 40 mins </div>
	                                                                        </div>
	                                                                    </li>
	                                                                    <li>
	                                                                        <div class="col1">
	                                                                            <div class="cont">
	                                                                                <div class="cont-col1">
	                                                                                    <div class="label label-warning">
	                                                                                        <i class="fa fa-plus"></i>
	                                                                                    </div>
	                                                                                </div>
	                                                                                <div class="cont-col2">
	                                                                                    <div class="desc"> New user registered. </div>
	                                                                                </div>
	                                                                            </div>
	                                                                        </div>
	                                                                        <div class="col2">
	                                                                            <div class="date"> 1.5 hours </div>
	                                                                        </div>
	                                                                    </li>
	                                                                    <li>
	                                                                        <div class="col1">
	                                                                            <div class="cont">
	                                                                                <div class="cont-col1">
	                                                                                    <div class="label label-success">
	                                                                                        <i class="fa fa-bell-o"></i>
	                                                                                    </div>
	                                                                                </div>
	                                                                                <div class="cont-col2">
	                                                                                    <div class="desc"> Web server hardware needs to be upgraded.
	                                                                                        <span class="label label-inverse label-sm"> Overdue </span>
	                                                                                    </div>
	                                                                                </div>
	                                                                            </div>
	                                                                        </div>
	                                                                        <div class="col2">
	                                                                            <div class="date"> 2 hours </div>
	                                                                        </div>
	                                                                    </li>
	                                                                    <li>
	                                                                        <div class="col1">
	                                                                            <div class="cont">
	                                                                                <div class="cont-col1">
	                                                                                    <div class="label label-default">
	                                                                                        <i class="fa fa-bullhorn"></i>
	                                                                                    </div>
	                                                                                </div>
	                                                                                <div class="cont-col2">
	                                                                                    <div class="desc"> New order received. Please take care of it. </div>
	                                                                                </div>
	                                                                            </div>
	                                                                        </div>
	                                                                        <div class="col2">
	                                                                            <div class="date"> 3 hours </div>
	                                                                        </div>
	                                                                    </li>
	                                                                    <li>
	                                                                        <div class="col1">
	                                                                            <div class="cont">
	                                                                                <div class="cont-col1">
	                                                                                    <div class="label label-warning">
	                                                                                        <i class="fa fa-bullhorn"></i>
	                                                                                    </div>
	                                                                                </div>
	                                                                                <div class="cont-col2">
	                                                                                    <div class="desc"> New order received. Please take care of it. </div>
	                                                                                </div>
	                                                                            </div>
	                                                                        </div>
	                                                                        <div class="col2">
	                                                                            <div class="date"> 5 hours </div>
	                                                                        </div>
	                                                                    </li>
	                                                                    <li>
	                                                                        <div class="col1">
	                                                                            <div class="cont">
	                                                                                <div class="cont-col1">
	                                                                                    <div class="label label-info">
	                                                                                        <i class="fa fa-bullhorn"></i>
	                                                                                    </div>
	                                                                                </div>
	                                                                                <div class="cont-col2">
	                                                                                    <div class="desc"> New order received. Please take care of it. </div>
	                                                                                </div>
	                                                                            </div>
	                                                                        </div>
	                                                                        <div class="col2">
	                                                                            <div class="date"> 18 hours </div>
	                                                                        </div>
	                                                                    </li>
	                                                                    <li>
	                                                                        <div class="col1">
	                                                                            <div class="cont">
	                                                                                <div class="cont-col1">
	                                                                                    <div class="label label-default">
	                                                                                        <i class="fa fa-bullhorn"></i>
	                                                                                    </div>
	                                                                                </div>
	                                                                                <div class="cont-col2">
	                                                                                    <div class="desc"> New order received. Please take care of it. </div>
	                                                                                </div>
	                                                                            </div>
	                                                                        </div>
	                                                                        <div class="col2">
	                                                                            <div class="date"> 21 hours </div>
	                                                                        </div>
	                                                                    </li>
	                                                                    <li>
	                                                                        <div class="col1">
	                                                                            <div class="cont">
	                                                                                <div class="cont-col1">
	                                                                                    <div class="label label-info">
	                                                                                        <i class="fa fa-bullhorn"></i>
	                                                                                    </div>
	                                                                                </div>
	                                                                                <div class="cont-col2">
	                                                                                    <div class="desc"> New order received. Please take care of it. </div>
	                                                                                </div>
	                                                                            </div>
	                                                                        </div>
	                                                                        <div class="col2">
	                                                                            <div class="date"> 22 hours </div>
	                                                                        </div>
	                                                                    </li>
	                                                                    <li>
	                                                                        <div class="col1">
	                                                                            <div class="cont">
	                                                                                <div class="cont-col1">
	                                                                                    <div class="label label-default">
	                                                                                        <i class="fa fa-bullhorn"></i>
	                                                                                    </div>
	                                                                                </div>
	                                                                                <div class="cont-col2">
	                                                                                    <div class="desc"> New order received. Please take care of it. </div>
	                                                                                </div>
	                                                                            </div>
	                                                                        </div>
	                                                                        <div class="col2">
	                                                                            <div class="date"> 21 hours </div>
	                                                                        </div>
	                                                                    </li>
	                                                                    <li>
	                                                                        <div class="col1">
	                                                                            <div class="cont">
	                                                                                <div class="cont-col1">
	                                                                                    <div class="label label-info">
	                                                                                        <i class="fa fa-bullhorn"></i>
	                                                                                    </div>
	                                                                                </div>
	                                                                                <div class="cont-col2">
	                                                                                    <div class="desc"> New order received. Please take care of it. </div>
	                                                                                </div>
	                                                                            </div>
	                                                                        </div>
	                                                                        <div class="col2">
	                                                                            <div class="date"> 22 hours </div>
	                                                                        </div>
	                                                                    </li>
	                                                                    <li>
	                                                                        <div class="col1">
	                                                                            <div class="cont">
	                                                                                <div class="cont-col1">
	                                                                                    <div class="label label-default">
	                                                                                        <i class="fa fa-bullhorn"></i>
	                                                                                    </div>
	                                                                                </div>
	                                                                                <div class="cont-col2">
	                                                                                    <div class="desc"> New order received. Please take care of it. </div>
	                                                                                </div>
	                                                                            </div>
	                                                                        </div>
	                                                                        <div class="col2">
	                                                                            <div class="date"> 21 hours </div>
	                                                                        </div>
	                                                                    </li>
	                                                                    <li>
	                                                                        <div class="col1">
	                                                                            <div class="cont">
	                                                                                <div class="cont-col1">
	                                                                                    <div class="label label-info">
	                                                                                        <i class="fa fa-bullhorn"></i>
	                                                                                    </div>
	                                                                                </div>
	                                                                                <div class="cont-col2">
	                                                                                    <div class="desc"> New order received. Please take care of it. </div>
	                                                                                </div>
	                                                                            </div>
	                                                                        </div>
	                                                                        <div class="col2">
	                                                                            <div class="date"> 22 hours </div>
	                                                                        </div>
	                                                                    </li>
	                                                                    <li>
	                                                                        <div class="col1">
	                                                                            <div class="cont">
	                                                                                <div class="cont-col1">
	                                                                                    <div class="label label-default">
	                                                                                        <i class="fa fa-bullhorn"></i>
	                                                                                    </div>
	                                                                                </div>
	                                                                                <div class="cont-col2">
	                                                                                    <div class="desc"> New order received. Please take care of it. </div>
	                                                                                </div>
	                                                                            </div>
	                                                                        </div>
	                                                                        <div class="col2">
	                                                                            <div class="date"> 21 hours </div>
	                                                                        </div>
	                                                                    </li>
	                                                                    <li>
	                                                                        <div class="col1">
	                                                                            <div class="cont">
	                                                                                <div class="cont-col1">
	                                                                                    <div class="label label-info">
	                                                                                        <i class="fa fa-bullhorn"></i>
	                                                                                    </div>
	                                                                                </div>
	                                                                                <div class="cont-col2">
	                                                                                    <div class="desc"> New order received. Please take care of it. </div>
	                                                                                </div>
	                                                                            </div>
	                                                                        </div>
	                                                                        <div class="col2">
	                                                                            <div class="date"> 22 hours </div>
	                                                                        </div>
	                                                                    </li>
	                                                                </ul>
	                                                            </div>
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
	                                                    <form role="form" action="{{route('update_profile', array('id' => Auth::user()->id))}}" method="post">
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
	                                                                        <input type="file" value="{{isset($profile->image) ? $profile->image :''}}" name="image"> </span>
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
				                                                <button type="button" data-loading-text="Loading..." class="btn btn-primary mt-ladda-btn ladda-button mt-progress-demo" data-style="expand-left">
                                                    <span class="ladda-label">Loading State</span>
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