@extends('layouts.app')
@section('content')
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->                      
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
                                   
                                        <div class="row">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-3">
                                                <label for="field-1" class="control-label">Product Photo </label>
                                                <img class="form-control" id="image" src="{{asset($prod_data->prod_photo)}}" style="height: 200px; width: 200px" />
                                                <br>
                                                 <div class="barcode">
                                                     <label for="field-1" class="control-label">Barcode</label>
                                                        <span style="height:20px;">{!! DNS1D::getBarcodeHTML($prod_data->prod_code, "C39") !!}</span>
                                                        <span class="text-center" >{{$prod_data->prod_code}}</span>
                                                </div>

                                             </div>   
                                            <div class="col-md-8">
                                                <table class="table table-bordered table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th width="1">Particuler</th>
                                                                <th width="10">Descriptions</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                             <tr>
                                                               <th>Product ID</th>
                                                                <td >{{$prod_data->prod_code}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Product Name</th>
                                                                <td >{{$prod_data->prod_name}}</td>
                                                            </tr>
                                                           
                                                            <tr>
                                                               <th>Brand</th>
                                                                <td >{{$prod_data->brand}}</td>
                                                            </tr>
                                                            
                                                            <tr>
                                                               <th>Model</th>
                                                                <td >{{$prod_data->model_no}}</td>
                                                            </tr>
                                                            <tr>
                                                               <th>Supplier</th>
                                                                <td >{{$prod_data->sup_name}}</td>
                                                            </tr>
                                                            <tr>
                                                               <th>Product Rec. Date</th>
                                                                <td >{{$prod_data->prod_recv}}</td>
                                                            </tr>
                                                            <tr>
                                                               <th>Product Route</th>
                                                                <td >{{$prod_data->prod_route}}</td>
                                                            </tr>
                                                           
                                                            <tr>
                                                               <th>Total Receive Qty</th>
                                                                <td >{{$prod_data->actual_qty}}</td>
                                                            </tr> 
                                                            <tr>
                                                               <th>Total Current Stock</th>
                                                                <td >{{$prod_data->prod_qty}}</td>
                                                            </tr>
                                                            <tr>
                                                               <th>Comments About Product</th>
                                                                <td >{{$prod_data->prod_desc}}</td>
                                                            </tr>

                                                            </tr>
                                                        </tbody>
                                                    </table>
                                            </div>
                                        </div>
                                        
                                        
                                        <hr>
                                        <div class="hidden-print">
                                            <div class="pull-right">
                                                <a href="#" id="print" class="btn btn-inverse waves-effect waves-light"><i class="fa fa-print"></i></a>
                                                <a href="{{URL::to('/product')}}" class="btn btn-primary waves-effect waves-light" >Back</a>
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

   

@endsection
