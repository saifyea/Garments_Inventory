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
                            <h3 class="panel-title">Edit Thread</h3>
                            
                        </div>
                        <div class="panel-body">
                            <form method="POST" action="{{URL::to('/update-Accessories/'.$cdata->accessories_id)}}" enctype="multipart/form-data">
                             @csrf
                            <input name="actual_qty" type="hidden" class="form-control" value="{{$cdata->actual_qty}}"> 
                             <div class="row"> 
                                <div class="col-md-2"></div>
                                <div class="col-md-3"> 
                                    <div class="form-group"> 
                                        <label for="field-2" class="control-label">Accessories Id</label> 
                                        <input name="accessories_id" type="text" class="form-control" id="field-2" value="{{$cdata->accessories_id}}"> 
                                    </div> 
                                </div> 
                                 <div class="col-md-3"> 
                                    <div class="form-group"> 
                                        <label for="field-2" class="control-label">Buyer</label> 
                                        <input name="buyer" type="text" class="form-control" id="field-2" value="{{$cdata->buyer}}"> 
                                    </div> 
                                </div> 
                                <div class="col-md-2"> 
                                    <div class="form-group"> 
                                        <label for="field-1" class="control-label">Style No</label> 
                                        <input name="style_no" type="text" class="form-control" id="field-1" value="{{$cdata->style_no}}"> 
                                    </div> 
                                </div>
                                
                                <div class="col-md-2"></div> 
                            </div> 

                           <div class="row"> 
                                <div class="col-md-2"></div> 
                                <div class="col-md-3"> 
                                   <div class="form-group"> 
                                        <label for="field-2" class="control-label">Accessories Name</label> 
                                            <select class="form-control" name="accessories_name">
                                                @php
                                                    $acc = DB::table('acc_names')->get();
                                                    
                                                @endphp

                                                @foreach($acc as $row)
                                                    <option value="{{$row->acc_id}}" <?php if($cdata->accessories_name==$row->acc_id) {echo "selected";} ?>>{{$row->acc_name}}</option>
                                                @endforeach
                                            </select> 
                                    </div> 
                                </div> 
                                @if($cdata->actual_qty!=$cdata->ttl_recv)
                                <div class="col-md-2"> 
                                   <div class="form-group"> 
                                        <label for="field-2" class="control-label">Total Received </label> 
                                        <input name="ttl_recv" disabled="" type="number" class="form-control" id="field-2" value="{{$cdata->ttl_recv}}"> 
                                        <input name="ttl_recv" type="hidden" class="form-control" id="field-2" value="{{$cdata->ttl_recv}}"> 
                                    </div> 
                                </div> 
                                @else 
                                <div class="col-md-2"> 
                                   <div class="form-group"> 
                                        <label for="field-2" class="control-label">Total Received </label> 
                                        <input name="ttl_recv" type="number" class="form-control" id="field-2" value="{{$cdata->ttl_recv}}"> 
                                    </div> 
                                </div> 
                                @endif 
                                 <div class="col-md-1"> 
                                   <div class="form-group"> 
                                        <label for="field-2" class="control-label">Unit </label> 
                                        <select class="form-control" name="unit">
                                              
                                            <option disabled="" >Select Unit Type</option>
                                            <option value="Kg"<?php if($cdata->unit=="Kg") {echo "selected";} ?>>Kg</option>
                                            <option value="mtr" <?php if($cdata->unit=="mtr") {echo "selected";} ?>>Meter</option>
                                            <option value="pcs" <?php if($cdata->unit=="pcs") {echo "selected";} ?>>Pcs</option>
                                        </select> 
                                    </div> 
                                </div> 
                                 <div class="col-md-2"> 
                                   <div class="form-group"> 
                                        <label for="field-2" class="control-label">Price </label> 
                                        <input name="price" type="number" class="form-control" id="field-2" value="{{$cdata->acc_price}}"> 
                                    </div> 
                                </div>  

                                <div class="col-md-2"></div> 
                            </div>


                             <div class="row"> 
                                <div class="col-md-2"></div> 
                               <div class="col-md-3"> 
                                   <div class="form-group"> 
                                        <label for="field-1" class="control-label">Accessories Supplier</label> 
                                            <select class="form-control" name="sup_id">
                                               @php
                                                    $sup = DB::table('suppliers')->get();
                                                @endphp
                                                  
                                                @foreach($sup as $row)
                                                    <option value="{{$row->sup_id}}" <?php if($cdata->sup_id==$row->sup_id) {echo "selected";} ?>>{{$row->sup_name}}</option>
                                                @endforeach
                                            </select> 
                                    </div> 
                                </div> 
                                <div class="col-md-3"> 
                                     <div class="form-group"> 
                                        <label for="field-2" class="control-label">Accessories Received Date</label> 
                                        <input name="recv_date" type="date" class="form-control" id="field-2" value="{{$cdata->recv_date}}"> 
                                    </div> 
                                </div>
                                 <div class="col-md-2"> 
                                   <div class="form-group"> 
                                         <div class="form-group no-margin"> 
                                            <label for="field-7" class="control-label">Accories Route</label> 
                                             <input name="acc_route" type="text" class="form-control" id="field-2" value="{{$cdata->acc_route}}"> 
                                        </div> 
                                    </div> 
                                </div> 


                                 <div class="col-md-2"></div> 
                            </div> 


                           <div class="row"> 
                                <div class="col-md-2"></div> 
                                <div class="col-md-8"> 
                                    <div class="form-group no-margin"> 
                                        <label for="field-7" class="control-label">Accessories Comments (if any)</label> 
                                        <textarea name="acc_comments"class="form-control" >{{$cdata->acc_comments}}</textarea>
                                        
                                    </div> 
                                </div> 
                                <div class="col-md-2"></div> 
                            </div>


                            <div class="row"> 
                 
                                <div class="col-md-2"></div> 
                                 <div class="col-md-4">
                                  <label for="field-1" class="control-label">Accessories Photo</label>
                                    <img class="form-control" id="image" src="{{asset($cdata->acc_photo)}}" style="height: 100px; width: 100px" />
                                    <input type="file" name="emp_img" accept="image/*" class="upload" onchange="readURL(this);">
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
                                    <button type="submit" class="btn btn-info waves-effect waves-light">Update</button> 
                                     <a href="{{URL::to('/all-Accessories')}}" class="btn btn-primary waves-effect waves-light" >Back</a>
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
                .width(100)
                .height(100);
        };
        reader.readAsDataURL(input.files[0]);
        //reader.readAsDataURL(input.files[1]);

    }

   


</script>

@endsection
