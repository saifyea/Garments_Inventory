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
                            <h3 class="panel-title">Add Fabrics</h3>
                            
                        </div>
                        <div class="panel-body">
                            <form method="POST" action="{{URL::to('/save-fabric')}}" enctype="multipart/form-data">
                             @csrf

                            <div class="row"> 
                                <div class="col-md-2"></div>
                                 <div class="col-md-2"> 
                                    <div class="form-group"> 
                                        <label for="field-2" class="control-label">Fabric Code</label> 
                                        <input name="fabric_code" type="text" class="form-control" id="field-2" placeholder="Fabric Code"> 
                                    </div> 
                                </div> 
                                <div class="col-md-2"> 
                                    <div class="form-group"> 
                                        <label for="field-2" class="control-label">Order No</label> 
                                        <input name="order_no" type="text" class="form-control" id="field-2" placeholder="Order No"> 
                                    </div> 
                                </div> 
                                <div class="col-md-2"> 
                                    <div class="form-group"> 
                                        <label for="field-2" class="control-label">Lot No</label> 
                                        <input name="lot_no" type="text" class="form-control" id="field-2" placeholder="Lot No"> 
                                    </div> 
                                </div> 
                                
                                 <div class="col-md-2"> 
                                    <div class="form-group"> 
                                        <label for="field-2" class="control-label">Shade No</label> 
                                        <input name="shade_no" type="text" class="form-control" id="field-2" placeholder="Shade No"> 
                                    </div> 
                                </div> 

                                <div class="col-md-2"> 
                                </div> 
                            </div> 

                            <div class="row"> 
                                <div class="col-md-2"></div> 
                                 <div class="col-md-2"> 
                                    <div class="form-group"> 
                                        <label for="field-2" class="control-label">Docket No</label> 
                                       <select name="style_no" class="select2" data-placeholder="Choose a Style No">
                                              <option value="#">&nbsp;</option>
                                              @foreach($doc->unique('docket_no') as $items)
                                              <option value="{{$items->docket_no}}">{{$items->docket_no}}</option>
                                              @endforeach
                                            </select>
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
                                              @foreach($doc->unique('style_no') as $items)
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
                                 <div class="col-md-3"> 
                                    <div class="form-group"> 
                                        <label for="field-1" class="control-label">Fabric Color</label> 
                                        <input name="color" type="text" class="form-control" id="field-1" placeholder="Febric Color"> 
                                    </div> 
                                </div> 
                                 <div class="col-md-2"> 
                                    <div class="form-group"> 
                                        <label for="field-1" class="control-label">Fabric Rolls</label> 
                                        <input name="rolls" type="text" class="form-control" id="field-1" placeholder="How many roles"> 
                                    </div> 
                                </div> 


                                 <div class="col-md-2"></div> 
                            </div> 



                            <div class="row"> 
                                 <div class="col-md-2"></div> 
                                
                                
                                
                                <div class="col-md-3"> 
                                    <div class="form-group"> 
                                        <label for="field-1" class="control-label">Fabric Width</label> 
                                        <input name="width" type="number" class="form-control" id="field-1" placeholder="width"> 
                                    </div> 
                                </div> 
                                <div class="col-md-3"> 
                                    <div class="form-group"> 
                                        <label for="field-1" class="control-label">Total Fabric in Mtr</label> 
                                        <input name="fabric_length" type="number" class="form-control" id="field-1" placeholder="Fabric Length"> 
                                    </div> 
                                </div> 
                                <div class="col-md-2"> 
                                    <div class="form-group"> 
                                        <label for="field-1" class="control-label">Price/ (Mtr)</label> 
                                        <input name="price" type="number" class="form-control" id="field-1" placeholder="Price"> 
                                    </div> 
                                </div> 
                                 
                                 <div class="col-md-2"></div>

                            </div> 

                          
                    

                            <div class="row"> 
                                <div class="col-md-2"></div> 
                                    
                                <div class="col-md-3"> 
                                    <div class="form-group"> 
                                        <label for="field-2" class="control-label">Fabric Received Date</label> 
                                        <input name="recv_date" type="date" class="form-control" id="field-2" placeholder="Receiving Date"> 
                                    </div> 
                                </div>
                                <div class="col-md-3"> 
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

                                 <div class="col-md-2"> 
                                    <div class="form-group"> 
                                         <div class="form-group no-margin"> 
                                        <label for="field-7" class="control-label">Fabric Route</label> 
                                         <input name="fabric_route" type="text" class="form-control" id="field-2" placeholder="Route"> 
                                    </div> 
                                    </div> 
                                </div>              

                                <div class="col-md-2"></div>  
                            </div> 

                            <div class="row"> 
                                <div class="col-md-2"></div> 
                                                  

                                <div class="col-md-2"></div> 
                            </div> 

                          

                           <div class="row"> 
                                <div class="col-md-2"></div> 
                                <div class="col-md-8"> 
                                    <div class="form-group no-margin"> 
                                        <label for="field-7" class="control-label">Fabric Construction</label> 
                                        <textarea name="construction" class="form-control autogrow" id="field-7" placeholder="fabric construction" >           
                                        </textarea> 
                                    </div> 
                                </div> 
                                <div class="col-md-2"></div> 
                            </div>


  


                            <div class="row"> 
                 
                                <div class="col-md-2"></div> 
                                 <div class="col-md-4">
                                  <label for="field-1" class="control-label">Fabric Sample Photo</label>
                                    <img class="form-control" id="image" src="{{asset('public/products/product.png')}}" style="height: 150px; width: 150px" />
                                    <input type="file" name="fabric_photo" accept="image/*" class="upload" required onchange="readURL(this);">
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
                             <a href="{{URL::to('/all-fabric')}}" class="btn btn-primary waves-effect waves-light" >Back</a>
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
