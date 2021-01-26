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
                            <form method="POST" action="{{URL::to('/save-dmg-product')}}" enctype="multipart/form-data">
                             @csrf

                            <div class="row"> 
                                 <div class="col-md-2"></div> 
                                <div class="col-md-8"> 
                                    <div class="form-group"> 
                                        <label for="field-1" class="control-label">Product Code->Name </label> 
                                       <select id="example-input1-group2" name="prod_code" class="form-control">
                                            @php
                                                $products = DB::table('products')->get(); 
                                            @endphp
                                            <option disabled="" selected="">Select a Product</option>
                                            @foreach($products as $row)
                                                <option value="{{$row->prod_code}}">{{$row->prod_code}}->{{$row->prod_name}}</option>
                                            @endforeach
                                        </select> 
                                    </div> 
                                </div> 
                                @php
                                     
                                @endphp
                               
                                 <div class="col-md-2"></div> 
                            </div> 


                            <div class="row"> 
                                 <div class="col-md-2"></div> 
                                <div class="col-md-4"> 
                                    <div class="form-group"> 
                                        <label for="field-1" class="control-label">Product Quantity</label> 
                                        <input name="prod_qty" type="number" class="form-control" id="field-1" placeholder="Product Quantity"> 
                                    </div> 
                                </div> 
                                <div class="col-md-4"> 
                                    <div class="form-group"> 
                                        <label for="field-1" class="control-label">Decrease From Stock</label> 
                                        <select id="example-input1-group2" name="prod_stock" class="form-control">
                                            <option disabled="" selected="">Decrease From Stock?</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>  
                                    </div> 
                                </div> 
                                 <div class="col-md-2"></div> 
                            </div> 

                        


                             <div class="row"> 
                                <div class="col-md-2"></div> 
                                <div class="col-md-4"> 
                                    <div class="form-group"> 
                                        <label for="field-1" class="control-label">Product Category</label> 
                                            <select class="form-control" name="category_id">
                                                @php
                                                    $cat = DB::table('categories')->get();
                                                    
                                                @endphp
                                                <option disabled="" selected="">Select Product Categroy</option>
                                                @foreach($cat as $row)
                                                    
                                                    <option value="{{$row->category_id}}">{{$row->category_name}}</option>
                                                @endforeach
                                            </select> 
                                    </div> 
                                </div> 

                                <div class="col-md-4"> 
                                    <div class="form-group"> 
                                        <label for="field-1" class="control-label">Product Sub Category</label> 
                                            <select class="form-control" name="sub_cat_id">
                                                @php
                                                    $subcat = DB::table('sub_categories')->get();
                                                    
                                                @endphp
                                                <option disabled="" selected="">Select Product Sub Categroy</option>
                                                @foreach($subcat as $row)
                                                    <option value="{{$row->sub_cat_id}}">{{$row->sub_cat_name}}</option>
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
                                        <label for="field-7" class="control-label">Product Note</label> 
                                        <textarea name="prod_note" class="form-control autogrow" id="field-7" placeholder="Write something about yourself" >           
                                        </textarea> 
                                    </div> 
                                </div> 
                                <div class="col-md-2"></div> 
                            </div>




                            </div> 

                            <div class="row"> 
                              <div class="col-md-2"></div> 
                       <div class="col-md-8">
                          <div class="modal-footer"> 
                            <button type="submit" class="btn btn-info waves-effect waves-light">Save Damage Product</button> 
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

 





@endsection
