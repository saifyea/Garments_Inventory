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
                            <h3 class="panel-title">Add Threads</h3>
                            
                        </div>
                        <div class="panel-body">
                            <form method="POST" action="{{URL::to('/save-thread')}}" enctype="multipart/form-data">
                             @csrf

                            <div class="row"> 
                                <div class="col-md-2"></div>
                                <div class="col-md-2"> 
                                    <div class="form-group"> 
                                        <label for="field-1" class="control-label">Thread Code</label> 
                                        <input name="thread_code" type="text" class="form-control" id="field-1" placeholder="Thread Code"> 
                                    </div> 
                                </div>
                               
                                 <div class="col-md-3"> 
                                    <div class="form-group"> 
                                        <label for="field-2" class="control-label">Buyer</label> 
                                        <select name="buyer" class="select2" data-placeholder="Choose a Buyer">
                                              <option value="#">&nbsp;</option>
                                              @foreach($doc->unique('buyer') as $items)
                                              <option value="{{$items->buyer}}">{{$items->buyer}}</option>
                                              @endforeach
                                            </select>
                                    </div> 
                                </div>
                                 <div class="col-md-3"> 
                                    <div class="form-group"> 
                                        <label for="field-1" class="control-label">Style No</label> 
                                        <select name="style_no" class="select2" data-placeholder="Choose a Style No">
                                              <option value="#">&nbsp;</option>
                                              @foreach($doc->unique('docket_no') as $items)
                                              <option value="{{$items->docket_no}}">{{$items->docket_no}}</option>
                                              @endforeach
                                            </select>
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
                                        <input name="count_no" type="text" class="form-control" id="field-2" placeholder="Count No"> 
                                    </div> 
                                </div> 

                                 <div class="col-md-2"> 
                                   <div class="form-group"> 
                                        <label for="field-2" class="control-label">Shade No</label> 
                                        <input name="shade_no" type="text" class="form-control" id="field-2" placeholder="Shade No"> 
                                    </div> 
                                </div> 
                                <div class="col-md-2"> 
                                   <div class="form-group"> 
                                        <label for="field-1" class="control-label">Thread Color</label> 
                                        <input name="color" type="text" class="form-control" id="field-1" placeholder="Thread Color"> 
                                    </div> 
                                </div> 
                                
                                 <div class="col-md-2"> 
                                    <div class="form-group"> 
                                        <label for="field-1" class="control-label">Cone Length Mtr</label> 
                                        <input name="cone_length" type="number" class="form-control" id="field-1" placeholder="Thread Length"> 
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
                                                <option disabled="" selected="">Select Thread Supplier</option>
                                                @foreach($sup as $row)
                                                    <option value="{{$row->sup_id}}">{{$row->sup_name}}</option>
                                                @endforeach
                                            </select> 
                                    </div> 
                                </div> 
                                <div class="col-md-3"> 
                                     <div class="form-group"> 
                                        <label for="field-2" class="control-label">Thread Received Date</label> 
                                        <input name="recv_date" type="date" class="form-control" id="field-2" placeholder="Receiving Date"> 
                                    </div> 
                                </div>
                                 <div class="col-md-2"> 
                                   <div class="form-group"> 
                                         <div class="form-group no-margin"> 
                                            <label for="field-7" class="control-label">Thread Route</label> 
                                             <input name="thread_route" type="text" class="form-control" id="field-2" placeholder="Route"> 
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
                                        <input name="thread_type" type="text" class="form-control" id="field-2" placeholder="Thread Type"> 
                                    </div> 
                                </div> 
                                 <div class="col-md-3"> 
                                   <div class="form-group"> 
                                        <label for="field-2" class="control-label">Total Received Cone</label> 
                                        <input name="ttl_recv_cone" type="number" class="form-control" id="field-2" placeholder="Receiving Date"> 
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
                                <div class="col-md-8"> 
                                    <div class="form-group no-margin"> 
                                        <label for="field-7" class="control-label">Thread Comments</label> 
                                        <textarea name="thread_comments"class="form-control" placeholder="Thread Comments"></textarea>
                                        
                                    </div> 
                                </div> 
                                <div class="col-md-2"></div> 
                            </div>


                            <div class="row"> 
                 
                                <div class="col-md-2"></div> 
                                 <div class="col-md-4">
                                  <label for="field-1" class="control-label">Thread Photo</label>
                                    <img class="form-control" id="image" src="{{asset('public/threads/threads.jpg')}}" style="height: 150px; width: 150px" />
                                    <input type="file" name="thread_photo" accept="image/*" class="upload" required onchange="readURL(this);">
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
                            <button type="submit" class="btn btn-info waves-effect waves-light">Save Threads</button> 
                             <a href="{{URL::to('/all-threads')}}" class="btn btn-primary waves-effect waves-light" >Back</a>
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
