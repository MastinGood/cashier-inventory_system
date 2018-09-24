@extends('layouts.template')
@section('content')
@section('header-assets')
<link href="{{asset('../assets/pages/css/invoice-2.min.css')}}" rel="stylesheet" type="text/css" />
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
                                <span>General</span>
                            </li>
                        </ul>
                        
                    </div>
                    <!-- END PAGE HEADER-->
                    <div class="invoice-content-2 ">
                        <div class="row invoice-head">
                            @if(session('info'))
                                      <div class="alert alert-success">
                                        {{ session('info') }}
                                      </div>
                                    @endif
                            <div class="col-md-7 col-xs-6">
                                <div class="invoice-logo">
                                    <img src="{{asset('logo/logo.png')}}" height="100" width="250" class="img-responsive" alt="" /><br>
                                    <h1 class="uppercase">Invoice</h1>
                                </div>
                            </div>
                            <div class="col-md-5 col-xs-6">
                                <div class="company-address">
                                    <span class="bold uppercase">AIM Global Inc.</span>
                                    <br/> Unit 301 AIC Burgundy Empire Tower
                                    <br/> ADB Ave. Ortigas Centre, 1605 Pasig
                                    <br/>
                                    <span class="bold">T</span> 1800 123 456
                                    <br/>
                                    <span class="bold">E</span> support@keenthemes.com
                                    <br/>
                                    <span class="bold">W</span> www.keenthemes.com </div>
                            </div>
                        </div>
                        <div class="row invoice-cust-add">
                            <div class="col-xs-3">
                                <h2 class="invoice-title uppercase">Company</h2>
                                <p class="invoice-desc">AIM Global Inc.</p>
                            </div>
                            <div class="col-xs-3">
                                <h2 class="invoice-title uppercase">Date</h2>
                                <p class="invoice-desc">{{$date}}</p>
                            </div>
                            <div class="col-xs-6">
                                <h2 class="invoice-title uppercase">Address</h2>
                                <p class="invoice-desc inv-address">Unit 301 AIC Burgundy Empire Tower ADB Ave. Ortigas Centre, 1605 Pasig</p>
                            </div>
                        </div>
                        <div class="row invoice-body">
                            <div class="col-xs-12 table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th class="invoice-title uppercase">Items</th>
                                            <th class="invoice-title uppercase text-center">Quantity</th>
                                            <th class="invoice-title uppercase text-center">Price</th>
                                            <th class="invoice-title uppercase text-center">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(count($totals)>0)
                                        @foreach($totals->all() as $total)
                                        <tr>
                                           <td>
                                              <h3>{{$total->item($total->item_code)->name}}</h3> 
                                           </td>
                                           <td class="text-center sbold">
                                               {{$total->quantity}}
                                           </td>
                                           <td class="text-center sbold">
                                               ${{$total->item($total->item_code)->price}}
                                           </td>
                                           <td class="text-center sbold">
                                               ${{$total->sub_total}}
                                           </td>
                                        </tr>
                                        @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="row invoice-subtotal">
                            <div class="col-xs-3">
                                <h2 class="invoice-title uppercase">Subtotal</h2>
                                <p class="invoice-desc">${{$sum}}</p>
                            </div>
                            <div class="col-xs-3">
                                <h2 class="invoice-title uppercase">Tax (0%)</h2>
                                <p class="invoice-desc">$0</p>
                            </div>
                            <div class="col-xs-6">
                                <h2 class="invoice-title uppercase">Total</h2>
                                <p class="invoice-desc grand-total">${{$sum}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <a class="btn btn-lg green-haze hidden-print uppercase print-btn" onclick="javascript:window.print();">Print</a>
                                <a class="btn btn-lg green-haze hidden-print uppercase print-btn" style="margin-right:10px; " href="{{route('staff_save_report')}}">Save Report</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
@endsection