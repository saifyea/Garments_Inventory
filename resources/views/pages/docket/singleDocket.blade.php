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
                                                <h4>Docket No :<br>
                                                    <strong>{{$data->docket_no}}</strong>
                                                </h4>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <table class="table table-bordered table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th width="32%">Particuler</th>
                                                                <th width="68%">
                                                                    Descriptions
                                                                </th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th>Style No</th>
                                                                <td >{{$data->style_no}}</td>
                                                            </tr>
                                                            <tr>
                                                               <th>Name of Buyer</th>
                                                                <td >{{$data->buyer}}</td>
                                                            </tr>
                                                            <tr>
                                                               <th>PO Numgers</th>
                                                                <td >{{$data->po_no}}</td>
                                                            </tr>
                                                            <tr>
                                                               <th>Items</th>
                                                                <td >{{$data->items}}</td>
                                                            </tr>
                                                             <tr>
                                                               <th>Order Quantity</th>
                                                                <td>{{$data->order_qty}}</td>
                                                            </tr>
                                                             <tr>
                                                               <th>Shipment Date</th>
                                                                <td >{{$data->ship_date}}</td>
                                                            </tr>
                                                             
                                                            
                                                        </tbody>
                                                    </table>
                                            
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th width="32%">Particulars</th>
                                                                <th width="28%">
                                                                    Required Items
                                                                </th>
                                                                <th width="40%">
                                                                   Description
                                                                </th>
                                                                <!-- <th>
                                                                    In-house Status
                                                                </th> -->
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th>Fabrics</th>
                                                                <td>Yes</td>
                                                                <td>{{$data->fabric_type}}</td>
                                                               <!--  <td>

                                                                    In House
                                                                </td> -->
                                                                
                                                            </tr>
                                                            <tr>
                                                               <th>Pocketing</th>
                                                                <td>
                                                                    @php  if($data->pocketing!=null)  echo "Yes";
                                                                    @endphp

                                                                </td>
                                                                <td>{{$data->pocketing}}</td>
                                                                <!-- <td>In House</td> -->
                                                            </tr>
                                                            <tr>
                                                               <th>Fusing</th>
                                                                <td>@php  if($data->fuisng!=null)  echo "Yes";
                                                                    @endphp</td>
                                                                <td>{{$data->fuisng}}</td>
                                                                <!-- <td>In House</td> -->
                                                            </tr>
                                                            <tr>
                                                               <th>Thread</th>
                                                                <td>@php  if($data->thread!=null)  echo "Yes";
                                                                    @endphp</td>
                                                                <td>{{$data->thread}}</td>
                                                               <!--  <td>In House</td> -->
                                                            </tr>
                                                            <tr>
                                                               <th>Elastic</th>
                                                                <td>@php  if($data->elastic!=null)  echo "Yes";
                                                                    @endphp</td>
                                                                <td>{{$data->elastic}}</td>
                                                                <!-- <td>In House</td> -->
                                                            </tr>
                                                            <tr>
                                                               <th>Buttons</th>
                                                                <td>@php  if($data->button!=null)  echo "Yes";
                                                                    @endphp</td>
                                                                <td>{{$data->button}}</td>
                                                                <!-- <td>In House</td> -->
                                                            </tr>
                                                            <tr>
                                                               <th>Zipper</th>
                                                                <td>@php  if($data->zipper!=null)  echo "Yes";
                                                                    @endphp</td>
                                                                <td>{{$data->zipper}}</td>
                                                               <!--  <td>In House</td> -->
                                                            </tr>
                                                            <tr>
                                                               <th>Wash</th>
                                                                <td>@php  if($data->wash!=null)  echo "Yes";
                                                                    @endphp</td>
                                                                <td>{{$data->wash}}</td>
                                                                <!-- <td></td> -->
                                                            </tr>
                                                                                                                       
                                                            <!-- <tr>
                                                                <th>Nestable</th>
                                                                <td colspan="3">Yes</td>
                                                            </tr> -->
                                                            
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>Particulars</th>
                                                                <th width="40%">
                                                                    Required Items
                                                                </th>
                                                               <!--  <th>
                                                                    In-house Status
                                                                </th> -->
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th> Price Sticker</th>
                                                                <td>{{$data->price_sticker}}</td>
                                                                <!-- <td>

                                                                    @if($data->price_sticker=="Yes" and empty($acc->style_no))   
                                                                        Till In House
                                                                    @elseif ($data->price_sticker=="Yes" and !empty($acc->style_no))
                                                                    {{$acc->ttl_recv}} {{$acc->unit}} in house
                                                                    @else

                                                                    @endif
                                                                </td> -->
                                                            </tr>
                                                            <tr>
                                                               <th>Poly Sticker</th>
                                                                <td>{{$data->poly_sticker}}</td>
                                                                <!-- <td>@if($data->poly_sticker=="Yes")    In House
                                                                    @else
                                                                    @endif</td> -->
                                                            </tr>
                                                            <tr>
                                                               <th>Size Sticker</th>
                                                                <td>{{$data->size_sticker}}</td>
                                                               <!--  <td>@if($data->size_sticker=="Yes")    In House
                                                                    @else
                                                                    @endif</td> -->
                                                            </tr>
                                                            <tr>
                                                               <th>Barcode Sticker</th>
                                                                <td>{{$data->barcode_sticker}}</td>
                                                                <!-- <td>@if($data->barcode_sticker=="Yes")    In House
                                                                    @else
                                                                    @endif</td> -->
                                                            </tr>
                                                            <tr>
                                                               <th>Main Label</th>
                                                                <td>{{$data->main_label}}</td>
                                                               <!--  <td>@if($data->main_label=="Yes")    In House
                                                                    @else
                                                                    @endif</td> -->
                                                            </tr>
                                                            <tr>
                                                               <th>Care Label</th>
                                                                <td>{{$data->care_label}}</td>
                                                                <!-- <td>@if($data->care_label=="Yes")    In House
                                                                    @else
                                                                    @endif</td> -->
                                                            </tr>
                                                            <tr>
                                                               <th>Size Label</th>
                                                                <td>{{$data->size_label}}</td>
                                                                <!-- <td>@if($data->size_label=="Yes")    In House
                                                                    @else
                                                                    @endif</td> -->
                                                            </tr>
                                                            
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>Particulars</th>
                                                               <th width="40%">
                                                                    Required Items
                                                                </th>
                                                                <!-- <th>
                                                                    In-house Status
                                                                </th> -->
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            
                                                            <tr>
                                                               <th>Decorated Label</th>
                                                                <td>{{$data->decor_label}}</td>
                                                                <!-- <td>@if($data->decor_label=="Yes")    In House
                                                                    @else
                                                                    @endif</td> -->
                                                            </tr>
                                                            <tr>
                                                               <th>Poly</th>
                                                                <td>{{$data->poly}}</td>
                                                                <!-- <td>@if($data->poly=="Yes")    In House
                                                                    @else
                                                                    @endif</td> -->
                                                            </tr>
                                                            <tr>
                                                                <th>Cartoon</th>
                                                                <td>{{$data->cartoon}}</td>
                                                                <!-- <td>@if($data->cartoon=="Yes")    In House
                                                                    @else
                                                                    @endif</td> -->
                                                                
                                                            </tr>
                                                            <tr>
                                                                <th>Rivets</th>
                                                                <td>{{$data->rivets}}</td>
                                                                <!-- <td>@if($data->rivets=="Yes")    In House
                                                                    @else
                                                                    @endif</td> -->
                                                                
                                                            </tr>
                                                            <tr>
                                                               <th>Patch</th>
                                                                <td>{{$data->patch}}</td>
                                                                <!-- <td>@if($data->patch=="Yes")    In House
                                                                    @else
                                                                    @endif</td> -->
                                                            </tr>
                                                            <tr>
                                                                <th>Tags</th>
                                                                <td>{{$data->tags}}</td>
                                                                <!-- <td>@if($data->tags=="Yes")    In House
                                                                    @else
                                                                    @endif</td> -->
                                                                
                                                            </tr>
                                                            <tr>
                                                               <th>Hook & Bar</th>
                                                                <td>{{$data->hook_bar}}</td>
                                                                <!-- <td>@if($data->hook_bar=="Yes")    In House
                                                                    @else
                                                                    @endif</td> -->
                                                            </tr>
                                                            
                                                            
                                                            
                                                                                                                       
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>Particulars</th>
                                                                <th width="40%">
                                                                    Required Items
                                                                </th>
                                                                <!-- <th>
                                                                    In-house Status
                                                                </th> -->
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            
                                                            <tr>
                                                                <th>Drowsting</th>
                                                                <td>{{$data->drowsting}}</td>
                                                                <!-- <td>@if($data->drowsting=="Yes")    In House
                                                                    @else
                                                                    @endif</td> -->
                                                                
                                                            </tr>
                                                            <tr>
                                                                <th>Tags</th>
                                                                <td>{{$data->tags}}</td>
                                                                <!-- <td>@if($data->tags=="Yes")    In House
                                                                    @else
                                                                    @endif</td> -->
                                                                
                                                            </tr>
                                                            <tr>
                                                               <th>Hook & Bar</th>
                                                                <td>{{$data->hook_bar}}</td>
                                                                <!-- <td>@if($data->hook_bar=="Yes")    In House
                                                                    @else
                                                                    @endif</td> -->
                                                            </tr>
                                                            <tr>
                                                                <th>Drowsting</th>
                                                                <td>{{$data->drowsting}}</td>
                                                                <!-- <td>@if($data->drowsting=="Yes")    In House
                                                                    @else
                                                                    @endif</td> -->
                                                                
                                                            </tr>
                                                            <tr>
                                                               <th>Others Acce</th>
                                                                <td>{{$data->other_stickers}}</td>
                                                                <!-- <td>@if(empty($data->other_stickers))    
                                                                    @else
                                                                    In House
                                                                    @endif</td> -->
                                                            </tr>
                                                             <tr>
                                                               <th>Others Acce</th>
                                                                <td>{{$data->other_lebels}}</td>
                                                                <!-- <td>@if(empty($data->other_lebels))    
                                                                    @else
                                                                    In House
                                                                    @endif</td> -->
                                                            </tr>
                                                             <tr>
                                                               <th>Others Acce</th>
                                                                <td>{{$data->others_items}}</td>
                                                                <!-- <td>@if(empty($data->others_items))    
                                                                    @else
                                                                    In House
                                                                    @endif</td> -->
                                                            </tr>
                                                            
                                                                                                                       
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                        </div>

                                        </div>

                                        
                                        <hr>
                                        <div class="hidden-print">
                                            <div class="pull-right">
                                                <a href="#" id="print" class="btn btn-inverse waves-effect waves-light"><i class="fa fa-print"></i></a>
                                               <a href="{{URL::to('all-dockets')}}" class="btn btn-info waves-effect waves-light">Back</a>
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

