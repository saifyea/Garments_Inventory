@extends('layouts.app')
@section('content')
<!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                    <form method="POST" action="{{URL::to('/update-supplier/'.$data->sup_id)}}" enctype="multipart/form-data">
                                 @csrf

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Update Supplier Information</h3>
                                    </div>
                                    <div class="panel-body">
                                      <div class="row"> 
                                        <div class="col-md-2"></div>
                                         <div class="col-md-8">
                                          <label for="field-1" class="control-label">Supplier Image</label></br> 
                                            <img id="image" src="{{asset($data->sup_photo)}}" style="height: 80px; width: 80px" />
                                            <input type="file" name="image" accept="image/*" class="upload" placeholder="change" value="change"  onchange="readURL(this);">
                                         </div>
                                         <div class="col-md-2"></div>

                                     </div>

                                    <div class="row"> 
                                         <div class="col-md-2"></div>
                                         <div class="col-md-8">
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Name</label> 
                                                <input name="name" type="text" class="form-control" id="field-1" value="{{$data->sup_name}}"> 
                                            </div> 
                                        </div> 
                                            <div class="col-md-2"></div>
                                    </div>
                                    <div class="row"> 
                                         <div class="col-md-2"></div>
                                         <div class="col-md-8">
                                            <div class="form-group"> 
                                                <label for="field-2" class="control-label">Mobile</label> 
                                                <input name="mobile" type="text" class="form-control" id="field-2" value="{{$data->sup_mobile}}"> 
                                            </div> 
                                        </div> 
                                         <div class="col-md-2"></div>
                                    </div> 

                                    <div class="row"> 
                                         <div class="col-md-2"></div>
                                         <div class="col-md-8"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">email</label> 
                                                <input name="email" type="text" class="form-control" id="field-1" value="{{$data->sup_email}}"> 
                                            </div> 
                                        </div> 
                                         <div class="col-md-2"></div>
                                    </div> 
                                    <div class="row"> 
                                         <div class="col-md-2"></div>
                                        <div class="col-md-8"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Company</label> 
                                                <input name="company" type="text" class="form-control" id="field-1" value="{{$data->sup_company}}"> 
                                            </div> 
                                        </div> 
                                         <div class="col-md-2"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2"></div>
                                        <div class="col-md-8"> 
                                            <div class="form-group"> 
                                                <label for="field-2" class="control-label">Address</label> 
                                                <input name="address" type="text" class="form-control" id="field-2" value="{{$data->sup_address}}"> 
                                            </div> 
                                        </div> 
                                        <div class="col-md-2"></div>
                                    </div> 

                                    <div class="row">
                                        <div class="col-md-2"></div>
                                        <div class="col-md-8"> 
                                            <div class="form-group"> 
                                               <button type="submit" class="btn btn-success waves-effect waves-light pull-right">Update</button> 
                                            </div> 
                                        </div> 
                                        <div class="col-md-2"></div>
                                    </div> 

                                    
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
                .width(80)
                .height(80);
        };
        reader.readAsDataURL(input.files[0]);
        //reader.readAsDataURL(input.files[1]);

    }

   


</script>

@endsection
