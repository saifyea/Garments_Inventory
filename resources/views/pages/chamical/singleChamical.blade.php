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
                                                <label for="field-1" class="control-label">Chamical Photo </label>
                                                <img class="form-control" id="image" src="{{asset($chdata->chamical_photo)}}" style="height: 200px; width: 200px" />
                                                <br>
                                                 <div class="barcode">
                                                    {{-- <span>{{$items->chamical_name}}</span> --}}
                                                    {{-- {!!DNS1D::getBarcodeHTML(0201254, 'I25')!!} --}}
                                                    {!! DNS1D::getBarcodeHTML($chdata->chamical_id, "C39") !!}
                                                    <p class="pid">{{$chdata->chamical_id}}</p>
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
                                                               <th>Chamial ID</th>
                                                                <td >{{$chdata->chamical_id}}</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Chamial Name</th>
                                                                <td >{{$chdata->chamical_name}}</td>
                                                            </tr>
                                                           
                                                            <tr>
                                                               <th>Chamical Type</th>
                                                                <td >{{$chdata->chamical_type}}</td>
                                                            </tr>
                                                            <tr>
                                                               <th>For The Buyer</th>
                                                                <td >{{$chdata->buyer}}</td>
                                                            </tr>
                                                            
                                                            <tr>
                                                               <th>For The Style</th>
                                                                <td >{{$chdata->style_no}}</td>
                                                            </tr>
                                                            
                                                            <tr>
                                                               <th>Chamical Rec. Date</th>
                                                                <td >{{$chdata->recv_date}}</td>
                                                            </tr>
                                                            <tr>
                                                               <th>Chamical Stored on</th>
                                                                <td >{{$chdata->chamical_stored}}</td>
                                                            </tr>
                                                           
                                                            <tr>
                                                               <th>Total Receive Qty</th>
                                                                <td >{{$chdata->actual_qty}} {{$chdata->unit}}</td>
                                                            </tr>
                                                            <tr>
                                                               <th>Total Current Stock</th>
                                                                <td >{{$chdata->ttl_recv}} {{$chdata->unit}}</td>
                                                            </tr>
                                                            <tr>
                                                               <th>Comments About Thread</th>
                                                                <td >{{$chdata->chamical_comments}}</td>
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
                                                <a href="{{URL::to('/all-chamical')}}" class="btn btn-primary waves-effect waves-light" >Back</a>
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

