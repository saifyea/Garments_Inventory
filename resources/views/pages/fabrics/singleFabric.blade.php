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
                                   
                                        <div class="row">
                                            <div class="col-md-1"></div>
                                            <div class="col-md-3">
                                                <label for="field-1" class="control-label">Fabric Photo </label>
                                                <img class="form-control" id="image" src="{{asset($fdata->fabric_photo)}}" style="height: 200px; width: 200px" />
                                                <br>
                                                 <div class="barcode">
                                                    {{-- <span>{{$items->name}}</span> --}}
                                                    {{-- {!!DNS1D::getBarcodeHTML(0201254, 'I25')!!} --}}
                                                    {!! DNS1D::getBarcodeHTML($fdata->order_no, "C39") !!}
                                                    <p class="pid">{{$fdata->order_no}}</p>
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
                                                               <th>Fabric Code</th>
                                                                <td >{{$fdata->fabric_code}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Style No</th>
                                                                <td >{{$fdata->style_no}}</td>
                                                            </tr>
                                                            <tr>
                                                               <th>Name of Buyer</th>
                                                                <td >{{$fdata->buyer}}</td>
                                                            </tr>
                                                           
                                                            <tr>
                                                               <th>Order Number</th>
                                                                <td >{{$fdata->order_no}}</td>
                                                            </tr>
                                                            
                                                            <tr>
                                                               <th>Lot Number</th>
                                                                <td >{{$fdata->lot_no}}</td>
                                                            </tr>
                                                            <tr>
                                                               <th>Shade Number</th>
                                                                <td >{{$fdata->shade_no}}</td>
                                                            </tr>
                                                            <tr>
                                                               <th>Roles</th>
                                                                <td >{{$fdata->rolls}}</td>
                                                            </tr>
                                                            <tr>
                                                               <th>Width</th>
                                                                <td >{{$fdata->width}}</td>
                                                            </tr>
                                                            <tr>
                                                               <th>Route</th>
                                                                <td >{{$fdata->fabric_route}}</td>
                                                            </tr>
                                                            <tr>
                                                               <th>Receive Date</th>
                                                                <td >{{$fdata->recv_date}}</td>
                                                            </tr>
                                                            <tr>
                                                               <th>Construction</th>
                                                                <td >{{$fdata->construction}}</td>
                                                            </tr>

                                                             <tr>
                                                               <th>Colors</th>
                                                                <td >{{$fdata->color}}</td>
                                                            </tr>
                                                             <tr>
                                                               <th>Receive Quantity</th>
                                                                <td>{{$fdata->actual_qty}}</td>
                                                            </tr>
                                                            <tr>
                                                               <th>Current Quantity</th>
                                                                <td>{{$fdata->fabric_length}}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                            </div>
                                        </div>
                                        
                                        
                                        <hr>
                                        <div class="hidden-print">
                                            <div class="pull-right">
                                                <a href="#" id="print" class="btn btn-inverse waves-effect waves-light"><i class="fa fa-print"></i></a>
                                                <a href="{{URL::to('/all-fabric')}}" class="btn btn-primary waves-effect waves-light" >Back</a>
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

