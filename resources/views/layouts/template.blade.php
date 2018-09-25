<!DOCTYPE html>
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Cashier & Inventory System</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #2 for statistics, charts, recent events and reports" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="{{asset('../assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('../assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('../assets/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('../assets/global/plugins/ladda/ladda-themeless.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="{{asset('../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css')}}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="{{asset('../assets/global/css/components.min.css')}}" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{{asset('../assets/global/css/plugins.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="{{asset('../assets/pages/css/profile-2.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="{{asset('../assets/layouts/layout2/css/layout.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('../assets/layouts/layout2/css/themes/blue.min.css')}}" rel="stylesheet" type="text/css" id="style_color" />
        <link href="{{asset('../assets/layouts/layout2/css/custom.min.css')}}" rel="stylesheet" type="text/css" />
        @yield('header-assets')
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid">
        <!-- BEGIN HEADER -->
        <div class="page-header navbar navbar-fixed-top">
            <!-- BEGIN HEADER INNER -->
            <div class="page-header-inner ">
                <!-- BEGIN LOGO -->
                <div class="page-logo">
                    <a href="index.html">
                        <img src="{{asset('logo/b1.png')}}" width="120" height="70" class="logo-default" style="margin: -3px 0px;" /> </a>
                    <div class="menu-toggler sidebar-toggler">
                        <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
                    </div>
                </div>
                <!-- END LOGO -->
                <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
                <!-- END RESPONSIVE MENU TOGGLER -->
                <!-- BEGIN PAGE TOP -->
               <div class="page-top">
                    <!-- BEGIN HEADER SEARCH BOX -->
                    <!-- DOC: Apply "search-form-expanded" right after the "search-form" class to have half expanded search box -->
                    <form class="search-form search-form-expanded" action="{{route('staff.search')}}" method="GET">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control" placeholder="Search staff...">
                            <span class="input-group-btn">
                                <button href="" class="btn submit">
                                    <i class="icon-magnifier"></i>

                                </button>
                            </span>
                        </div>
                    </form>
                    <!-- END HEADER SEARCH BOX -->
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                            <!-- BEGIN TODO DROPDOWN -->
                            <!-- BEGIN USER LOGIN DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <li class="dropdown dropdown-user">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <img alt="" class="img-circle" src="{{asset('assets/img/placeholder.jpg')}}" />
                                    <span class="username username-hide-on-mobile"> {{Auth::user()->name}} </span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li>
                                        <a href="{{route('profile', array('id' => Auth::user()->id))}}">
                                            <i class="icon-user"></i> My Account </a>
                                    </li>
                                    <li>
                                        <a href="app_todo_2.html">
                                            <i class="icon-rocket"></i> Past Transactions
                                            <span class="badge badge-success"> 7 </span>
                                        </a>
                                    </li>
                                    <li class="divider"> </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     <i class="icon-key"></i>
                                        {{ __('Logout') }}
                                        </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
                <!-- END PAGE TOP -->
            </div>
            <!-- END HEADER INNER -->
        </div>
        <!-- END HEADER -->
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- END SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                        <li class="nav-item start active open">
                            <a href="{{route('dashboard')}}" class="nav-link nav-toggle">
                                <i class="icon-diamond"></i>
                                <span class="title">Dashboard</span>
                                <span class="selected"></span>
                                <span class="arrow open"></span>
                            </a>
                        </li>
                        <li class="nav-item start active open">
                            <a href="{{route('staff.inventory')}}" class="nav-link nav-toggle">
                                <i class="icon-home"></i>
                                <span class="title">Inventory</span>
                                <span class="selected"></span>
                                <span class="arrow open"></span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="{{route('staff.items')}}" class="nav-link nav-toggle">
                                <i class="icon-handbag"></i>
                                <span class="title">Items</span>
                                <span class="arrow"></span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="{{route('staff.orders')}}" class="nav-link nav-toggle">
                                <i class="icon-basket-loaded"></i>
                                <span class="title">Orders</span>
                                <span class="arrow"></span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="{{route('staff.totals')}}" class="nav-link nav-toggle">
                                <i class="icon-calculator"></i>
                                <span class="title">Totals</span>
                                <span class="arrow"></span>
                            </a>
                        </li>
                        <li class="nav-item  ">
                            <a href="{{route('staff.reports')}}" class="nav-link nav-toggle">
                                <i class="icon-docs"></i>
                                <span class="title">Reports</span>
                                <span class="arrow"></span>
                            </a>
                        </li>
                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->
           @yield('content')
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <div class="page-footer">
            <div class="page-footer-inner"> 2016 &copy; Metronic Theme By
                <a target="_blank" href="http://keenthemes.com">Keenthemes</a> &nbsp;|&nbsp;
                <a href="http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" title="Purchase Metronic just for 27$ and get lifetime updates for free" target="_blank">Purchase Metronic!</a>
                <div class="scroll-to-top">
                    <i class="icon-arrow-up"></i>
                </div>
            </div>
            <!-- END FOOTER -->
            
            <!-- BEGIN CORE PLUGINS -->
            <script src="{{asset('../assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('../assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('../assets/global/plugins/js.cookie.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('../assets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
            <!-- END CORE PLUGINS -->
            <!-- BEGIN PAGE LEVEL PLUGINS -->           
             
            <script src="{{asset('../assets/global/plugins/morris/morris.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('../assets/global/plugins/morris/raphael-min.js')}}" type="text/javascript"></script>
            <script src="{{asset('../assets/global/plugins/counterup/jquery.waypoints.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('../assets/global/plugins/counterup/jquery.counterup.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('../assets/global/plugins/horizontal-timeline/horizontal-timeline.js')}}" type="text/javascript"></script>
            <script src="{{asset('../assets/global/plugins/flot/jquery.flot.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('../assets/global/plugins/flot/jquery.flot.resize.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('../assets/global/plugins/flot/jquery.flot.categories.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('../assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('../assets/global/plugins/jquery.sparkline.min.js')}}" type="text/javascript"></script>
            
            <!-- END PAGE LEVEL PLUGINS -->
            <!-- BEGIN THEME GLOBAL SCRIPTS -->
            <script src="{{asset('../assets/global/plugins/ladda/spin.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('../assets/global/plugins/ladda/ladda.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('../assets/global/scripts/app.min.js')}}" type="text/javascript"></script>
            <!-- END THEME GLOBAL SCRIPTS -->
            <!-- BEGIN PAGE LEVEL SCRIPTS -->
            <script src="{{asset('../assets/pages/scripts/dashboard.min.js')}}" type="text/javascript"></script>
            <!-- END PAGE LEVEL SCRIPTS -->
            <!-- BEGIN THEME LAYOUT SCRIPTS -->
            <script src="{{asset('../assets/layouts/layout2/scripts/layout.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('../assets/layouts/layout2/scripts/demo.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('../assets/layouts/global/scripts/quick-sidebar.min.js')}}" type="text/javascript"></script>
            <script src="{{asset('../assets/layouts/global/scripts/quick-nav.min.js')}}" type="text/javascript"></script>
            @yield('footer-assets')
            <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>