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
                            <h3 class="panel-title">Add Chamicals</h3>
                            
                        </div>
                        <div class="panel-body">
                            <form method="POST" action="{{URL::to('/save-chamical')}}" enctype="multipart/form-data">
                             @csrf

                            <div class="row"> 
                                <div class="col-md-2"></div>
                                <div class="col-md-3"> 
                                    <div class="form-group"> 
                                        <label for="field-2" class="control-label">Chamical Id</label> 
                                        <input name="chamical_id" type="text" class="form-control" id="field-2" placeholder="Chamial ID"> 
                                    </div> 
                                </div> 
                                <div class="col-md-3"> 
                                    <div class="form-group"> 
                                        <label for="field-1" class="control-label">Style No</label> 
                                        <input name="style_no" type="text" class="form-control" id="field-1" placeholder="Chamical for the style"> 
                                    </div> 
                                </div>
                                 <div class="col-md-2"> 
                                    <div class="form-group"> 
                                        <label for="field-2" class="control-label">Buyer</label> 
                                        <input name="buyer" type="text" class="form-control" id="field-2" placeholder="chamical for the Buyer"> 
                                    </div> 
                                </div> 
                                

                                <div class="col-md-2"> 
                                    
                                </div> 
                            </div> 


                           <div class="row"> 
                                <div class="col-md-2"></div> 
                                <div class="col-md-3"> 
                                   <div class="form-group"> 
                                        <label for="field-2" class="control-label">Chamical Name</label> 
                                        <input name="chamical_name" type="text" class="form-control" id="field-2" placeholder="name of chamical"> 
                                    </div> 
                                </div> 
                                <div class="col-md-2"> 
                                   <div class="form-group"> 
                                        <label for="field-2" class="control-label">Chamical Types</label> 
                                        <input name="chamical_type" type="text" class="form-control" id="field-2" placeholder="Type of chamical"> 
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
                                        <label for="field-2" class="control-label">Unit</label> 
                                        <select class="form-control" name="unit">   
                                        <option disabled="" selected="">Unit</option>
                                        <option value="Kgs">Kgs</option>
                                        <option value="Ltr">Liter</option>
                                        <option value="Galon">Galon</option>
                                        </select> 
                                    </div> 
                                </div> 
                                <div class="col-md-2"></div> 
                            </div>


                             <div class="row"> 
                                <div class="col-md-2"></div> 
                               <div class="col-md-3"> 
                                   <div class="form-group"> 
                                        <label for="field-1" class="control-label">Chamical Supplier</label> 
                                            <select class="form-control" name="sup_id">
                                                @php
                                                    $sup = DB::table('suppliers')->get();
                                                    
                                                @endphp
                                                <option disabled="" selected="">Select Chamical Supplier</option>
                                                @foreach($sup as $row)
                                                    <option value="{{$row->sup_id}}">{{$row->sup_name}}</option>
                                                @endforeach
                                            </select> 
                                    </div> 
                                </div> 
                                <div class="col-md-2"> 
                                     <div class="form-group"> 
                                        <label for="field-2" class="control-label">Chamical Received Date</label> 
                                        <input name="recv_date" type="date" class="form-control" id="field-2" placeholder="Receiving Date"> 
                                    </div> 
                                </div>
                                 <div class="col-md-2"> 
                                   <div class="form-group"> 
                                         <div class="form-group no-margin"> 
                                            <label for="field-7" class="control-label">Chamical Stored on</label> 
                                             <input name="chamical_stored" type="text" class="form-control" id="field-2" placeholder="Chamical Stored area"> 
                                        </div> 
                                    </div> 
                                </div> 
                                <div class="col-md-1"> 
                                   <div class="form-group"> 
                                         <div class="form-group no-margin"> 
                                            <label for="field-7" class="control-label">Price</label> 
                                             <input name="price" type="text" class="form-control" id="field-2" placeholder="Price"> 
                                        </div> 
                                    </div> 
                                </div> 


                                 <div class="col-md-2"></div> 
                            </div> 


                           <div class="row"> 
                                <div class="col-md-2"></div> 
                                <div class="col-md-8"> 
                                    <div class="form-group no-margin"> 
                                        <label for="field-7" class="control-label">Chamical Comments (if any)</label> 
                                        <textarea name="chamical_comments"class="form-control" placeholder="Chamical Comments"></textarea>
                                        
                                    </div> 
                                </div> 
                                <div class="col-md-2"></div> 
                            </div>


                            <div class="row"> 
                 
                                <div class="col-md-2"></div> 
                                 <div class="col-md-4">
                                  <label for="field-1" class="control-label">Chamical Photo</label>
                                    <img class="form-control" id="image" src="{{asset('public/chamicals/chamical.jpg')}}" style="height: 150px; width: 150px" />
                                    <input type="file" name="chamical_photo" accept="image/*" class="upload" required onchange="readURL(this);">
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
                            <button type="submit" class="btn btn-info waves-effect waves-light">Save Chamical</button> 
                             <a href="{{URL::to('/all-chamical')}}" class="btn btn-primary waves-effect waves-light" >Back</a>
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
