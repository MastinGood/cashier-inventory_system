@extends('layouts.template')
@section('content')
@section('header-assets')
<!-- BEGIN PAGE LEVEL PLUGINS -->
       <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="{{asset('../assets/global/css/components.min.css')}}" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{{asset('../assets/global/css/plugins.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('../assets/global/plugins/morris/morris.css')}}" rel="stylesheet" type="text/css" />
       
        <link href="{{asset('../assets/global/plugins/jqvmap/jqvmap/jqvmap.css')}}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
@endsection
<div class="page-content-wrapper">
   <!-- BEGIN CONTENT BODY -->
		<div class="page-content">
        <!-- END THEME PANEL -->
                    <h1 class="page-title"> Employee Dashboard 
                        
                    </h1>
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <i class="icon-home"></i>
                                <a href="index.html">Home</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <span>Dashboard</span>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE HEADER-->
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat2 ">
                                <div class="display">
                                    <div class="number">
                                        <h3 class="font-green-sharp">
                                            <span data-counter="counterup" data-value="{{$tots}}">0</span>
                                            <small class="font-green-sharp">$</small>
                                        </h3>
                                        <small>LIFETIME SALES</small>
                                    </div>
                                    <div class="icon">
                                        <i class="icon-pie-chart"></i>
                                    </div>
                                </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: 76%;" class="progress-bar progress-bar-success green-sharp">
                                            <span class="sr-only">76% progress</span>
                                        </span>
                                    </div>
                                    <div class="status">
                                        <div class="status-title"> progress </div>
                                        <div class="status-number"> 76% </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat2 ">
                                <div class="display">
                                    <div class="number">
                                        <h3 class="font-red-haze">
                                            <span data-counter="counterup" data-value="{{$sold}}">0</span>
                                        </h3>
                                        <small>TOTAL SOLD</small>
                                    </div>
                                    <div class="icon">
                                        <i class="icon-like"></i>
                                    </div>
                                </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: 85%;" class="progress-bar progress-bar-success red-haze">
                                            <span class="sr-only">85% change</span>
                                        </span>
                                    </div>
                                    <div class="status">
                                        <div class="status-title"> change </div>
                                        <div class="status-number"> 85% </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat2 ">
                                <div class="display">
                                    <div class="number">
                                        <h3 class="font-blue-sharp">
                                            <span data-counter="counterup" data-value="{{$salezz}}"></span>
                                            <small class="font-green-sharp">$</small>
                                        </h3>
                                        <small>TODAY'S SALES</small>
                                    </div>
                                    <div class="icon">
                                        <i class="icon-basket"></i>
                                    </div>
                                </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: 45%;" class="progress-bar progress-bar-success blue-sharp">
                                            <span class="sr-only">45% grow</span>
                                        </span>
                                    </div>
                                    <div class="status">
                                        <div class="status-title"> grow </div>
                                        <div class="status-number"> 45% </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="dashboard-stat2 ">
                                <div class="display">
                                    <div class="number">
                                        <h3 class="font-purple-soft">
                                            <span data-counter="counterup" data-value="{{$userz}}"></span>
                                        </h3>
                                        <small>TOTAL EMPLOYEE</small>
                                    </div>
                                    <div class="icon">
                                        <i class="icon-user"></i>
                                    </div>
                                </div>
                                <div class="progress-info">
                                    <div class="progress">
                                        <span style="width: 57%;" class="progress-bar progress-bar-success purple-soft">
                                            <span class="sr-only">56% change</span>
                                        </span>
                                    </div>
                                    <div class="status">
                                        <div class="status-title"> change </div>
                                        <div class="status-number"> 57% </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>           
                    <div class="row">
                        <div class="col-lg-6 col-xs-12 col-sm-12">
                            <div class="portlet light" style="height: 490px!important;">
                                <div class="portlet-title">
                                    <div class="caption caption-md">
                                        <i class="icon-bar-chart font-dark hide"></i>
                                        <span class="caption-subject font-dark bold uppercase">Member Activity</span>
                                        <span class="caption-helper">today's stats...</span>
                                    </div>
                                    <div class="actions">
                                        <div class="btn-group btn-group-devided" data-toggle="buttons">
                                            <label class="btn btn-transparent blue-oleo btn-no-border btn-outline btn-circle btn-sm active">
                                                <input type="radio" name="options" class="toggle" id="option1">Today</label>     
                                        </div>
                                    </div>
                                </div>
                                <div class="tabbable-line">
                                    <ul class="nav nav-tabs">
                                            <li class="active">
                                                <a href="#today" data-toggle="tab"> Today's Activity </a>
                                            </li>
                                            <li>
                                                <a href="#past" data-toggle="tab"> Yesterday </a>
                                            </li>
                                             <li>
                                                <a href="#lastweek" data-toggle="tab"> Last Week </a>
                                            </li>
                                            <li>
                                                <a href="#lastmonth" data-toggle="tab"> Last Month </a>
                                            </li>
 
                                        </ul>
                                        
                                        <div class="portlet-body">
                                            <div class="tab-content">
                                            <div class="tab-pane active" id="today">
                                                <div class="row number-stats margin-bottom-30">
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <div class="stat-left">
                                                            <div class="stat-chart">
                                                                <!-- do not line break "sparkline_bar" div. sparkline chart has an issue when the container div has line break -->
                                                                <div id="sparkline_bar"></div>
                                                            </div>
                                                            <div class="stat-number">
                                                                <div class="title"> Today's Sales </div>
                                                                <div class="number text-center"> ${{$salezz}} </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <div class="stat-right">
                                                            <div class="stat-chart">
                                                                <!-- do not line break "sparkline_bar" div. sparkline chart has an issue when the container div has line break -->
                                                                <div id="sparkline_bar2"></div>
                                                            </div>
                                                            <div class="stat-number">
                                                                <div class="title"> Today's Sold </div>
                                                                <div class="number text-center"> {{$today_sold}} </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="table-scrollable table-scrollable-borderless">
                                                    <table class="table table-hover table-light">
                                                        <thead>
                                                            <tr class="uppercase">
                                                                <th colspan="2" class="text-center"> EMPLOYEE </th>
                                                                <th class="text-center"> Today's Sales </th>
                                                                <th class="text-center"> Today's Sold </th>
                                                                
                                                            </tr>
                                                        </thead>
            											@if(count($rep)>0)
                                                        @foreach($rep as $re)
                                                        <tr>
                                                            <td class="fit">
                                                                <img class="user-pic rounded" src="../assets/pages/media/users/avatar4.jpg"> </td>
                                                            <td>
                                                                <a href="{{route('profile', array('id' => $re->save_id))}}" class="primary-link">
                                                                    {{$re->save_by}}</a>
                                                            </td>
                                                            <td class="text-center"> ${{$re->today_sale}} </td>
                                                            <td class="text-center"> {{$re->today_sold}} </td>
                                                            
                                                        </tr>
                                                        @endforeach
                                                        @endif
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="past">
                                                <div class="row number-stats margin-bottom-30">
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <div class="stat-left">
                                                            <div class="stat-chart">
                                                                <!-- do not line break "sparkline_bar" div. sparkline chart has an issue when the container div has line break -->
                                                                <div id="sparkline_bar"></div>
                                                            </div>
                                                            <div class="stat-number">
                                                                <div class="title"> Yesterday's Sales </div>
                                                                <div class="number text-center"> ${{$salezzz}} </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <div class="stat-right">
                                                            <div class="stat-chart">
                                                                <!-- do not line break "sparkline_bar" div. sparkline chart has an issue when the container div has line break -->
                                                                <div id="sparkline_bar2" style="z-index: 1;"></div>
                                                            </div>
                                                            <div class="stat-number">
                                                                <div class="title"> Yesterday's Sold </div>
                                                                <div class="number text-center"> {{$yesterday_sold}} </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="table-scrollable table-scrollable-borderless">
                                                    <table class="table table-hover table-light">
                                                        <thead>
                                                            <tr class="uppercase">
                                                                <th colspan="2" class="text-center"> EMPLOYEE </th>
                                                                <th class="text-center"> Yesterday's Sales </th>
                                                                <th class="text-center"> Yesterday's Sold </th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        @if(count($yesterday)>0)
                                                        @foreach($yesterday as $yes)
                                                        <tr>
                                                            <td class="fit">
                                                                <img class="user-pic rounded" src="../assets/pages/media/users/avatar4.jpg"> </td>
                                                            <td>
                                                                <a href="{{route('profile', array('id' => $yes->save_id))}}" class="primary-link">
                                                                    {{$yes->save_by}}</a>
                                                            </td>
                                                            <td class="text-center"> ${{$yes->yesterday_sale}} </td>
                                                            <td class="text-center"> {{$yes->yesterday_sold}} </td>
                                                            
                                                        </tr>
                                                        @endforeach
                                                        @endif
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="lastweek">
                                                <div class="row number-stats margin-bottom-30">
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <div class="stat-left">
                                                            <div class="stat-chart">
                                                                <!-- do not line break "sparkline_bar" div. sparkline chart has an issue when the container div has line break -->
                                                                <div id="sparkline_bar"></div>
                                                            </div>
                                                            <div class="stat-number">
                                                                <div class="title"> Last Week Sales </div>
                                                                <div class="number text-center"> ${{$lastweeks}} </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <div class="stat-right">
                                                            <div class="stat-chart">
                                                                <!-- do not line break "sparkline_bar" div. sparkline chart has an issue when the container div has line break -->
                                                                <div id="sparkline_bar2" style="z-index: 1;"></div>
                                                            </div>
                                                            <div class="stat-number">
                                                                <div class="title"> Last Week Sold </div>
                                                                <div class="number text-center"> {{$lastweek_sold}} </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="table-scrollable table-scrollable-borderless">
                                                    <table class="table table-hover table-light">
                                                        <thead>
                                                            <tr class="uppercase">
                                                                <th colspan="2" class="text-center"> EMPLOYEE </th>
                                                                <th class="text-center"> Last Week Sales </th>
                                                                <th class="text-center"> Last Week Sold </th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        @if(count($lastweek)>0)
                                                        @foreach($lastweek as $last)
                                                        <tr>
                                                            <td class="fit">
                                                                <img class="user-pic rounded" src="../assets/pages/media/users/avatar4.jpg"> </td>
                                                            <td>
                                                                <a href="{{route('profile', array('id' => $last->save_id))}}" class="primary-link">
                                                                    {{$last->save_by}}</a>
                                                            </td>
                                                            <td class="text-center"> ${{$last->lastweek_sale}} </td>
                                                            <td class="text-center"> {{$last->lastweek_sold}} </td>
                                                            
                                                        </tr>
                                                        @endforeach
                                                        @endif
                                                    </table>
                                                </div>
                                            </div>

                                            <div class="tab-pane" id="lastmonth">
                                                <div class="row number-stats margin-bottom-30">
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <div class="stat-left">
                                                            <div class="stat-chart">
                                                                <!-- do not line break "sparkline_bar" div. sparkline chart has an issue when the container div has line break -->
                                                                <div id="sparkline_bar"></div>
                                                            </div>
                                                            <div class="stat-number">
                                                                <div class="title"> Last Month Sales </div>
                                                                <div class="number text-center"> ${{$lastmonths}} </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <div class="stat-right">
                                                            <div class="stat-chart">
                                                                <!-- do not line break "sparkline_bar" div. sparkline chart has an issue when the container div has line break -->
                                                                <div id="sparkline_bar2" style="z-index: 1;"></div>
                                                            </div>
                                                            <div class="stat-number">
                                                                <div class="title"> Last Month Sold </div>
                                                                <div class="number text-center"> {{$lastmonth_sold}} </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="table-scrollable table-scrollable-borderless">
                                                    <table class="table table-hover table-light">
                                                        <thead>
                                                            <tr class="uppercase">
                                                                <th colspan="2" class="text-center"> EMPLOYEE </th>
                                                                <th class="text-center"> Last Month Sales </th>
                                                                <th class="text-center"> Last Month Sold </th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        @if(count($lastmonth)>0)
                                                        @foreach($lastmonth as $lastm)
                                                        <tr>
                                                            <td class="fit">
                                                                <img class="user-pic rounded" src="../assets/pages/media/users/avatar4.jpg"> </td>
                                                            <td>
                                                                <a href="{{route('profile', array('id' => $lastm->save_id))}}" class="primary-link">
                                                                    {{$lastm->save_by}}</a>
                                                            </td>
                                                            <td class="text-center"> ${{$lastm->lastmonth_sale}} </td>
                                                            <td class="text-center"> {{$lastm->lastmonth_sold}} </td>
                                                            
                                                        </tr>
                                                        @endforeach
                                                        @endif
                                                    </table>
                                                </div>
                                            </div>

                                            </div>
                                        </div>
                                        
                               </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-xs-12 col-sm-12">
                            <div class="portlet light" style="height: 490px!important;">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-bubble font-dark hide"></i>
                                        <span class="caption-subject font-hide bold uppercase">Recent Users</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <br>
                                    <br>
                                    <div class="mt-element-card mt-element-overlay">
                                    	
                                        <div class="row">
                                            <div class="col-md-12 col-xs-12 col-sm-12">
                                                @if(count($recent_user)>0)
                                                    @foreach($recent_user as $user)
                                                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="mt-card-item">
                                                            <div class="mt-card-avatar mt-overlay-1">
                                                            	
                                                                <img src="{{asset('assets/img/placeholder.jpg')}}" class="img-responsive" />
                                                              
                                                                <div class="mt-overlay">
                                                                    <ul class="mt-info">
                                                                        <li>
                                                                            <a class="btn default btn-outline" href="{{route('profile', array('id' => $user->id))}}">
                                                                            	Visit
                                                                                <i class="icon-magnifier"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="mt-card-content">
                                                                <h3 class="mt-card-name">{{$user->name}}</h3>
                                                                <p class="mt-card-desc font-grey-mint">@if(isset($user->profiles->occupation) && $user->profiles->occupation != null)
                                                                    {{$user->profiles->occupation}}
                                                                    
                                                                    @else
                                                                    Not Specified!
                                                                    @endif 
                                                                    </p>
                                                                <div class="mt-card-social">
                                                                    <ul>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-social-facebook"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-social-twitter"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="javascript:;">
                                                                                <i class="icon-social-dribbble"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach
                                                 @endif
                                            </div>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-md-6">
                            <!-- Begin: life time stats -->
                            <div class="portlet light" style="margin-left: 15px!important;">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="icon-share font-blue"></i>
                                        <span class="caption-subject font-blue bold uppercase">Overview</span>
                                        <span class="caption-helper">report overview...</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="tabbable-line">
                                        <ul class="nav nav-tabs">
                                            <li class="active">
                                                <a href="#overview_1" data-toggle="tab"> Top 5 Selling </a>
                                            </li>
                                            <li>
                                                <a href="#overview_2" data-toggle="tab"> Online Employee </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="overview_1">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-hover table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th> Product Name </th>
                                                                <th> Item Code</th>
                                                                <th> Sold </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @if(count($top_sell)>0)
                                                            @foreach($top_sell as $sell)
                                                            <tr>
                                                                <td>
                                                                    {{$sell->name}}
                                                                </td>
                                                                <td><span class="badge badge-info">{{$sell->item_code}}</span> </td>
                                                                <td> {{$sell->top_selling}} </td>
                                                            </tr>
                                                            @endforeach
                                                            @endif
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="overview_2">
                                                <div class="table-responsive">
                                                    <table class="table table-striped table-hover table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th> Employee</th>
                                                                <th> Status </th>
                                                                    
                                                                </tr>
                                                        </thead>
                                                        <tbody>
                                                            @if(count($online_users)>0)
                                                            @foreach($online_users->all() as $user)
                                                            <tr>
                                                                <td>
                                                                    <p>{{$user->name}}</p>
                                                                </td>
                                                                <td>
                                                                    @if($user->isOnline())

                                                                        <p><i class="fa fa-circle text-success" style="color: limegreen;font-size: 10px;"></i> active now</p>
                                                                    @else
                                                                        <p><i class="fa fa-circle text-muted" style="font-size: 10px;"></i> offline</p>
                                                                    @endif
                                                                </td>
                                                                <td>
                                                                    <a href="{{route('profile', array('id' => $user->id))}}" class="btn btn-sm btn-default">
                                                                        <i class="fa fa-search"></i> View </a>
                                                                </td>
                                                            </tr>
                                                           @endforeach
                                                           @endif
                                                        </tbody>
                                                    </table>
                                                    <div class="pull-right">
                                                        {{$online_users->links()}}
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End: life time stats -->
                        </div>
                        
                    </div>
                    </div>
        </div>
                <!-- END CONTENT BODY -->
</div>
            @section('footer-assets')
            <!-- END PAGE LEVEL PLUGINS -->
            <!-- BEGIN THEME GLOBAL SCRIPTS -->
              <script src="{{asset('../assets/global/plugins/echarts/echarts.js')}}" type="text/javascript"></script>
              <script src="{{asset('../assets/pages/scripts/ecommerce-dashboard.min.js')}}" type="text/javascript"></script>
            <!-- END PAGE LEVEL PLUGINS -->
            <!-- BEGIN THEME GLOBAL SCRIPTS -->
            <script src="{{asset('../assets/global/scripts/app.min.js')}}" type="text/javascript"></script>
            <!-- END THEME GLOBAL SCRIPTS -->
            <!-- BEGIN PAGE LEVEL SCRIPTS -->
            <script src="{{asset('../assets/pages/scripts/charts-echarts.min.js')}}" type="text/javascript"></script>
            <!-- END PAGE LEVEL SCRIPTS -->
            <!-- BEGIN PAGE LEVEL SCRIPTS -->
            <script src="{{asset('../assets/pages/scripts/dashboard.min.js')}}" type="text/javascript"></script>
            <!-- END PAGE LEVEL SCRIPTS -->
            <!-- BEGIN THEME LAYOUT SCRIPTS -->
            @endsection
@endsection