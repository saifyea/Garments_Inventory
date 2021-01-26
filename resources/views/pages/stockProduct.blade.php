@extends('layouts.app')
@section('content')
<!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        {{-- <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Datatable</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#">Moltran</a></li>
                                    <li><a href="#">Tables</a></li>
                                    <li class="active">Datatable</li>
                                </ol>
                            </div>
                        </div> --}}

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">All Products<a href="{{URL::to('/product-export')}}" class="btn btn-success btn-sm pull-right">Download XLSX</a>
                                            
                                        </h3>
                                       
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <table id="datatable" class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Product ID</th>
                                                            <th>Product Name</th>
                                                            <th>Product Category</th>
                                                            <th>Brand</th>
                                                            <th>Stock Available</th>
                                                           

                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        @foreach($prod_data as $row)
                                                        <tr class="gradeX">

                                                            <td >{{$row->prod_code}}</td>
                                                            <td >{{$row->prod_name}}</td>
                                                            <td >{{$row->category_name}}->{{$row->sub_cat_name}}</td>

                                                            <td >{{$row->brand}}->{{$row->model_no}}</td>

                                                            <td >{{$row->prod_qty}}</td>

                                                            
                                                        </tr>
                                                      @endforeach
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
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

           <!--  <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog"> 
                    <div class="modal-content"> 
                        <div class="modal-header"> 
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                            <h4 class="modal-title">Entry New Product</h4> 
                        </div> 
                        
                        <div class="modal-body"> 
                            <form method="POST" action="{{URL::to('/add-product')}}" enctype="multipart/form-data">
                                @csrf
                          
                          	<div class="row"> 
                                 <div class="col-md-12">
                                  
                                    <img id="image" src="{{asset('public/admin/images/big/bg.jpg')}}" style="height: 80px; width: 80px" />
                                    <input type="file" name="image" accept="image/*" class="upload" required onchange="readURL(this);">
                                 </div>

                             </div>

                            <div class="row"> 
                                <div class="col-md-6"> 
                                    <div class="form-group"> 
                                        <label for="field-1" class="control-label">Product Code</label> 
                                        <input name="prod_code" type="text" class="form-control" id="field-1" placeholder="John"> 
                                    </div> 
                                </div> 
                                <div class="col-md-6"> 
                                    <div class="form-group"> 
                                        <label for="field-2" class="control-label">Product Name</label> 
                                        <input name="prod_name" type="text" class="form-control" id="field-2" placeholder="Doe"> 
                                    </div> 
                                </div> 
                            </div> 

                            <div class="row"> 
                                <div class="col-md-12"> 
                                    <div class="form-group"> 
                                        <label for="field-1" class="control-label">Product Quantity</label> 
                                        <input name="prod_qty" type="text" class="form-control" id="field-1" placeholder="John"> 
                                    </div> 
                                </div> 
                                
                            </div> 
    							<div class="row"> 
                                <div class="col-md-6"> 
                                    <div class="form-group"> 
                                        <label for="field-1" class="control-label">Product Brand</label> 
                                        <input name="brand" type="text" class="form-control" id="field-1" placeholder="John"> 
                                    </div> 
                                </div> 
                                <div class="col-md-6"> 
                                    <div class="form-group"> 
                                        <label for="field-2" class="control-label">Product Model No</label> 
                                        <input name="model_no" type="text" class="form-control" id="field-2" placeholder="Doe"> 
                                    </div> 
                                </div> 
                            </div> 

                             <div class="row"> 
                                <div class="col-md-6"> 
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
                                <div class="col-md-6"> 
                                     <div class="form-group"> 
                                        <label for="field-2" class="control-label">Chalan No</label> 
                                        <input name="chalan_no" type="text" class="form-control" id="field-2" placeholder="Doe"> 
                                    </div> 
                                </div> 
                            </div> 


                            <div class="row"> 
                                <div class="col-md-12"> 
                                    <div class="form-group no-margin"> 
                                        <label for="field-7" class="control-label">Product Description</label> 
                                        <textarea name="prod_desc" class="form-control autogrow" id="field-7" placeholder="Write something about yourself" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 104px;">           
                                        </textarea> 
                                    </div> 
                                </div> 
                            </div>

                        
                        </div> 
                        <div class="modal-footer"> 
                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button> 
                            <button type="submit" class="btn btn-info waves-effect waves-light">Save</button> 
                        </div> 
                    </form>
                    </div> 
                </div>
        </div><!-- /.modal --> -->


<div id="con-close-modal1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog"> 
                    <div class="modal-content"> 
                        <div class="modal-header"> 
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                            <h4 class="modal-title">Import Products</h4> 
                        </div> 
                         
                        <div class="modal-body"> 

                            <div class="row">
                            <!-- Basic example -->
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    
                                    <div class="panel-body">
                                        <form method="POST" action="{{URL::to('/import-products')}}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Import Excel Data</label>
                                                <input type="file" class="form-control" name="import_file" required id="impordata" >
                                            </div>
                                            <div class="form-group">

                                            <button type="submit" class="btn btn-purple waves-effect waves-light">Upload</button>
                                        </form>

                                    </div><!-- panel-body -->
                                </div> <!-- panel -->
                            </div> <!-- col-->
                    </div> 
                </div>
        </div><!-- /.modal -->

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
