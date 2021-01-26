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
                            <h3 class="panel-title">Add Fabrics</h3>
                            
                        </div>
                        <div class="panel-body">
                            <form method="POST" action="{{URL::to('/save-fabric')}}" enctype="multipart/form-data">
                             @csrf

                            <div class="row"> 
                                <div class="col-md-2"></div>
                                <div class="col-md-4"> 
                                    <div class="form-group"> 
                                        <label for="field-1" class="control-label">Style No</label> 
                                        <input name="style_no" type="text" class="form-control" id="field-1" placeholder="Product Code"> 
                                    </div> 
                                </div>

                                 <div class="col-md-4"> 
                                    <div class="form-group"> 
                                        <label for="field-2" class="control-label">Buyer</label> 
                                        <input name="buyer" type="text" class="form-control" id="field-2" placeholder="Product Name"> 
                                    </div> 
                                </div> 

                                <div class="col-md-2"> 
                                    
                                </div> 
                            </div> 

                            <div class="row"> 
                                <div class="col-md-2"></div> 
                                <div class="col-md-4"> 
                                    <div class="form-group"> 
                                        <label for="field-2" class="control-label">Docket No</label> 
                                        <input name="docket_no" type="text" class="form-control" id="field-2" placeholder="Product Name"> 
                                    </div> 
                                </div> 
                                 <div class="col-md-4"> 
                                    <div class="form-group"> 
                                        <label for="field-2" class="control-label">Item Type</label> 
                                        <input name="item" type="number" class="form-control" id="field-2" placeholder="Product Name"> 
                                    </div> 
                                </div> 

                                 <div class="col-md-2"></div> 
                            </div> 

                            <div class="row"> 
                                 <div class="col-md-2"></div> 
                                <div class="col-md-4"> 
                                    <div class="form-group"> 
                                        <label for="field-1" class="control-label">Fabric Color</label> 
                                        <input name="color" type="number" class="form-control" id="field-1" placeholder="Product Quantity"> 
                                    </div> 
                                </div> 
                                <div class="col-md-4"> 
                                    <div class="form-group"> 
                                        <label for="field-1" class="control-label">Fabric Quantiry</label> 
                                        <input name="quantity" type="number" class="form-control" id="field-1" placeholder="When Notify"> 
                                    </div> 
                                </div> 
                                 <div class="col-md-2"></div> 
                            </div> 

                          
                            <div class="row"> 
                                 <div class="col-md-2"></div> 
                                <div class="col-md-4"> 
                                    <div class="form-group"> 
                                        <label for="field-1" class="control-label">Fabric Rolls</label> 
                                        <input name="rolls" type="text" class="form-control" id="field-1" placeholder="Product Brand"> 
                                    </div> 
                                </div> 

                                <div class="col-md-4"> 
                                    <div class="form-group"> 
                                        <label for="field-2" class="control-label">Length of Fabric</label> 
                                        <input name="length" type="text" class="form-control" id="field-2" placeholder="Model No"> 
                                    </div> 
                                </div> 

                                 <div class="col-md-2"></div> 
                            </div> 

                    

                            <div class="row"> 
                                <div class="col-md-2"></div> 
                                    <div class="col-md-4"> 
                                    <div class="form-group"> 
                                        <label for="field-1" class="control-label">Fabric Supplier</label> 
                                            <select class="form-control" name="sup_id">
                                                @php
                                                    $sup = DB::table('suppliers')->get();
                                                    
                                                @endphp
                                                <option disabled="" selected="">Select Fabric Supplier</option>
                                                @foreach($sup as $row)
                                                    <option value="{{$row->sup_id}}">{{$row->sup_name}}</option>
                                                @endforeach
                                            </select> 
                                    </div> 
                                </div>
                                <div class="col-md-4"> 
                                    <div class="form-group"> 
                                        <label for="field-2" class="control-label">Chalan No</label> 
                                        <input name="chalan_no" type="text" class="form-control" id="field-2" placeholder="Chalan No"> 
                                    </div> 
                                </div>
                                <div class="col-md-2"></div>  
                            </div> 

                           

                             

                            <div class="row"> 
                                <div class="col-md-2"></div> 
                                <div class="col-md-4"> 
                                    <div class="form-group"> 
                                        <label for="field-1" class="control-label">Fabric Stored on</label> 
                                            <select class="form-control" name="prod_store_area">
                                                @php
                                                    $sub_store = DB::table('substores')->get();
                                                    
                                                @endphp
                                                <option disabled="" selected="">Select Product Storage area</option>
                                                @foreach($sub_store as $row)
                                                
                                                    <option value="{{$row->substoreid}}">{{$row->substoreName}}</option>
                                                @endforeach
                                            </select> 
                                    </div>  
                                </div> 

                                 <div class="col-md-4"> 
                                    <div class="form-group"> 
                                         <div class="form-group no-margin"> 
                                        <label for="field-7" class="control-label">Fabric Route</label> 
                                         <input name="prod_route" type="text" class="form-control" id="field-2" placeholder="Route"> 
                                    </div> 
                                    </div> 
                                </div>                                

                                <div class="col-md-2"></div> 
                            </div> 

                          

                           <div class="row"> 
                                <div class="col-md-2"></div> 
                                <div class="col-md-8"> 
                                    <div class="form-group no-margin"> 
                                        <label for="field-7" class="control-label">Fabric Construction</label> 
                                        <textarea name="prod_desc" class="form-control autogrow" id="field-7" placeholder="Write something about yourself" >           
                                        </textarea> 
                                    </div> 
                                </div> 
                                <div class="col-md-2"></div> 
                            </div>




                            <div class="row"> 
                 
                                <div class="col-md-2"></div> 
                                 <div class="col-md-4">
                                  <label for="field-1" class="control-label">Fabric Photo</label>
                                    <img class="form-control" id="image" src="{{asset('public/products/product.png')}}" style="height: 150px; width: 150px" />
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
                            <button type="submit" class="btn btn-info waves-effect waves-light">Save Fabric</button> 
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
