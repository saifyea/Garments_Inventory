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
                        <div class="panel-heading">
                            <h3 class="panel-title">Place Order <span class="pull-right">{{date('d/m/y')}}</span><a href="#" class="text-white pull-right">Saifyea / </a></h3>
                        </div>
                        <div class="panel-body">

                           

            <div class="row">
            
                <div class="col-md-7">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background-color:#33DAFF">
                            <h3 class="panel-title ">Select Products</h3>

                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                
                                                <th>Product ID</th>
                                                <th>Product Name</th>
                                                <th>Product Category</th>
                                                <th>Stock Available</th>
                                                <th>Product Photo</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach($prod_data as $row)
                                                <tr class="gradeX">
                                                    <form method="POST" action="{{URL('/add_cart')}}" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{$row->prod_code}}">
                                                    <input type="hidden" name="name" value="{{$row->prod_name}}">
                                                    <input type="hidden" name="qty" value="1">
                                                    <input type="hidden" name="weight" value="1">
                                                    <input type="hidden" name="price" value="{{$row->prod_price}}">
                                                    <td >{{$row->prod_code}}</td>
                                                    <td >{{$row->prod_name}}</td>
                                                    <td >{{$row->category_name}}->{{$row->sub_cat_name}}</td>
                                                    <td >{{$row->prod_qty}}</td>
                                                    <td><img src="{{$row->prod_photo}}" style="width:50px; height:50px;"></td>

                                                    <td style="text-align:center">
                                                       <button type="submit" class="btn btn-sm btn-info">
                                                           <i class="fa fa-plus" aria-hidden="true"></i>
                                                       </button>                                         
                                                    </td>
                                                </form>
                                                </tr>

                                            
                                          @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background-color:#33FDE2">
                            <h3 class="panel-title" >ORDER SUMMARY</h3>
                            
                        </div> 
                         
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                     <div class="price_card text-center">
                                         <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    
                                                    <th>Products Name</th>
                                                    <th>Qty</th>
                                                    <th>Price</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            @php 
                                                $cart_product=Cart::content();
                                            
                                            @endphp
                                            <tbody>
                                                @foreach($cart_product as $items)
                                                <tr>
                                                    
                                                    <td>{{$items->name}}</td>

                                                    <td>
                                                         <form action="{{URL('/update-cart/'.$items->rowId)}}" method="POST">
                                                            @csrf
                                                            <div class="input-group " style="width: 110px">
                                                            <input type="number" name="qty" value="{{$items->qty}}" class="form-control"> 
                                                            <input type="hidden" name="prod_code" value="{{$items->id}}">
                                                             <span class="input-group-btn">
                                                                <button type="submit" class="btn btn-sm btn-primary" style="margin-top: 0px"><i class="fa fa-check-square fa-1.5x"></i></button>
                                                            </span>
                                                            </div>
                                                           
                                                        </form>
                                                    </td>
                                                    
                                                    <td>{{$items->qty*$items->price}}</td>
                                                           <td>
                                                            <a href="{{URL::to('/remove-cart/'.$items->rowId)}}" type="submit" style="margin-top:-5px ">
                                                                <i class="fa fa-trash fa-2x" aria-hidden="true" style="color:red"></i>
                                                            </button>
                                                        </td>
                                             
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <div class="pricing-header bg-info">
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>Total Qty: {{Cart::count()}}</td>
                                                    </tr> 
                                                    <tr>
                                                        <td>Tax:</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Total Price: {{Cart::total()}}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        
                                        <form action="{{URL::to('/create-invoice')}}" method="POST">
                                            @csrf
                                                                              
                                            </div> <!-- end Pricing_card -->
                                                <div class="panel panel-default">
                                                
                                                <div class="panel-body">

                                                    <div class="panel-heading">
                                                     <h3 class="panel-title" >requisition No.<input type="text" required="" name="order_no" class="pull-right" style="height: 25px"></h3>

                                                 </div>

                                                    @if ($errors->any())
                                                        <div class="alert alert-danger">
                                                            <ul>
                                                                @foreach ($errors->all() as $error)
                                                                    <li>{{ $error }}</li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    @endif
                                                   
                                                        <div class="input-group">
                                                            <span class="input-group-btn">
                                                                <button type="button" class="btn waves-effect waves-light btn-primary">Employee</button>
                                                            </span>
                                                                <select id="example-input1-group2" name="emp_id" class="form-control">
                                                                    @php
                                                                        $employee = DB::table('employees')->get(); 
                                                                    @endphp
                                                                    <option disabled="" selected="">Select a employee</option>
                                                                    @foreach($employee as $row)
                                                                        <option value="{{$row->emp_id}}">{{$row->emp_name}}</option>
                                                                    @endforeach
                                                                </select>
                                                        </div>
                                                   
                                                
                                                </div> <!-- panel-body -->
                                            </div> <!-- panel -->

                                        <button type="submit" class="btn btn-info w-md waves-effect waves-light" style="text-align: center;">Invoice</button>
                                        </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Row -->

      
                        </div>
                    </div>
                </div>
                
            </div> <!-- End Row -->


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
