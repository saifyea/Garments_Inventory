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
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h3 class="panel-title">Add Fabrics</h3>
                            
                        </div>
                        <div class="panel-body print">
                            <form method="POST" action="{{URL::to('/update-fabric/'.$fdata->fabric_code)}}" enctype="multipart/form-data">
                             @csrf
                            <input name="actual_qty" type="hidden" class="form-control" id="field-2" value="{{$fdata->actual_qty}}"> 
                            <div class="row"> 
                                <div class="col-md-2"></div>
                                 <div class="col-md-3"> 
                                    <div class="form-group"> 
                                        <label for="field-2" class="control-label">Fabric Code</label> 
                                        <input name="fabric_code" type="text" class="form-control" id="field-2" value="{{$fdata->fabric_code}}"> 
                                    </div> 
                                </div> 

                                <div class="col-md-3"> 
                                    <div class="form-group"> 
                                        <label for="field-1" class="control-label">Style No</label> 
                                        <input name="style_no" type="text" class="form-control" id="field-1" Value="{{$fdata->style_no}}"> 
                                    </div> 
                                </div>
                                 <div class="col-md-2"> 
                                    <div class="form-group"> 
                                        <label for="field-2" class="control-label">Docket No</label> 
                                        <input name="docket_no" type="text" class="form-control" id="field-2" value="{{$fdata->docket_no}}"> 
                                    </div> 
                                </div> 
                               

                                <div class="col-md-2"> 
                                    
                                </div> 
                            </div> 

                            <div class="row"> 
                                <div class="col-md-2"></div> 
                                 <div class="col-md-3"> 
                                    <div class="form-group"> 
                                        <label for="field-2" class="control-label">Order No</label> 
                                        <input name="order_no" type="text" class="form-control" id="field-2" value="{{$fdata->order_no}}"> 
                                    </div> 
                                </div> 
                                <div class="col-md-3"> 
                                    <div class="form-group"> 
                                        <label for="field-2" class="control-label">Lot No</label> 
                                        <input name="lot_no" type="text" class="form-control" id="field-2" value="{{$fdata->lot_no}}"> 
                                    </div> 
                                </div> 
                                
                                 <div class="col-md-2"> 
                                    <div class="form-group"> 
                                        <label for="field-2" class="control-label">Shade No</label> 
                                        <input name="shade_no" type="text" class="form-control" id="field-2" value="{{$fdata->shade_no}}"> 
                                    </div> 
                                </div> 

                                 <div class="col-md-2"></div> 
                            </div> 

                              
                             <div class="row"> 
                                <div class="col-md-2"></div> 
                               <div class="col-md-3"> 
                                    <div class="form-group"> 
                                        <label for="field-2" class="control-label">Buyer</label> 
                                        <input name="buyer" type="text" class="form-control" id="field-2" value="{{$fdata->buyer}}"> 
                                    </div> 
                                </div> 
                                <div class="col-md-3"> 
                                    <div class="form-group"> 
                                        <label for="field-1" class="control-label">Fabric Supplier</label> 
                                            <select class="form-control" name="sup_id">
                                                 @php
                                                        $sup = DB::table('suppliers')->get();
                                                        
                                                    @endphp
                                                   {{--  <option disabled="" selected="">Select Product Supplier</option> --}}
                                                    @foreach($sup as $row)
                                                        <option value="{{$row->sup_id}}" <?php if($fdata->sup_id==$row->sup_id) {echo "selected";} ?>>{{$row->sup_name}}</option>
                                                    @endforeach
                                            </select> 
                                    </div> 
                                </div>
                                 <div class="col-md-2"> 
                                    <div class="form-group"> 
                                        <label for="field-1" class="control-label">Fabric Color</label> 
                                        <input name="color" type="text" class="form-control" id="field-1" value="{{$fdata->color}}"> 
                                    </div> 
                                </div> 


                                 <div class="col-md-2"></div> 
                            </div> 



                            <div class="row"> 
                                 <div class="col-md-2"></div> 
                                
                                 <div class="col-md-3"> 
                                    <div class="form-group"> 
                                        <label for="field-1" class="control-label">Fabric Rolls</label> 
                                        <input name="rolls" type="text" class="form-control" id="field-1" value="{{$fdata->rolls}}"> 
                                    </div> 
                                </div> 
                                @if($fdata->actual_qty!=$fdata->fabric_length)
                                <div class="col-md-2"> 
                                    <div class="form-group"> 
                                        <label for="field-1" class="control-label">Fabric Length(Mtr)</label> 
                                        <input  disabled="Some items Issued" type="number" class="form-control" id="field-1" value="{{$fdata->fabric_length}}"> 
                                        <input name="fabric_length" type="hidden" class="form-control" id="field-1" value="{{$fdata->fabric_length}}"> 
                                    </div> 
                                </div> 
                                @else
                                 <div class="col-md-2"> 
                                    <div class="form-group"> 
                                        <label for="field-1" class="control-label">Fabric Length(Mtr)</label> 
                                        <input name="fabric_length" type="number" class="form-control" id="field-1" value="{{$fdata->fabric_length}}"> 
                                    </div> 
                                </div> 
                                @endif
                                <div class="col-md-2"> 
                                    <div class="form-group"> 
                                        <label for="field-1" class="control-label">Fabric Width</label> 
                                        <input name="width" type="number" class="form-control" id="field-1" value="{{$fdata->width}}"> 
                                    </div> 
                                </div> 
                                <div class="col-md-1"> 
                                    <div class="form-group"> 
                                        <label for="field-1" class="control-label">Price/ (Mtr)</label> 
                                        <input name="price" type="number" class="form-control" id="field-1" value="{{$fdata->febric_price}}"> 
                                    </div> 
                                </div> 
                                 <div class="col-md-2"></div> 
                            </div> 

                          
                    

                            <div class="row"> 
                                <div class="col-md-2"></div> 
                                    
                                <div class="col-md-3"> 
                                    <div class="form-group"> 
                                        <label for="field-2" class="control-label">Fabric Received Date</label> 
                                        <input name="recv_date" type="date" class="form-control" id="field-2" value="{{$fdata->recv_date}}"> 
                                    </div> 
                                </div>
                                <div class="col-md-3"> 
                                    <div class="form-group"> 
                                        <label for="field-1" class="control-label">Fabric Stored on</label> 
                                            <select class="form-control" name="prod_store_area">
                                                @php
                                                    $sub_store = DB::table('substores')->get();
                                                @endphp
                                                <option disabled="" selected="">Select Product Storage area</option>
                                                @foreach($sub_store as $row)
                                                        <option value="{{$row->substoreid}}" <?php if($fdata->prod_store_area==$row->substoreid) {echo "selected";} ?>>{{$row->substoreName}}</option>
                                                    @endforeach

                                              
                                            </select> 
                                    </div>  
                                </div> 

                                 <div class="col-md-2"> 
                                    <div class="form-group"> 
                                         <div class="form-group no-margin"> 
                                        <label for="field-7" class="control-label">Fabric Route</label> 
                                         <input name="fabric_route" type="text" class="form-control" id="field-2" value="{{$fdata->fabric_route}}"> 
                                    </div> 
                                    </div> 
                                </div>              

                                <div class="col-md-2"></div>  
                            </div> 

                            <div class="row"> 
                                <div class="col-md-2"></div> 
                                                  

                                <div class="col-md-2"></div> 
                            </div> 

                          

                           <div class="row"> 
                                <div class="col-md-2"></div> 
                                <div class="col-md-8"> 
                                    <div class="form-group no-margin"> 
                                        <label for="field-7" class="control-label">Fabric Construction</label> 
                                        <textarea name="construction" class="form-control autogrow" id="field-7" >   {{$fdata->construction}}        
                                        </textarea> 
                                    </div> 
                                </div> 
                                <div class="col-md-2"></div> 
                            </div>


  


                            <div class="row"> 
                 
                                <div class="col-md-2"></div> 
                                 <div class="col-md-4">
                                  <label for="field-1" class="control-label">Fabric Sample Photo</label>
                                    <img class="form-control" id="image" src="{{asset($fdata->fabric_photo)}}" style="height: 150px; width: 150px" />
                                    <input type="file" name="fabric_photo" accept="image/*" class="upload" onchange="readURL(this);">
                                 </div>

                                 <!-- <div class="col-md-4">
                                  
                                    <img id="image" src="{{asset('public/admin/images/big/bg.jpg')}}" style="height: 80px; width: 80px" />
                                    <input type="file" name="image" accept="image/*" class="upload" required onchange="readURL(this);">
                                 </div> -->

                                 <div class="col-md-2"></div> 
                                
                             </div>

                            </div> 

                            <div class="row"> 
                              <div class="col-md-2"></div> 
                       <div class="col-md-8">
                          <div class="modal-footer"> 
                            <button type="submit" class="btn btn-info waves-effect waves-light">Update Fabric</button> 
                             <a href="{{URL::to('/all-fabric')}}" class="btn btn-primary waves-effect waves-light" >Back</a>
                        </div>
                     </div>
                            <div class="col-md-2"></div> 
                                
                             </div>

                        </form>

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

            

<script type="text/javascript">
    function readURL(input){
        var reader = new FileReader();
        reader.onload = function(e){
            $('#image')
                .attr('src', e.target.result)
                .width(150)
                .height(150);
        };
        reader.readAsDataURL(input.files[0]);
        //reader.readAsDataURL(input.files[1]);

    }

   


</script>

@endsection
