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
                        <div class="panel-heading">
                            <h3 class="panel-title">Add Product</h3>
                        </div>
                        <div class="panel-body">
                            <form method="POST" action="{{URL::to('/update-product')}}" enctype="multipart/form-data">
                             @csrf

                            <div class="row"> 
                                <div class="col-md-2"></div>
                                <div class="col-md-8"> 
                                    <div class="form-group"> 
                                        <label for="field-1" class="control-label">Product Code</label> 
                                        <input name="prod_code" type="text" class="form-control" id="field-1" value="{{$prod_data->prod_code}}"> 
                                    </div> 
                                </div> 
                                <div class="col-md-2"> 
                                    
                                </div> 
                            </div> 

                            <div class="row"> 
                                <div class="col-md-2"></div> 
                                <div class="col-md-8"> 
                                    <div class="form-group"> 
                                        <label for="field-2" class="control-label">Product Name</label> 
                                        <input name="prod_name" type="text" class="form-control" id="field-2" value="{{$prod_data->prod_name}}"> 
                                    </div> 
                                </div> 
                                 <div class="col-md-2"></div> 
                            </div> 

                            <div class="row"> 
                                 <div class="col-md-2"></div> 
                                <div class="col-md-8"> 
                                    <div class="form-group"> 
                                        <label for="field-1" class="control-label">Product Quantity</label> 
                                        <input name="prod_qty" type="text" class="form-control" id="field-1" value="{{$prod_data->prod_qty}}"> 
                                    </div> 
                                </div> 
                                 <div class="col-md-2"></div> 
                            </div> 

                          
                            <div class="row"> 
                                 <div class="col-md-2"></div> 
                                <div class="col-md-8"> 
                                    <div class="form-group"> 
                                        <label for="field-1" class="control-label">Product Brand</label> 
                                        <input name="brand" type="text" class="form-control" id="field-1" value="{{$prod_data->brand}}"> 
                                    </div> 
                                </div> 
                                 <div class="col-md-2"></div> 
                            </div> 

                            <div class="row"> 
                                 <div class="col-md-2"></div> 
                                <div class="col-md-8"> 
                                    <div class="form-group"> 
                                        <label for="field-2" class="control-label">Product Model No</label> 
                                        <input name="model_no" type="text" class="form-control" id="field-2" value="{{$prod_data->model_no}}"> 
                                    </div> 
                                </div> 
                                 <div class="col-md-2"></div> 
                            </div>

                            <div class="row"> 
                                <div class="col-md-2"></div> 
                                <div class="col-md-8"> 
                                    <div class="form-group"> 
                                        <label for="field-2" class="control-label">Chalan No</label> 
                                        <input name="chalan_no" type="text" class="form-control" id="field-2" value="{{$prod_data->chalan_no}}"> 
                                    </div> 
                                </div>
                                <div class="col-md-2"></div>  
                            </div> 

                             <div class="row"> 
                                <div class="col-md-2"></div> 
                                <div class="col-md-8"> 
                                    <div class="form-group"> 
                                        <label for="field-1" class="control-label">Product Category</label> 
                                            <select class="form-control" name="prod_cat">
                                                @php
                                                    $cat = DB::table('categories')->get();
                                                    
                                                @endphp
                                                
                                                @foreach($cat as $row)
                                                    <option value="{{$row->category_name}}">{{$row->category_name}}</option>
                                                @endforeach
                                            </select> 
                                    </div> 
                                </div> 
                                <div class="col-md-2"></div> 
                            </div> 

                             <div class="row"> 
                                <div class="col-md-2"></div> 
                                <div class="col-md-8"> 
                                    <div class="form-group"> 
                                        <label for="field-1" class="control-label">Product Sub Category</label> 
                                            <select class="form-control" name="prod_sub_cat">
                                                @php
                                                    $subcat = DB::table('sub_categories')->get();
                                                    
                                                @endphp
                                                
                                                @foreach($subcat as $row)
                                                    <option value="{{$row->sub_cat_name}}">{{$row->sub_cat_name}}</option>
                                                @endforeach
                                            </select> 
                                    </div> 
                                </div> 
                                <div class="col-md-2"></div> 
                            </div> 

                           <div class="row"> 
                                <div class="col-md-2"></div> 
                                <div class="col-md-8"> 
                                    <div class="form-group no-margin"> 
                                        <label for="field-7" class="control-label">Product Description</label> 
                                        <textarea name="prod_desc" class="form-control autogrow" id="field-7" placeholder="Write something about yourself" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 104px;">{{$prod_data->prod_desc}}           
                                        </textarea> 
                                    </div> 
                                </div> 
                                <div class="col-md-2"></div> 
                            </div>




                            <div class="row"> 
                 
                                <div class="col-md-2"></div> 
                                 <div class="col-md-4">
                                  <label for="field-1" class="control-label">Product Photo</label>
                                    <img class="form-control" id="image" src="{{asset($prod_data->prod_photo)}}" style="height: 100px; width: 100px" />
                                    <input type="file" name="image" accept="image/*" class="upload" required onchange="readURL(this);">
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
                            <button type="submit" class="btn btn-info waves-effect waves-light">Save Product</button> 
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
                .width(80)
                .height(80);
        };
        reader.readAsDataURL(input.files[0]);
        //reader.readAsDataURL(input.files[1]);

    }

   


</script>

@endsection
