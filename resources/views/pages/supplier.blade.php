@extends('layouts.app')
@section('content')
<!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                    <form method="POST" action="{{URL::to('/add-supplier')}}" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Register Supplier</h3>
                                    </div>
                                    <div class="panel-body">
                                      <div class="row"> 
                                        <div class="col-md-2"></div>
                                         <div class="col-md-8">
                                          
                                            <img id="image" class="form-control" src="{{asset('public/admin/images/big/bg.jpg')}}" style="height: 100px; width: 100px" />
                                            <input type="file" name="image" accept="image/*" class="upload" required onchange="readURL(this);">
                                         </div>
                                         <div class="col-md-2"></div>

                                     </div>

                                    <div class="row"> 
                                         <div class="col-md-2"></div>
                                         <div class="col-md-8">
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Name</label> 
                                                <input name="name" type="text" class="form-control" id="field-1" placeholder="Supplier Name"> 
                                            </div> 
                                        </div> 
                                            <div class="col-md-2"></div>
                                    </div>
                                    <div class="row"> 
                                         <div class="col-md-2"></div>
                                         <div class="col-md-8">
                                            <div class="form-group"> 
                                                <label for="field-2" class="control-label">Mobile</label> 
                                                <input name="mobile" type="text" class="form-control" id="field-2" placeholder="Mobile No"> 
                                            </div> 
                                        </div> 
                                         <div class="col-md-2"></div>
                                    </div> 

                                    <div class="row"> 
                                         <div class="col-md-2"></div>
                                         <div class="col-md-8"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">email</label> 
                                                <input name="email" type="text" class="form-control" id="field-1" placeholder="Email"> 
                                            </div> 
                                        </div> 
                                         <div class="col-md-2"></div>
                                    </div> 
                                    <div class="row"> 
                                         <div class="col-md-2"></div>
                                        <div class="col-md-8"> 
                                            <div class="form-group"> 
                                                <label for="field-1" class="control-label">Company</label> 
                                                <input name="company" type="text" class="form-control" id="field-1" placeholder="Company Name"> 
                                            </div> 
                                        </div> 
                                         <div class="col-md-2"></div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2"></div>
                                        <div class="col-md-8"> 
                                            <div class="form-group"> 
                                                <label for="field-2" class="control-label">Address</label> 
                                                <input name="address" type="text" class="form-control" id="field-2" placeholder="Address"> 
                                            </div> 
                                        </div> 
                                        <div class="col-md-2"></div>
                                    </div> 

                                    <div class="row">
                                        <div class="col-md-2"></div>
                                        <div class="col-md-8"> 
                                            <div class="form-group"> 
                                               <a href="{{URL::to('/allSupplier')}}" class="btn btn-success waves-effect waves-light pull-right"> Back</a>
                                               <button type="submit" class="btn btn-info waves-effect waves-light pull-right">Add Supplier</button> 
                                                
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
