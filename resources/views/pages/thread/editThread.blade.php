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
                            <form method="POST" action="{{URL::to('/update-thread/'.$fdata->style_no)}}" enctype="multipart/form-data">
                             @csrf
                             <input name="actual_qty" type="hidden" class="form-control" id="field-1" Value="{{$fdata->actual_qty}}"> 
                            <div class="row"> 
                                <div class="col-md-2"></div>
                                <div class="col-md-2"> 
                                    <div class="form-group"> 
                                        <label for="field-1" class="control-label">Thread Code</label> 
                                         <input name="thread_code" type="text" class="form-control" id="field-1" Value="{{$fdata->thread_code}}"> 
                                    </div> 
                                </div>

                                <div class="col-md-3"> 
                                    <div class="form-group"> 
                                        <label for="field-1" class="control-label">Style No</label> 
                                         <input name="style_no" type="text" class="form-control" id="field-1" Value="{{$fdata->style_no}}"> 
                                    </div> 
                                </div>
                                 <div class="col-md-3"> 
                                    <div class="form-group"> 
                                        <label for="field-2" class="control-label">Buyer</label> 
                                        <input name="buyer" type="text" class="form-control" id="field-2" value="{{$fdata->buyer}}"> 
                                    </div> 
                                </div> 
                               

                                <div class="col-md-2"> 
                                    
                                </div> 
                            </div> 

                            <div class="row"> 
                                <div class="col-md-2"></div> 
                                 <div class="col-md-2"> 
                                    <div class="form-group"> 
                                        <label for="field-2" class="control-label">Count No</label> 
                                        <input name="count_no" type="text" class="form-control" id="field-2" value="{{$fdata->count_no}}"> 
                                    </div> 
                                </div> 

                                 <div class="col-md-2"> 
                                   <div class="form-group"> 
                                        <label for="field-2" class="control-label">Shade No</label> 
                                        <input name="shade_no" type="text" class="form-control" id="field-2" value="{{$fdata->shade_no}}"> 
                                    </div> 
                                </div> 
                                <div class="col-md-2"> 
                                   <div class="form-group"> 
                                        <label for="field-1" class="control-label">Thread Color</label> 
                                        <input name="color" type="text" class="form-control" id="field-1" value="{{$fdata->color}}"> 
                                    </div> 
                                </div> 
                                
                                 <div class="col-md-2"> 
                                    <div class="form-group"> 
                                        <label for="field-1" class="control-label">Cone Length Mtr</label> 
                                        <input name="cone_length" type="number" class="form-control" id="field-1" value="{{$fdata->cone_length}}"> 
                                    </div> 
                                </div> 

                                 <div class="col-md-2"></div> 
                            </div> 

                            <div class="row"> 
                                <div class="col-md-2"></div> 
                               <div class="col-md-3"> 
                                   <div class="form-group"> 
                                        <label for="field-1" class="control-label">Thread Supplier</label> 
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
                                <div class="col-md-3"> 
                                     <div class="form-group"> 
                                        <label for="field-2" class="control-label">Thread Received Date</label> 
                                        <input name="recv_date" type="date" class="form-control" id="field-2" value="{{$fdata->recv_date}}"> 
                                    </div> 
                                </div>
                                 <div class="col-md-2"> 
                                   <div class="form-group"> 
                                         <div class="form-group no-margin"> 
                                            <label for="field-7" class="control-label">Thread Route</label> 
                                             <input name="thread_route" type="text" class="form-control" id="field-2" value="{{$fdata->thread_route}}"> 
                                        </div> 
                                    </div> 
                                </div> 


                                 <div class="col-md-2"></div> 
                            </div> 

                              <div class="row"> 
                                <div class="col-md-2"></div> 
                                <div class="col-md-3"> 
                                   <div class="form-group"> 
                                        <label for="field-2" class="control-label">Thread Types</label> 
                                        <input name="thread_type" type="text" class="form-control" id="field-2" value="{{$fdata->thread_type}}"> 
                                    </div> 
                                </div> 
                                @if($fdata->actual_qty!=$fdata->ttl_recv_cone)
                                 <div class="col-md-3"> 
                                   <div class="form-group"> 
                                        <label for="field-2" class="control-label">Total Received Cone</label> 
                                        <input  disabled="" type="number" class="form-control" id="field-2" value="{{$fdata->ttl_recv_cone}}"> 
                                        <input name="ttl_recv_cone" type="hidden" class="form-control" id="field-2" value="{{$fdata->ttl_recv_cone}}"> 
                                    </div> 
                                </div>  
                                @else
                                <div class="col-md-3"> 
                                   <div class="form-group"> 
                                        <label for="field-2" class="control-label">Total Received Cone</label> 
                                        <input name="ttl_recv_cone" type="number" class="form-control" id="field-2" value="{{$fdata->ttl_recv_cone}}"> 
                                    </div> 
                                </div>  
                                @endif 

                                <div class="col-md-2"> 
                                   <div class="form-group"> 
                                        <label for="field-2" class="control-label">Price</label> 
                                        <input name="price" type="number" class="form-control" id="field-2" value="{{$fdata->thread_price}}"> 
                                    </div> 
                                </div> 
                                <div class="col-md-2"></div> 
                            </div>
                          
                            <div class="row"> 
                                <div class="col-md-2"></div> 
                                <div class="col-md-8"> 
                                    <div class="form-group no-margin"> 
                                        <label for="field-7" class="control-label">Thread Comments</label> 
                                        <textarea name="thread_comments"class="form-control" >{{$fdata->thread_comments}}</textarea>
                                        
                                    </div> 
                                </div> 
                                <div class="col-md-2"></div> 
                            </div>



  


                            <div class="row"> 
                 
                                <div class="col-md-2"></div> 
                                 <div class="col-md-4">
                                  <label for="field-1" class="control-label">THread Sample Photo</label>
                                    <img class="form-control" id="image" src="{{asset($fdata->thread_photo)}}" style="height: 150px; width: 150px" />
                                    <input type="file" name="thread_photo" accept="image/*" class="upload" onchange="readURL(this);">
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
                            <button type="submit" class="btn btn-info waves-effect waves-light">Update Thread</button> 
                             <a href="{{URL::to('/all-thread')}}" class="btn btn-primary waves-effect waves-light" >Back</a>
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
