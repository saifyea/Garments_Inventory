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
                                                <label for="field-1" class="control-label">Accessories Photo </label>
                                                <img class="form-control" id="image" src="{{asset($acdata->acc_photo)}}" style="height: 200px; width: 200px" />
                                                <br>
                                                 <div class="barcode">
                                                    {{-- <span>{{$items->acc_name}}</span> --}}
                                                    {{-- {!!DNS1D::getBarcodeHTML(0201254, 'I25')!!} --}}
                                                    {!! DNS1D::getBarcodeHTML($acdata->accessories_id, "C39") !!}
                                                    <p class="pid">{{$acdata->accessories_id}}</p>
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
                                                               <th>Accessories ID</th>
                                                                <td >{{$acdata->accessories_id}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Accessories Name</th>
                                                                <td >{{$acdata->accessories_name}}</td>
                                                            </tr>
                                                           
                                                            <tr>
                                                               <th>For The Buyer</th>
                                                                <td >{{$acdata->buyer}}</td>
                                                            </tr>
                                                            
                                                            <tr>
                                                               <th>For The Style</th>
                                                                <td >{{$acdata->style_no}}</td>
                                                            </tr>
                                                            
                                                            <tr>
                                                               <th>Accessories Rec. Date</th>
                                                                <td >{{$acdata->recv_date}}</td>
                                                            </tr>
                                                            <tr>
                                                               <th>Accessories Route</th>
                                                                <td >{{$acdata->acc_route}}</td>
                                                            </tr>
                                                           
                                                            <tr>
                                                               <th>Total Receive Qty</th>
                                                                <td >{{$acdata->actual_qty}}</td>
                                                            </tr>
                                                            <tr>
                                                               <th>Total Current Stock</th>
                                                                <td >{{$acdata->ttl_recv}}</td>
                                                            </tr>
                                                            <tr>
                                                               <th>Comments About Acce.</th>
                                                                <td >{{$acdata->acc_comments}}</td>
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
                                                <a href="{{URL::to('/all-Accessories')}}" class="btn btn-primary waves-effect waves-light" >Back</a>
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

