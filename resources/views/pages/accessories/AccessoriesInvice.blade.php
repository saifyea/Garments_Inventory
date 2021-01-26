@extends('layouts.app')

@section('content')
            
            
<!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <!-- <div class="panel-heading">
                                        <h4>Invoice</h4>
                                    </div> -->
                                    <div class="panel-body print">
                                        <div class="clearfix">
                                            <div class="pull-left">
                                                <h4 class="text-right">Harry Fashion Limited</h4>
                                                
                                            </div>
                                            <div class="pull-right">
                                                <h4>Invoice # <br>
                                                    <strong>{{date('yy')}}-{{date('m')}}-{{date('d')}}{{$order_no}}</strong>
                                                </h4>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12">
                                                
                                                <div class="pull-left m-t-30">
                                                    <address>
                                                      <strong>Order By</strong><br>
                                                      Name: {{$employee_info->emp_name}}<br>
                                                      Designation: {{$employee_info->designation}}<br>
                                                      Department: {{$employee_info->emp_department}}
                                                      </address>
                                                </div>
                                                <div class="pull-right m-t-30">
                                                    <p><strong>Order Date: </strong> {{date("l jS \of F Y")}}</p>
                                                    <p class="m-t-10"><strong>Order Status: </strong> <span class="label label-pink">Deleverd</span></p>
                                                    <p class="m-t-10"><strong>Order ID: </strong> #{{$order_no}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-h-50"></div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="table-responsive">
                                                    <table class="table m-t-30">
                                                        <thead>
                                                            <tr><th>#</th>
                                                            <th>Chamical id</th>
                                                            <th>Chamical Name</th>
                                                            <th>Quantity</th>
                                                            <th>Unit Cost</th>
                                                            <th>Total</th>
                                                        </tr></thead>
                                                        <tbody>
                                                        	@php
                                                        	$sl=1;
                                                        	@endphp
                                                        	@foreach ($inv_contents as $items)
                                                            <tr>
                                                                <td>{{$sl++}}</td>
                                                                <td>{{$items->id}}</td>
                                                                <td>{{$items->name}}</td>
                                                                <td>{{$items->qty}}</td>
                                                                <td>{{$items->price}}</td>
                                                                <td>{{$items->qty*$items->price}}</td>
                                                            </tr>
                                                           @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                       {{--  <div class="row" style="border-radius: 0px;">
                                            <div class="col-md-3 col-md-offset-9">
                                                <p class="text-right"><b>Sub-total:</b> {{Cart::subtotal()}}</p>
                                                <p class="text-right">VAT: 12.9%</p>
                                                <hr>
                                                <h3 class="text-right">TAKA {{Cart::total()}}</h3>
                                            </div>
                                        </div> --}}
                                        <hr>
                                         <form method="POST" action="{{URL::to('/Accessories-final-nvoice')}}">
                                            @csrf
                                                <input type="hidden" name="emp_id" value="{{$employee_info->emp_id}}">
                                                <input type="hidden" name="order_date" value="{{date('yy-m-d')}}">
                                                <input type="hidden" name="order_status" value="Deliverd">
                                                <input type="hidden" name="total_products" value="{{Cart::count()}}">
                                                <input type="hidden" name="sub_total" value="{{Cart::subtotal()}}">
                                                <input type="hidden" name="vat" value="{{Cart::tax()}}">
                                                <input type="hidden" name="total" value="{{Cart::total()}}">
                                                <input type="hidden" name="order_no" value="{{$order_no}}">
                                                <input type="hidden" name="accessories_id" value="{{$accessories_id}}">

                                        <div class="hidden-print">
                                            <div class="pull-right">
                                                <a href="#" id="print" class="btn btn-inverse waves-effect waves-light"><i class="fa fa-print"></i></a>
                                                <button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
                                               
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>

                            </div>

                        </div>



            </div> <!-- container -->
                               
                </div> <!-- content -->

                @php 
   include 'footer.php';
   @endphp

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

    <!--- model--->

    <div id="con-close-modal1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog"> 
                    <div class="modal-content"> 
                        <div class="modal-header"> 
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                            <h4 class="modal-title">Invoice of {{$employee_info->emp_name}}</h4> 
                        </div> 
                         
                        <div class="modal-body"> 

                            <div class="row">
                            <!-- Basic example -->
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    
                                    <div class="panel-body">
                                        <form method="POST" action="{{URL::to('/fabric-final-nvoice')}}">
                                            @csrf
                                            <div class="row">
                                            	<div class="col-md-4">
													<div class="form-group">
		                                                <label for="exampleInputEmail1">Payment</label>
		                                                <select class="form-control" name="payment_status"> 
		                                                	<option value="HandCash">Hand Cash</option>
		                                                	<option value="Cheque">Cheque</option>
		                                                	<option value="Due">Due</option>
		                                                </select>
	                                           		</div>
                                            	</div>

                                            	<div class="col-md-4">
                                            		<label class="control-label">Pay</label>
                                            		<input type="text" name="pay" class="form-control">
                                            	</div>

                                            	<div class="col-md-4">
                                            		<label class="control-label">Due</label>
                                            		<input type="text" name="due" class="form-control">
                                            	</div>

                                            	<input type="hidden" name="emp_id" value="{{$employee_info->emp_id}}">
                                            	<input type="hidden" name="order_date" value="{{date('d/m/yy')}}">
                                            	<input type="hidden" name="order_status" value="Delivered">
                                            	<input type="hidden" name="total_products" value="{{Cart::count()}}">
                                            	<input type="hidden" name="sub_total" value="{{Cart::subtotal()}}">
                                            	<input type="hidden" name="vat" value="{{Cart::tax()}}">
                                            	<input type="hidden" name="total" value="{{Cart::total()}}">
                                                <input type="hidden" name="order_no" value="{{$order_no}}">
                                            	
                                            </div>
                                            <hr>
                                            <div class="form-group">

	                                            <button type="submit" class="btn btn-purple waves-effect waves-light">Submit</button>
                                        </form>

                                    </div><!-- panel-body -->
                                </div> <!-- panel -->
                            </div> <!-- col-->
                    </div> 
                </div>
        </div><!-- /.modal -->


@endsection

