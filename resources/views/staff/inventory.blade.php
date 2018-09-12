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
                                        <form action="{{route('inventory.save')}}" method="post">
                                            {{csrf_field()}}
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                        <h4 class="modal-title"><i class="fa fa-cart-plus"></i> Add Items</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                             <label class="control-label">Item code</label>
                                                                <div class="input-icon">
                                                                    <i class="fa fa-qrcode"></i>
                                                                    <input type="text" class="form-control{{ $errors->has('itemcode') ? ' is-invalid' : '' }}" placeholder="Item code" name="itemcode" required="required"> 
                                                                    @if ($errors->has('itemcode'))
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $errors->first('itemcode') }}</strong>
                                                                        </span>
                                                                    @endif
                                                                </div>
                                                        </div>
                                                        <div class="form-group">
                                                             <label class="control-label">Product Name</label>
                                                                <div class="input-icon">
                                                                    <i class="fa fa-tag"></i>
                                                                    <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Product Name" name="name" required="required"> 
                                                                    @if ($errors->has('name'))
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $errors->first('name') }}</strong>
                                                                        </span>
                                                                    @endif
                                                                </div>
                                                        </div>
                                                        <div class="form-group">
                                                             <label class="control-label">Quantity</label>
                                                                <div class="input-icon">
                                                                    <i class="fa fa-sort"></i>
                                                                    <input type="number" class="form-control{{ $errors->has('quantity') ? ' is-invalid' : '' }}" placeholder="Quantity" name="quantity" required="required">
                                                                    @if ($errors->has('quantity'))
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $errors->first('quantity') }}</strong>
                                                                        </span>
                                                                    @endif 
                                                                </div>
                                                        </div>
                                                        <div class="form-group">
                                                             <label class="control-label">Price</label>
                                                                <div class="input-icon">
                                                                    <i class="fa fa-dollar"></i>
                                                                    <input type="text" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" placeholder="Price" name="price" required="required"> @if ($errors->has('price'))
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $errors->first('price') }}</strong>
                                                                        </span>
                                                                    @endif
                                                                </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                                                        <button type="submit" data-loading-text="Loading..." class="btn btn-primary mt-ladda-btn ladda-button mt-progress-demo" data-style="expand-left" id="save">
                                                        <span class="ladda-label">Save Item</span>
                                                      </button>
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                        </form>
                                        <!-- /.modal-dialog -->
                                </div>
                                <div class="modal fade" id="updatemodal" tabindex="-1" role="basic" aria-hidden="true" style="display: none;">
                                        <form action="{{route('updateInventory')}}" method="post">
                                            {{csrf_field()}}
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                        <h4 class="modal-title"><i class="fa fa-cart-plus"></i> Add Items</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <input type="hidden" name="id" id="id">
                                                            <input type="hidden" name="dateadded" id="dateadded">
                                                            <input type="hidden" name="addedby" id="addedby">
                                                             <label class="control-label">Item code</label>
                                                                <div class="input-icon">
                                                                    <i class="fa fa-qrcode"></i>
                                                                    <input type="text" class="form-control{{ $errors->has('itemcode') ? ' is-invalid' : '' }}" placeholder="Item code" name="up_itemcode" required="required" id="itemcode"> 
                                                                    @if ($errors->has('itemcode'))
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $errors->first('itemcode') }}</strong>
                                                                        </span>
                                                                    @endif
                                                                </div>
                                                        </div>
                                                        <div class="form-group">
                                                             <label class="control-label">Product Name</label>
                                                                <div class="input-icon">
                                                                    <i class="fa fa-tag"></i>
                                                                    <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Product Name" name="up_name" required="required" id="name"> 
                                                                    @if ($errors->has('name'))
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $errors->first('name') }}</strong>
                                                                        </span>
                                                                    @endif
                                                                </div>
                                                        </div>
                                                        <div class="form-group">
                                                             <label class="control-label">Quantity</label>
                                                                <div class="input-icon">
                                                                    <i class="fa fa-sort"></i>
                                                                    <input type="number" class="form-control{{ $errors->has('quantity') ? ' is-invalid' : '' }}" placeholder="Quantity" name="up_quantity" required="required" id="quantity">
                                                                    @if ($errors->has('quantity'))
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $errors->first('quantity') }}</strong>
                                                                        </span>
                                                                    @endif 
                                                                </div>
                                                        </div>
                                                        <div class="form-group">
                                                             <label class="control-label">Price</label>
                                                                <div class="input-icon">
                                                                    <i class="fa fa-dollar"></i>
                                                                    <input type="text" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" placeholder="Price" name="up_price" required="required" id="price"> @if ($errors->has('price'))
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $errors->first('price') }}</strong>
                                                                        </span>
                                                                    @endif
                                                                </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn dark btn-outline" data-dismiss="modal">Close</button>
                                                        <button type="submit" data-loading-text="Loading..." class="btn btn-primary mt-ladda-btn ladda-button mt-progress-demo" data-style="expand-left" id="save">
                                                        <span class="ladda-label">Save Item</span>
                                                      </button>
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                        </form>
                                        <!-- /.modal-dialog -->
                                </div>
                                <div class="portlet-body">
                                    <div class="table-toolbar">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="btn-group">
                                                    <a id="sample_editable_1_new" class="btn sbold green" data-toggle="modal" href="#basic"> Add Item
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
                                                        <input type="checkbox" class="checkboxes" value="1" />
                                                        <span></span>
                                                    </label>
                                                </th>
                                                <th class="text-center"> Item code </th>
                                                <th class="text-center"> Name </th>
                                                <th class="text-center"> Quantity </th>
                                                <th class="text-center"> Price </th>
                                                <th class="text-center"> Date Added </th>
                                                <th class="text-center"> Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if(count($inventories)>0)
                                                @foreach($inventories->all() as $inventory)
                                                <tr class="post">
                                                    <td>
                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                        <input type="checkbox" class="checkboxes" value="1" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                    <td class="text-center">{{$inventory->itemcode}}</td>
                                                    <td class="text-center">{{$inventory->name}}</td>
                                                    <td class="text-center">{{$inventory->quantity}}</td>
                                                    <td class="text-center">{{$inventory->price}}</td>
                                                    <td class="text-center">{{$inventory->dateadded}}</td>
                                                    <td class="text-center"><a class="btn green btn-circle btn-small" data-id="{{$inventory->id}}" data-itemcode="{{$inventory->itemcode}}" data-name="{{$inventory->name}}" data-quantity="{{$inventory->quantity}}" data-price="{{$inventory->price}}" data-dateadded="{{$inventory->dateadded}}" data-addedby="{{$inventory->addedby}}" id="editInventory"><i class="fa fa-edit"></i> Edit</a></td>
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
                    }
                    
                   @endif
                </script>
                <!-- END PAGE LEVEL PLUGINS -->
                <!-- BEGIN THEME GLOBAL SCRIPTS -->
                <script type="text/javascript">
                    $(document).on('click', '#editInventory', function(){
                        $('#updatemodal').modal('show');
                        $('#id').val($(this).data('id'));
                        $('#itemcode').val($(this).data('itemcode'));
                        $('#name').val($(this).data('name'));
                        $('#quantity').val($(this).data('quantity'));
                        $('#price').val($(this).data('price'));
                        $('#dateadded').val($(this).data('dateadded'));
                        $('#addedby').val($(this).data('addedby'));
                        $('#save').text('Update item');

                        $('.modal-footer').on('click','#save', function(){
                            $.ajax({
                                type: 'POST',
                                url: 'updateInventory',
                                data:{
                                    '_token': $('input[name=token]').val(),
                                    'id': $("#id").val(),
                                    'itemcode': $("#itemcode").val(),
                                    'name': $("#name").val(),
                                    'quantity': $("#quantity").val(),
                                    'price': $("#price").val(),
                                    'dataadded': $("#dataadded").val(),
                                    'addedby': $("#addedby").val(),
                                }
                            });
                        });

                    });
                </script>
            @endsection
@endsection