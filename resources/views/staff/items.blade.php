@extends('layouts.template')
@section('content')
@section('header-assets')
        <link href="{{asset('../assets/global/plugins/ladda/ladda-themeless.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="{{asset('../assets/global/plugins/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css')}}" rel="stylesheet" type="text/css" />
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
                                <span>Item</span>
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
                                        <span class="caption-subject bold uppercase"> Managed Items</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="table-toolbar">
                                    </div>
                                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                        <input type="checkbox" class="checkboxes" value="1" />
                                                        <span></span>
                                                    </label>
                                                </th>
                                                <th class="text-center"> Item code </th>
                                                <th class="text-center"> Name </th>
                                                <th class="text-center"> Quantity </th>
                                                <th class="text-center"> Price </th>
                                                <th class="text-center"> Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(count($items)>0)
                                                @foreach($items->all() as $item)
                                                <tr>
                                                    <td>
                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                        <input type="checkbox" class="checkboxes" value="1" name="check" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                    <td class="text-center">{{$item->itemcode}}</td>
                                                    <td class="text-center">{{$item->name}}</td>
                                                    <td class="text-center">
                                                        @if($item->quantity <= 0)
                                                        <span class="label label-warning label-sm">Out of stock</span>
                                                        @else
                                                        <span class="badge badge-success">{{$item->quantity}}</span>
                                                        @endif
                                                    </td>
                                                    <td class="text-center">${{$item->price}}</td>
                                                    <td class="text-center">
                                                        @if($item->quantity <= 0)
                                                        <a class="btn dark btn-circle btn-small" disabled="disabled"><i class="fa fa-spinner fa-spin"></i>  waiting for stock</a>
                                                        @else
                                                        @if($item->order)
                                                        <a class="btn red btn-circle btn-small" disabled="disabled"><i class="fa fa-check"></i> Selected</a>
                                                        @else
                                                        <a href="{{route('staff_select_order', ['item_id' => $item->id])}}" class="btn btn-primary mt-ladda-btn ladda-button mt-progress-demo btn-circle" data-loading-text="Checking..." data-style="expand-left" id="order"><span class="ladda-label"><i class="fa fa-shopping-cart"></i> Order Now</span>
                                                        @endif
                                                        @endif
                                                    </td>
                                                </tr>
                                                @endforeach
                                            @endif
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
                <script src="{{asset('../assets/global/plugins/ladda/spin.min.js')}}" type="text/javascript"></script>
                <script src="{{asset('../assets/global/plugins/ladda/ladda.min.js')}}" type="text/javascript"></script>
                <script src="{{asset('../assets/pages/scripts/ui-buttons.min.js')}}" type="text/javascript"></script>
                <script src="{{asset('../assets/global/scripts/datatable.js')}}" type="text/javascript"></script>
                <script src="{{asset('../assets/global/plugins/datatables/datatables.min.js')}}" type="text/javascript"></script>
                 <script src="{{asset('../assets/pages/scripts/table-datatables-managed.min.js')}}" type="text/javascript"></script>
                <script src="{{asset('../assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js')}}" type="text/javascript"></script>
                <script type="text/javascript" src="{{asset('js/toastr.min.js')}}"></script>
                <script type="text/javascript">
                    @if(Session::has('message'))
                    var type = "{{Session::get('alert-type','success')}}";
                    switch(type){
                      case 'success':
                      toastr.success("{{Session::get('message')}}");
                      break;
                       case 'warning':
                      toastr.warning("{{Session::get('message')}}");
                      break;
                    }
                    
                   @endif
                </script>
                <!-- END PAGE LEVEL PLUGINS -->
                <!-- BEGIN THEME GLOBAL SCRIPTS -->
            @endsection
@endsection