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
                                                    {{date('yy')}}-{{date('m')}}-{{date('d')}}{{$order_data->order_id}}
                                                </h4>
                                            </div>
                                        </div>
                                        <hr>
                                        @php
                                       //   $order_data=DB::table('orders')
                                       //  ->join('employees','orders.emp_id','employees.emp_id')
                                       //  //->join('employees','orders.emp_id','employees.emp_id')
                                       //  // ->join('sub_categories','products.sub_cat_id','sub_categories.sub_cat_id')
                                       //    ->select('orders.*','employees.emp_name')
                                       //  ->get();
                                       // print_r($order_data);
                                        @endphp
                                        <div class="row">
                                            <div class="col-md-12">
                                                
                                                <div class="pull-left m-t-30">
                                                    <address>
                                                      <strong>Order By</strong><br>
                                                      Name: {{$order_data->emp_name}}<br>
                                                      Designation: {{$order_data->designation}}<br>
                                                      Department:{{$order_data->emp_department}} 
                                                      </address>
                                                </div>
                                                <div class="pull-right m-t-30">
                                                    <p><strong>Order Date: </strong> {{$order_data->order_date}}</p>
                                                    <p class="m-t-10"><strong>Order Status: </strong> <span class="label label-pink">{{$order_data->order_status}}</span></p>
                                                    <p class="m-t-10"><strong>Order ID: </strong> #{{$order_data->order_id}}</p>
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
                                                            <th>Fabric Code</th>
                                                            <th>Buyer</th>
                                                            <th>Style No</th>
                                                            <th>Quantity</th>
                                                            <td>Color</td>
                                                            <th>Unit Cost</th>
                                                            <th>Total</th>
                                                        </tr></thead>
                                                        <tbody>
                                                        	@php
                                                        	$sl=1;
                                                        	@endphp
                                                        	@foreach ($order_items as $items)
                                                            <tr>
                                                                <td>{{$sl++}}</td>
                                                                <td>{{$items->fabric_code}}</td>
                                                                <td>{{$items->buyer}}</td>
                                                                <td>{{$items->style_no}}</td>
                                                                <td>{{$items->color}}</td>
                                                                <td>{{$items->quantity}}</td>
                                                                <td>{{$items->unicost}}</td>
                                                                <td>{{$items->unicost*$items->quantity}}</td>
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
                                        <div class="hidden-print">
                                            <div class="pull-right">
                                                <a href="#" id="print" class="btn btn-inverse waves-effect waves-light"><i class="fa fa-print"></i></a>
                                                <a href="{{URL::to('/issued-fabric')}}" class="btn btn-primary waves-effect waves-light" >Back</a>
                                            </div>
                                        </div>
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



@endsection

