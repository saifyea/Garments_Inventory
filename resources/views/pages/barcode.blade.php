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
                                                    <form method="POST" action="{{URL('/add_barcode')}}" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" name="id" value="{{$row->prod_code}}">
                                                    <input type="hidden" name="name" value="{{$row->prod_name}}">
                                                    <input type="hidden" name="qty" value="1">
                                                    <input type="hidden" name="weight" value="1">
                                                    <input type="hidden" name="price" value="20">
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
                            <h3 class="panel-title" >Product Barcode</h3>
                            
                        </div> 
                         
                           <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                     <div class="price_card text-center">
                                        <form action="{{URL::to('/print_barcode')}}" method="POST">
                                            @csrf
                                            @php 
                                                $cart_product=Cart::content();
                                            @endphp
                                                @foreach($cart_product as $items)
                                                <div class="barcode">
                                                    <span>{{$items->name}}</span>
                                                    {{-- {!!DNS1D::getBarcodeHTML(0201254, 'I25')!!} --}}
                                                    {!! DNS1D::getBarcodeHTML($items->id, "C39") !!}
                                                    <p class="pid">{{$items->id}}</p>
                                                </div>
                                            @endforeach

                                    </div>
                                     <input type="hidden" name="id" value="{{$row->prod_code}}">
                                 <button type="submit" class="btn btn-info w-md waves-effect waves-light pull-center" style="text-align: center;">Print</button>
                                        </form> 
                                    <a href="{{URL::to('/clear-barcod')}}" class="btn btn-danger w-md waves-effect waves-light pull-center" style="text-align: center;">Clear</a>   
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
