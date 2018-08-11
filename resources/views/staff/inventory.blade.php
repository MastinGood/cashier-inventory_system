@extends('layouts.template')
@section('content')
@section('header-assets')
 <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="{{('../assets/global/plugins/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css')}}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="../assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="../assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="../assets/layouts/layout2/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/layouts/layout2/css/themes/blue.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="../assets/layouts/layout2/css/custom.min.css" rel="stylesheet" type="text/css" />
@endsection
<!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                    <!-- BEGIN THEME PANEL -->
                    <div class="theme-panel">
                        <div class="toggler tooltips" data-container="body" data-placement="left" data-html="true" data-original-title="Click to open advance theme customizer panel">
                            <i class="icon-settings"></i>
                        </div>
                        <div class="toggler-close">
                            <i class="icon-close"></i>
                        </div>
                        <div class="theme-options">
                            <div class="theme-option theme-colors clearfix">
                                <span> THEME COLOR </span>
                                <ul>
                                    <li class="color-default current tooltips" data-style="default" data-container="body" data-original-title="Default"> </li>
                                    <li class="color-grey tooltips" data-style="grey" data-container="body" data-original-title="Grey"> </li>
                                    <li class="color-blue tooltips" data-style="blue" data-container="body" data-original-title="Blue"> </li>
                                    <li class="color-dark tooltips" data-style="dark" data-container="body" data-original-title="Dark"> </li>
                                    <li class="color-light tooltips" data-style="light" data-container="body" data-original-title="Light"> </li>
                                </ul>
                            </div>
                            <div class="theme-option">
                                <span> Theme Style </span>
                                <select class="layout-style-option form-control input-small">
                                    <option value="square" selected="selected">Square corners</option>
                                    <option value="rounded">Rounded corners</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Layout </span>
                                <select class="layout-option form-control input-small">
                                    <option value="fluid" selected="selected">Fluid</option>
                                    <option value="boxed">Boxed</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Header </span>
                                <select class="page-header-option form-control input-small">
                                    <option value="fixed" selected="selected">Fixed</option>
                                    <option value="default">Default</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Top Dropdown</span>
                                <select class="page-header-top-dropdown-style-option form-control input-small">
                                    <option value="light" selected="selected">Light</option>
                                    <option value="dark">Dark</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Sidebar Mode</span>
                                <select class="sidebar-option form-control input-small">
                                    <option value="fixed">Fixed</option>
                                    <option value="default" selected="selected">Default</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Sidebar Style</span>
                                <select class="sidebar-style-option form-control input-small">
                                    <option value="default" selected="selected">Default</option>
                                    <option value="compact">Compact</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Sidebar Menu </span>
                                <select class="sidebar-menu-option form-control input-small">
                                    <option value="accordion" selected="selected">Accordion</option>
                                    <option value="hover">Hover</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Sidebar Position </span>
                                <select class="sidebar-pos-option form-control input-small">
                                    <option value="left" selected="selected">Left</option>
                                    <option value="right">Right</option>
                                </select>
                            </div>
                            <div class="theme-option">
                                <span> Footer </span>
                                <select class="page-footer-option form-control input-small">
                                    <option value="fixed">Fixed</option>
                                    <option value="default" selected="selected">Default</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- END THEME PANEL -->
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <i class="icon-home"></i>
                                <a href="index.html">Home</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <span>Inventory</span>
                            </li>
                        </ul>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light ">
                                <div class="portlet-title">
                                    <div class="caption font-dark">
                                        <i class="icon-settings font-dark"></i>
                                        <span class="caption-subject bold uppercase"> Managed Inventory</span>
                                    </div>
                                </div>
                                <div class="modal fade" id="basic" tabindex="-1" role="basic" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                    <h4 class="modal-title">Modal Title</h4>
                                                </div>
                                                <div class="modal-body"> Modal body goes here </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn green">Save changes</button>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                <div class="portlet-body">
                                    <div class="table-toolbar">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="btn-group">
                                                    <a id="sample_editable_1_new" class="btn sbold green" data-toggle="modal" href="#basic"> Add New
                                                        <i class="fa fa-plus"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="btn-group pull-right">
                                                    <button class="btn green  btn-outline dropdown-toggle" data-toggle="dropdown">Print
                                                        <i class="fa fa-print"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                        <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
                                                        <span></span>
                                                    </label>
                                                </th>
                                                <th> Username </th>
                                                <th> Email </th>
                                                <th> Status </th>
                                                <th> Joined </th>
                                                <th> Actions </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd gradeX">
                                                <td>
                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                        <input type="checkbox" class="checkboxes" value="1" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td> shuxer </td>
                                                <td>
                                                    <a href="mailto:shuxer@gmail.com"> shuxer@gmail.com </a>
                                                </td>
                                                <td>
                                                    <span class="label label-sm label-success"> Approved </span>
                                                </td>
                                                <td class="center"> 12 Jan 2012 </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu pull-left" role="menu">
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-docs"></i> New Post </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-tag"></i> New Comment </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-user"></i> New User </a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-flag"></i> Comments
                                                                    <span class="badge badge-success">4</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>
                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                        <input type="checkbox" class="checkboxes" value="1" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td> looper </td>
                                                <td>
                                                    <a href="mailto:looper90@gmail.com"> looper90@gmail.com </a>
                                                </td>
                                                <td>
                                                    <span class="label label-sm label-warning"> Suspended </span>
                                                </td>
                                                <td class="center"> 12.12.2011 </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-docs"></i> New Post </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-tag"></i> New Comment </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-user"></i> New User </a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-flag"></i> Comments
                                                                    <span class="badge badge-success">4</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>
                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                        <input type="checkbox" class="checkboxes" value="1" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td> userwow </td>
                                                <td>
                                                    <a href="mailto:userwow@yahoo.com"> userwow@yahoo.com </a>
                                                </td>
                                                <td>
                                                    <span class="label label-sm label-success"> Approved </span>
                                                </td>
                                                <td class="center"> 12.12.2011 </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-docs"></i> New Post </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-tag"></i> New Comment </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-user"></i> New User </a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-flag"></i> Comments
                                                                    <span class="badge badge-success">4</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>
                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                        <input type="checkbox" class="checkboxes" value="1" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td> user1wow </td>
                                                <td>
                                                    <a href="mailto:userwow@gmail.com"> userwow@gmail.com </a>
                                                </td>
                                                <td>
                                                    <span class="label label-sm label-danger"> Blocked </span>
                                                </td>
                                                <td class="center"> 12.12.2011 </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-docs"></i> New Post </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-tag"></i> New Comment </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-user"></i> New User </a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-flag"></i> Comments
                                                                    <span class="badge badge-success">4</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>
                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                        <input type="checkbox" class="checkboxes" value="1" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td> restest </td>
                                                <td>
                                                    <a href="mailto:userwow@gmail.com"> test@gmail.com </a>
                                                </td>
                                                <td>
                                                    <span class="label label-sm label-success"> Approved </span>
                                                </td>
                                                <td class="center"> 12.12.2011 </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-docs"></i> New Post </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-tag"></i> New Comment </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-user"></i> New User </a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-flag"></i> Comments
                                                                    <span class="badge badge-success">4</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>
                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                        <input type="checkbox" class="checkboxes" value="1" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td> foopl </td>
                                                <td>
                                                    <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                </td>
                                                <td>
                                                    <span class="label label-sm label-info"> Info </span>
                                                </td>
                                                <td class="center"> 12.12.2011 </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-docs"></i> New Post </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-tag"></i> New Comment </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-user"></i> New User </a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-flag"></i> Comments
                                                                    <span class="badge badge-success">4</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>
                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                        <input type="checkbox" class="checkboxes" value="1" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td> weep </td>
                                                <td>
                                                    <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                </td>
                                                <td>
                                                    <span class="label label-sm label-danger"> Rejected </span>
                                                </td>
                                                <td class="center"> 12.12.2011 </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-docs"></i> New Post </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-tag"></i> New Comment </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-user"></i> New User </a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-flag"></i> Comments
                                                                    <span class="badge badge-success">4</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>
                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                        <input type="checkbox" class="checkboxes" value="1" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td> coop </td>
                                                <td>
                                                    <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                </td>
                                                <td>
                                                    <span class="label label-sm label-info"> Info </span>
                                                </td>
                                                <td class="center"> 12.12.2011 </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-docs"></i> New Post </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-tag"></i> New Comment </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-user"></i> New User </a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-flag"></i> Comments
                                                                    <span class="badge badge-success">4</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>
                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                        <input type="checkbox" class="checkboxes" value="1" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td> pppol </td>
                                                <td>
                                                    <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                </td>
                                                <td>
                                                    <span class="label label-sm label-danger"> Suspended </span>
                                                </td>
                                                <td class="center"> 12.12.2011 </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-docs"></i> New Post </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-tag"></i> New Comment </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-user"></i> New User </a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-flag"></i> Comments
                                                                    <span class="badge badge-success">4</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>
                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                        <input type="checkbox" class="checkboxes" value="1" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td> test </td>
                                                <td>
                                                    <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                </td>
                                                <td>
                                                    <span class="label label-sm label-warning"> Suspended </span>
                                                </td>
                                                <td class="center"> 12.12.2011 </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-docs"></i> New Post </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-tag"></i> New Comment </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-user"></i> New User </a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-flag"></i> Comments
                                                                    <span class="badge badge-success">4</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>
                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                        <input type="checkbox" class="checkboxes" value="1" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td> userwow </td>
                                                <td>
                                                    <a href="mailto:userwow@gmail.com"> userwow@gmail.com </a>
                                                </td>
                                                <td>
                                                    <span class="label label-sm label-warning"> Suspended </span>
                                                </td>
                                                <td class="center"> 12.12.2011 </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-docs"></i> New Post </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-tag"></i> New Comment </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-user"></i> New User </a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-flag"></i> Comments
                                                                    <span class="badge badge-success">4</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>
                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                        <input type="checkbox" class="checkboxes" value="1" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td> test </td>
                                                <td>
                                                    <a href="mailto:userwow@gmail.com"> test@gmail.com </a>
                                                </td>
                                                <td>
                                                    <span class="label label-sm label-warning"> Suspended </span>
                                                </td>
                                                <td class="center"> 12.12.2011 </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-docs"></i> New Post </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-tag"></i> New Comment </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-user"></i> New User </a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-flag"></i> Comments
                                                                    <span class="badge badge-success">4</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>
                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                        <input type="checkbox" class="checkboxes" value="1" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td> goop </td>
                                                <td>
                                                    <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                </td>
                                                <td>
                                                    <span class="label label-sm label-warning"> Suspended </span>
                                                </td>
                                                <td class="center"> 12.12.2011 </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-docs"></i> New Post </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-tag"></i> New Comment </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-user"></i> New User </a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-flag"></i> Comments
                                                                    <span class="badge badge-success">4</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>
                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                        <input type="checkbox" class="checkboxes" value="1" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td> weep </td>
                                                <td>
                                                    <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                </td>
                                                <td>
                                                    <span class="label label-sm label-warning"> Suspended </span>
                                                </td>
                                                <td class="center"> 12.12.2011 </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-docs"></i> New Post </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-tag"></i> New Comment </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-user"></i> New User </a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-flag"></i> Comments
                                                                    <span class="badge badge-success">4</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>
                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                        <input type="checkbox" class="checkboxes" value="1" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td> toopl </td>
                                                <td>
                                                    <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                </td>
                                                <td>
                                                    <span class="label label-sm label-warning"> Suspended </span>
                                                </td>
                                                <td class="center"> 12.12.2011 </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-docs"></i> New Post </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-tag"></i> New Comment </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-user"></i> New User </a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-flag"></i> Comments
                                                                    <span class="badge badge-success">4</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>
                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                        <input type="checkbox" class="checkboxes" value="1" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td> userwow </td>
                                                <td>
                                                    <a href="mailto:userwow@gmail.com"> userwow@gmail.com </a>
                                                </td>
                                                <td>
                                                    <span class="label label-sm label-warning"> Suspended </span>
                                                </td>
                                                <td class="center"> 12.12.2011 </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-docs"></i> New Post </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-tag"></i> New Comment </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-user"></i> New User </a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-flag"></i> Comments
                                                                    <span class="badge badge-success">4</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>
                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                        <input type="checkbox" class="checkboxes" value="1" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td> tes21t </td>
                                                <td>
                                                    <a href="mailto:userwow@gmail.com"> test@gmail.com </a>
                                                </td>
                                                <td>
                                                    <span class="label label-sm label-warning"> Suspended </span>
                                                </td>
                                                <td class="center"> 12.12.2011 </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-docs"></i> New Post </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-tag"></i> New Comment </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-user"></i> New User </a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-flag"></i> Comments
                                                                    <span class="badge badge-success">4</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>
                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                        <input type="checkbox" class="checkboxes" value="1" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td> fop </td>
                                                <td>
                                                    <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                </td>
                                                <td>
                                                    <span class="label label-sm label-warning"> Suspended </span>
                                                </td>
                                                <td class="center"> 12.12.2011 </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-docs"></i> New Post </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-tag"></i> New Comment </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-user"></i> New User </a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-flag"></i> Comments
                                                                    <span class="badge badge-success">4</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>
                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                        <input type="checkbox" class="checkboxes" value="1" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td> kop </td>
                                                <td>
                                                    <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                </td>
                                                <td>
                                                    <span class="label label-sm label-warning"> Suspended </span>
                                                </td>
                                                <td class="center"> 12.12.2011 </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-docs"></i> New Post </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-tag"></i> New Comment </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-user"></i> New User </a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-flag"></i> Comments
                                                                    <span class="badge badge-success">4</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>
                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                        <input type="checkbox" class="checkboxes" value="1" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td> vopl </td>
                                                <td>
                                                    <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                </td>
                                                <td>
                                                    <span class="label label-sm label-warning"> Suspended </span>
                                                </td>
                                                <td class="center"> 12.12.2011 </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-docs"></i> New Post </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-tag"></i> New Comment </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-user"></i> New User </a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-flag"></i> Comments
                                                                    <span class="badge badge-success">4</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>
                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                        <input type="checkbox" class="checkboxes" value="1" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td> userwow </td>
                                                <td>
                                                    <a href="mailto:userwow@gmail.com"> userwow@gmail.com </a>
                                                </td>
                                                <td>
                                                    <span class="label label-sm label-warning"> Suspended </span>
                                                </td>
                                                <td class="center"> 12.12.2011 </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-docs"></i> New Post </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-tag"></i> New Comment </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-user"></i> New User </a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-flag"></i> Comments
                                                                    <span class="badge badge-success">4</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>
                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                        <input type="checkbox" class="checkboxes" value="1" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td> wap </td>
                                                <td>
                                                    <a href="mailto:userwow@gmail.com"> test@gmail.com </a>
                                                </td>
                                                <td>
                                                    <span class="label label-sm label-warning"> Suspended </span>
                                                </td>
                                                <td class="center"> 12.12.2011 </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-docs"></i> New Post </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-tag"></i> New Comment </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-user"></i> New User </a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-flag"></i> Comments
                                                                    <span class="badge badge-success">4</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>
                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                        <input type="checkbox" class="checkboxes" value="1" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td> test </td>
                                                <td>
                                                    <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                </td>
                                                <td>
                                                    <span class="label label-sm label-warning"> Suspended </span>
                                                </td>
                                                <td class="center"> 12.12.2011 </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-docs"></i> New Post </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-tag"></i> New Comment </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-user"></i> New User </a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-flag"></i> Comments
                                                                    <span class="badge badge-success">4</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>
                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                        <input type="checkbox" class="checkboxes" value="1" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td> toop </td>
                                                <td>
                                                    <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                </td>
                                                <td>
                                                    <span class="label label-sm label-warning"> Suspended </span>
                                                </td>
                                                <td class="center"> 12.12.2011 </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-docs"></i> New Post </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-tag"></i> New Comment </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-user"></i> New User </a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-flag"></i> Comments
                                                                    <span class="badge badge-success">4</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="odd gradeX">
                                                <td>
                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                        <input type="checkbox" class="checkboxes" value="1" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td> weep </td>
                                                <td>
                                                    <a href="mailto:userwow@gmail.com"> good@gmail.com </a>
                                                </td>
                                                <td>
                                                    <span class="label label-sm label-warning"> Suspended </span>
                                                </td>
                                                <td class="center"> 12.12.2011 </td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                            <i class="fa fa-angle-down"></i>
                                                        </button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-docs"></i> New Post </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-tag"></i> New Comment </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-user"></i> New User </a>
                                                            </li>
                                                            <li class="divider"> </li>
                                                            <li>
                                                                <a href="javascript:;">
                                                                    <i class="icon-flag"></i> Comments
                                                                    <span class="badge badge-success">4</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                    </div>
                    <!-- END PAGE HEADER-->
                    
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
            @section('footer-assets')
            <!-- BEGIN CORE PLUGINS -->
            <!-- END CORE PLUGINS -->
            <!-- BEGIN PAGE LEVEL PLUGINS -->
            <script src="{{asset('../assets/global/scripts/datatable.js')}}" type="text/javascript"></script>
            <script src="{{asset('../assets/global/plugins/datatables/datatables.min.js')}}" type="text/javascript"></script>
            <script src="{{('../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js')}}" type="text/javascript"></script>
            <!-- END PAGE LEVEL PLUGINS -->
            <!-- BEGIN THEME GLOBAL SCRIPTS -->
            @endsection
@endsection