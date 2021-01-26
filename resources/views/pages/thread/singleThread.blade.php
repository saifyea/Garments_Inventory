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
                                                <img class="form-control" id="image" src="{{asset($fdata->thread_photo)}}" style="height: 200px; width: 200px" />
                                                <br>
                                                 <div class="barcode">
                                                    {{-- <span>{{$items->name}}</span> --}}
                                                    {{-- {!!DNS1D::getBarcodeHTML(0201254, 'I25')!!} --}}
                                                    {!! DNS1D::getBarcodeHTML($fdata->id, "C39") !!}
                                                    <p class="pid">{{$fdata->thread_code}}</p>
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
                                                               <th>Thread Code</th>
                                                                <td >{{$fdata->thread_code}}</td>
                                                            </tr>
                                                            <tr>
                                                               <th>Name of Buyer</th>
                                                                <td >{{$fdata->buyer}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Style No</th>
                                                                <td >{{$fdata->style_no}}</td>
                                                            </tr>
                                                           
                                                            <tr>
                                                               <th>Count Numbers</th>
                                                                <td >{{$fdata->count_no}}</td>
                                                            </tr>
                                                            <tr>
                                                               <th>Shade Number</th>
                                                                <td >{{$fdata->shade_no}}</td>
                                                            </tr>
                                                            
                                                            <tr>
                                                               <th>Thread Color</th>
                                                                <td >{{$fdata->color}}</td>
                                                            </tr>
                                                            <tr>
                                                               <th>Each Cole Length</th>
                                                                <td >{{$fdata->cone_length}}</td>
                                                            </tr>
                                                            <tr>
                                                               <th>Thread Rec. Date</th>
                                                                <td >{{$fdata->recv_date}}</td>
                                                            </tr>
                                                            <tr>
                                                               <th>Thread Stored on</th>
                                                                <td >{{$fdata->thread_route}}</td>
                                                            </tr>
                                                            <tr>
                                                               <th>Thread Type</th>
                                                                <td >{{$fdata->thread_type}}</td>
                                                            </tr>
                                                            <tr>
                                                               <th>Total Receive Qty</th>
                                                                <td >{{$fdata->actual_qty}}</td>
                                                            </tr> 
                                                            <tr>
                                                               <th>Total Current Stock</th>
                                                                <td >{{$fdata->ttl_recv_cone}}</td>
                                                            </tr>
                                                            <tr>
                                                               <th>Comments About Thread</th>
                                                                <td >{{$fdata->thread_comments}}</td>
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
                                                <a href="{{URL::to('/all-thread')}}" class="btn btn-primary waves-effect waves-light" >Back</a>
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

