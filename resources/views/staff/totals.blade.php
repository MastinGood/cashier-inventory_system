@extends('layouts.template')
@section('content')
@section('header-assets')
 <link href="{{asset('../assets/global/plugins/bootstrap-sweetalert/sweetalert.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('../assets/pages/css/invoice-2.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
<!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
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
                                @if(count($totals)<=0)
                                 <a class="btn btn-lg green-haze hidden-print uppercase print-btn" disabled="disabled"><i class="fa fa-print"></i> Print</a>
                                 <a class="btn btn-lg green-haze hidden-print uppercase print-btn" style="margin-right:10px; " disabled="disabled"><i class="fa fa-save"></i> Save Report</a>
                                @else
                                 <a class="btn btn-circle green-haze btn-outline hidden-print print-btn sbold uppercase" onclick="javascript:window.print();"><i class="fa fa-print"></i> Print</a>
                                 <a href="{{route('staff_save_report')}}" class="btn btn-circle green-haze btn-outline sbold uppercase mt-sweetalert pull-right" data-title="Payment Successfully" data-message="Thank you!! Come again.." data-type="success" data-allow-outside-click="true"
                                        data-confirm-button-class="btn-success"><i class="fa fa-save"></i> Save Report</a>
                                        <a href="{{route('cancel_transactions')}}" class="btn btn-circle green-haze btn-outline sbold mt-sweetalert" data-title="Do you want to cancel this transactions?" data-message="Duis mollis, est non commodo luctus, nisi erat porttitor ligula, mattis consectetur purus sit amet eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum."
                                        data-type="info" data-show-confirm-button="true" data-confirm-button-class="btn-success" data-show-cancel-button="true" data-cancel-button-class="btn-default" data-close-on-confirm="false"
                                         data-close-on-cancel="true" data-confirm-button-text='Yes, I agree'
                                        data-cancel-button-text='No, I disagree' data-popup-title-success="Thank you!! Come again!!" data-popup-message-success=" Your transactions has been cancelled. Sorry for inconvinience!!"><i class="fa fa-times"></i> Cancel Transactions</a>

                                @endif
                               
                                
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
            @section('footer-assets')
            <!-- BEGIN PAGE LEVEL PLUGINS -->
            <script src="{{asset('../assets/global/plugins/bootstrap-sweetalert/sweetalert.min.js')}}" type="text/javascript"></script>
            <!-- END PAGE LEVEL PLUGINS -->
            <!-- BEGIN THEME GLOBAL SCRIPTS -->
            <script src="{{asset('../assets/global/scripts/app.min.js')}}" type="text/javascript"></script>
            <!-- END THEME GLOBAL SCRIPTS -->
            <!-- BEGIN PAGE LEVEL SCRIPTS -->
            <script src="{{asset('../assets/pages/scripts/ui-sweetalert.min.js')}}" type="text/javascript"></script>
            <!-- END PAGE LEVEL SCRIPTS -->
            @endsection
@endsection