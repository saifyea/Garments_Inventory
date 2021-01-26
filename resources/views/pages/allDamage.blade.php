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
                                        <h3 class="panel-title">All Damage Products

                                            <a href="{{URL::to('/add-dmg')}}" class="btn btn-danger btn-sm pull-right">Add Damage</a>
                                            <a href="{{URL::to('/product-dmg-export')}}" class="btn btn-success btn-sm pull-right">Download XLSX</a>
                                            &nbsp;&nbsp; 
                                            <button class="btn btn-sm pull-right btn-info waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal1">Import Products</button>
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
                                                            <th>Damage Qty</th>  
                                                            <th>Date</th>
                                                            <th>Note</th>
                                                            <th>Product Photo</th>

                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        @foreach($prod_data as $row)
                                                        <tr class="gradeX">
                                                            <td >{{$row->prod_code}}</td>
                                                            <td >{{$row->prod_name}}</td>
                                                            <td >{{$row->category_name}}->{{$row->sub_cat_name}}</td>
                                                            <td >{{$row->prod_qty}}</td>
                                                            <td >{{$row->damage_date}}</td>
                                                            <td >{{$row->prod_desc}}</td>
                                                            <td><img src="{{$row->prod_photo}}" style="width:50px; height:50px;"></td>

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
                                        <form method="POST" action="{{URL::to('/import-dmg-products')}}" enctype="multipart/form-data">
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


   


</script>

@endsection
