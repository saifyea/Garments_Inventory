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
                            <h3 class="panel-title">Add Accessories</h3>
                            
                        </div>
                        <div class="panel-body">
                            <form method="POST" action="{{URL::to('/save-Accessories')}}" enctype="multipart/form-data">
                             @csrf

                            <div class="row"> 
                                <div class="col-md-2"></div>
                                <div class="col-md-3"> 
                                    <div class="form-group"> 
                                        <label for="field-2" class="control-label ">Accessories Id</label> 
                                        <input name="accessories_id" type="text" class="form-control" id="field-2" placeholder="Accessories ID"> 
                                    </div> 
                                </div> 
                                 <div class="col-md-3"> 
                                    <div class="form-group"> 
                                        <label for="field-2" class="control-label">Buyer</label> 
                                         <select name="buyer" class="select2" data-placeholder="Choose a Buyer">
                                              <option value="#">&nbsp;</option>
                                              @foreach($acc->unique('buyer') as $items)
                                              <option value="{{$items->buyer}}">{{$items->buyer}}</option>
                                             
                                              @endforeach
                                            </select>
                                    </div> 
                                </div> 
                                <div class="col-md-2"> 
                                    <div class="form-group"> 
                                        <label for="field-1" class="control-label">Style No</label> 
                                        <select name="style_no" class="select2" data-placeholder="Choose a Style No">
                                              <option value="#">&nbsp;</option>
                                              @foreach($acc->unique('style_no') as $items)
                                              <option value="{{$items->style_no}}">{{$items->style_no}}</option>
                                              @endforeach
                                            </select>

                                    </div> 
                                </div>
                                
                                <div class="col-md-2"></div> 
                            </div> 

                           <div class="row"> 
                                <div class="col-md-2"></div> 
                                <div class="col-md-3"> 
                                   <div class="form-group"> 
                                        <label for="field-2" class="control-label">Accessories Name</label> 
                                            <select class="form-control" name="accessoris_name">
                                                @php
                                                    $acc = DB::table('acc_names')->get();
                                                    
                                                @endphp
                                                <option disabled="" selected="">Select Accessories</option>
                                                @foreach($acc as $row)
                                                    <option value="{{$row->acc_name}}">{{$row->acc_name}}</option>
                                                @endforeach
                                            </select> 
                                    </div> 
                                </div> 
                                <div class="col-md-2"> 
                                   <div class="form-group"> 
                                        <label for="field-2" class="control-label">Total Received </label> 
                                        <input name="ttl_recv" type="number" class="form-control" id="field-2" placeholder="Total chamical received"> 
                                    </div> 
                                </div>  
                                 <div class="col-md-1"> 
                                   <div class="form-group"> 
                                        <label for="field-2" class="control-label">Unit </label> 
                                        <select class="form-control" name="unit">
                                              
                                            <option disabled="" selected="">Select Unit Type</option>
                                            <option value="Kg">Kg</option>
                                            <option value="mtr">Meter</option>
                                            <option value="pcs">Pcs</option>
                                        </select> 
                                    </div> 
                                </div> 
                                 <div class="col-md-2"> 
                                   <div class="form-group"> 
                                        <label for="field-2" class="control-label">Price</label> 
                                        <input name="price" type="number" class="form-control" id="field-2" placeholder="Price"> 
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
                                                <option disabled="" selected="">Select Acce. Supplier</option>
                                                @foreach($sup as $row)
                                                    <option value="{{$row->sup_id}}">{{$row->sup_name}}</option>
                                                @endforeach
                                            </select> 
                                    </div> 
                                </div> 
                                <div class="col-md-3"> 
                                     <div class="form-group"> 
                                        <label for="field-2" class="control-label">Accessories Received Date</label> 
                                        <input name="recv_date" type="date" class="form-control" id="field-2" placeholder="Receiving Date"> 
                                    </div> 
                                </div>
                                 <div class="col-md-2"> 
                                   <div class="form-group"> 
                                         <div class="form-group no-margin"> 
                                            <label for="field-7" class="control-label">Accories Route</label> 
                                             <input name="acc_route" type="text" class="form-control" id="field-2" placeholder="Accessories Route"> 
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
                                        <textarea name="acc_comments"class="form-control" placeholder="Accessories Comments"></textarea>
                                        
                                    </div> 
                                </div> 
                                <div class="col-md-2"></div> 
                            </div>


                            <div class="row"> 
                 
                                <div class="col-md-2"></div> 
                                 <div class="col-md-4">
                                  <label for="field-1" class="control-label">Accessories Photo</label>
                                    <img class="form-control" id="image" src="{{asset('public/accessories/accessories.png')}}" style="height: 150px; width: 150px" />
                                    <input type="file" name="acc_photo" accept="image/*" class="upload" required onchange="readURL(this);">
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
                            <button type="submit" class="btn btn-info waves-effect waves-light">Save</button> 
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
                .width(150)
                .height(150);
        };
        reader.readAsDataURL(input.files[0]);
        //reader.readAsDataURL(input.files[1]);

    }

   


</script>

@endsection
