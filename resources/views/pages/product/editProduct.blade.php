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
                            <h3 class="panel-title">Update Product</h3>
                        </div>
                        <div class="panel-body">
                            <form method="POST" action="{{URL::to('/update-product/'.$prod_data->prod_code)}}" enctype="multipart/form-data">
                             @csrf

                            <div class="row"> 
                                <div class="col-md-1"></div>
                                <div class="col-md-3">
                                    <div class="col-md-12">
                                        <label for="field-1" class="control-label">Product Photo</label>
                                        <img class="form-control" id="image" src="{{asset($prod_data->prod_photo)}}" style="height: 150px; width: 150px" />
                                        <input type="file" name="image" accept="image/*" class="upload" onchange="readURL(this);">
                                    </div>
                                    <div class="col-md-12">
                                        <br>
                                        <label for="field-1" class="control-label">Barcode</label>
                                        <span style="height:20px;">{!! DNS1D::getBarcodeHTML($prod_data->prod_code, "C39") !!}</span>
                                        <span class="text-center" >{{$prod_data->prod_code}}</span>
                                        
                                    </div>
                                </div>
                                <input type="hidden" name="actual_qty" value="{{$prod_data->actual_qty}}">
                                <div class="col-md-8">
                                    <div class="col-md-6"> 
                                        <div class="form-group"> 
                                            <label for="field-1" class="control-label">Product Code</label> 
                                            <input name="prod_code" type="text" class="form-control" id="field-1" value="{{$prod_data->prod_code}}"> 
                                        </div> 
                                    </div>
                                    <div class="col-md-6"> 
                                        <div class="form-group"> 
                                            <label for="field-2" class="control-label">Product Name</label> 
                                            <input name="prod_name" type="text" class="form-control" id="field-2" value="{{$prod_data->prod_name}}"> 
                                        </div> 
                                    </div>

                                     <div class="col-md-6"> 
                                        <div class="form-group"> 
                                            <label for="field-1" class="control-label">Product Brand</label> 
                                            <input name="brand" type="text" class="form-control" id="field-1" value="{{$prod_data->brand}}"> 
                                        </div> 
                                    </div> 

                                    <div class="col-md-6"> 
                                        <div class="form-group"> 
                                            <label for="field-2" class="control-label">Product Model No</label> 
                                            <input name="model_no" type="text" class="form-control" id="field-2" value="{{$prod_data->model_no}}"> 
                                        </div> 
                                    </div> 
                                   {{--  @php
                                        $data=DB::table('Product')->where('prod_code',$prod_code)->get();
                                    @endphp --}}

                                    @if($prod_data->actual_qty!=$prod_data->prod_qty)
                                    <div class="col-md-6"> 
                                        <div class="form-group"> 
                                            <label for="field-1" class="control-label">Product Quantity</label> 
                                            <input name="prod_qty" disabled="" type="text" class="form-control" id="field-1" value="{{$prod_data->prod_qty}}"> 
                                            <input name="prod_qty" type="hidden" class="form-control" id="field-1" value="{{$prod_data->prod_qty}}"> 
                                        </div> 
                                    </div> 
                                    @else
                                     <div class="col-md-6"> 
                                        <div class="form-group"> 
                                            <label for="field-1"  class="control-label">Product Quantity</label> 
                                            <input name="prod_qty" type="text" class="form-control" id="field-1" value="{{$prod_data->prod_qty}}"> 
                                        </div> 
                                    </div> 
                                    @endif

                                   

                                    <div class="col-md-3"> 
                                        <div class="form-group"> 
                                            <label for="field-1" class="control-label">Product Notify</label> 
                                            <input name="prod_notify" type="text" class="form-control" id="field-1" value="{{$prod_data->prod_notify}}"> 
                                        </div> 
                                    </div> 
                                    <div class="col-md-3"> 
                                        <div class="form-group"> 
                                            <label for="field-1" class="control-label">Product Price</label> 
                                            <input name="prod_price" type="text" class="form-control" id="field-1" value="{{$prod_data->prod_price}}"> 
                                        </div> 
                                    </div> 

                                   

                                    <div class="col-md-6"> 
                                        <div class="form-group"> 
                                            <label for="field-1" class="control-label">Product Supplier</label> 
                                                <select class="form-control" name="sup_id">
                                                    @php
                                                        $sup = DB::table('suppliers')->get();
                                                        
                                                    @endphp
                                                   {{--  <option disabled="" selected="">Select Product Supplier</option> --}}
                                                    @foreach($sup as $row)
                                                        <option value="{{$row->sup_id}}" <?php if($prod_data->sup_id==$row->sup_id) {echo "selected";} ?>>{{$row->sup_name}}</option>
                                                    @endforeach
                                                </select> 
                                        </div> 
                                    </div>
                                    <div class="col-md-3"> 
                                        <div class="form-group"> 
                                            <label for="field-2" class="control-label">Receive Date</label> 
                                            <input name="prod_recv" type="date" class="form-control" id="field-2" value="{{$prod_data->prod_recv}}"> 
                                        </div> 
                                    </div>
                                    <div class="col-md-3"> 
                                        <div class="form-group"> 
                                            <label for="field-2" class="control-label">Chalan No</label> 
                                            <input name="chalan_no" type="text" class="form-control" id="field-2" value="{{$prod_data->chalan_no}}"> 
                                        </div> 
                                    </div>


                                     <div class="col-md-6"> 
                                        <div class="form-group"> 
                                            <label for="field-1" class="control-label">Product Category</label> 
                                                <select class="form-control" name="category_id">
                                                    @php
                                                        $cat = DB::table('categories')->get();
                                                        
                                                    @endphp
                                                {{--     <option disabled="" selected="">Select Product Categroy</option> --}}
                                                    @foreach($cat as $row)
                                                        
                                                        <option value="{{$row->category_id}}" <?php if($prod_data->category_id==$row->category_id) {echo "selected";} ?>>{{$row->category_name}}</option>
                                                    @endforeach
                                                </select> 
                                        </div> 
                                    </div> 

                                    <div class="col-md-6"> 
                                        <div class="form-group"> 
                                        <label for="field-1" class="control-label">Product Sub Category</label> 
                                                <select class="form-control" name="sub_cat_id">
                                                    @php
                                                        $subcat = DB::table('sub_categories')->get();
                                                        
                                                    @endphp
                                                    {{-- <option disabled="" selected="">Select Product Sub Categroy</option> --}}
                                                    @foreach($subcat as $row)
                                                        <option value="{{$row->sub_cat_id}}" <?php if($prod_data->sub_cat_id==$row->sub_cat_id) {echo "selected";} ?>>{{$row->sub_cat_name}}</option>
                                                    @endforeach
                                                </select> 
                                        </div> 
                                    </div> 

                                     <div class="col-md-6"> 
                                        <div class="form-group"> 
                                            <label for="field-1" class="control-label">Product Stored on</label> 
                                                <select class="form-control" name="prod_store_area">
                                                    @php
                                                        $sub_store = DB::table('substores')->get();
                                                        
                                                    @endphp
                                                   {{--  <option disabled="" selected="">Select Product Storage area</option> --}}
                                                    @foreach($sub_store as $row)
                                                    
                                                        <option value="{{$row->substoreid}}" <?php if($prod_data->prod_store_area==$row->substoreid) {echo "selected";} ?>>{{$row->substoreName}}</option>
                                                    @endforeach
                                                </select> 
                                        </div>  
                                    </div> 

                                     <div class="col-md-6"> 
                                        <div class="form-group"> 
                                             <div class="form-group no-margin"> 
                                                <label for="field-7" class="control-label">Product Route</label> 
                                                <input name="prod_route" type="text" class="form-control" id="field-2" value="{{$prod_data->prod_route}}"> 
                                            </div> 
                                        </div> 
                                    </div>   

                                     <div class="col-md-12"> 
                                        <div class="form-group no-margin"> 
                                            <label for="field-7" class="control-label">Product Description</label> 
                                            <textarea name="prod_desc" class="form-control autogrow" id="field-7" > {{$prod_data->prod_desc}}          
                                            </textarea> 
                                        </div> 
                                    </div> 


                                 </div>
                            </div> 


                            

                            </div> 

                                <div class="row"> 
                                   
                                   <div class="col-md-12">
                                      <div class="modal-footer"> 
                                        <button type="submit" class="btn btn-info waves-effect waves-light">Update Product</button> 
                                        
                                    </div>
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
