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
                                        <h3 class="panel-title">Registered Sub Category<button class="btn btn-sm pull-right btn-primary waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal">Add New Sub Category</button></h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>Sub Category ID</th>
                                                                <th>Sub Category Name</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        	@foreach($data as $row)
                                                            <tr>
                                                                <td>{{$row->sub_cat_id}}</td>
                                                                <td>{{$row->sub_cat_name}}</td>
                                                                <td><a class="btn btn-sm btn-info" href="{{URL('/subcategory-edit/'.$row->sub_cat_id)}}">Edit</a></td>

                                                            </tr>
                                                           
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- End row -->


                    </div> <!-- container -->
                               
                </div> <!-- content -->

                @php 
   include 'footer.php';
   @endphp

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->

<div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog"> 
                    <div class="modal-content"> 
                        <div class="modal-header"> 
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                            <h4 class="modal-title">Add New Sub Category</h4> 
                        </div> 
                        
                        <div class="modal-body"> 

                            <div class="row">
                            <!-- Basic example -->
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    
                                    <div class="panel-body">
                                        <form method="POST" action="{{URL::to('/add-subcategory')}}" enctype="multipart/form-data">
                               		 		@csrf
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Category Name</label>
                                                <input type="text" class="form-control" name="subcategory" id="exampleInputEmail1" placeholder="Enter The Store Name">
                                            </div>
                                            <div class="form-group">

                                            <button type="submit" class="btn btn-purple waves-effect waves-light">Save</button>
                                        </form>
                                    </div><!-- panel-body -->
                                </div> <!-- panel -->
                            </div> <!-- col-->
                    </div> 
                </div>
        </div><!-- /.modal -->


@endsection