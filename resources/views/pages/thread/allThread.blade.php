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
                                        <h3 class="panel-title">Threads in Stock<a href="{{URL::to('/threads-export')}}" class="btn btn-success btn-sm pull-right">Excel</a>
                                            <a href="{{URL::to('/pdf-issue-thread')}}" class="btn btn-danger btn-sm pull-right">PDF</a>
                                            &nbsp;&nbsp; <a  href="{{URL::to('/add-thread')}}" class="btn btn-sm pull-right btn-info waves-effect waves-light">Add Thread</a>
                                        </h3>
                                       
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <table id="datatable" class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Sl</th>
                                                            <th>Thread Code</th>
                                                            <th>Style No</th>
                                                            <th>Buyer</th>
                                                            <th>Count No</th>
                                                            <th>Color</th>
                                                            <th>Thread Type</th>
                                                            <th>Ttl Stock Cones</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                        @php
                                                            $sl=1;
                                                        @endphp
                                                    <tbody>
                                                        @foreach($fdata as $row)
                                                        <tr class="gradeX">
                                                            <td>{{$sl++}}</td>
                                                            <td >{{$row->thread_code}}</td>
                                                            <td >{{$row->style_no}}</td>
                                                            <td >{{$row->buyer}}</td>
                                                            <td >{{$row->count_no}}</td>
                                                            <td >{{$row->color}}</td>
                                                            <td>{{$row->thread_type}}</td>
                                                            <td>{{$row->ttl_recv_cone}}</td>

                                                            <td class="actions">
                                                                <a href="{{URL('/singleThread/'.$row->thread_code)}}" class="on-default view-row"><i class="fa fa-eye fa-2x"></i></a>                     
                                                                 &nbsp; &nbsp;
                                                                <a href="{{URL('/edit-thread/'.$row->thread_code)}}" class="on-default edit-row"><i class="fa fa-pencil fa-2x"></i></a>
                                                    
                                                            </td>
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
  


<div id="con-close-modal1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog"> 
                    <div class="modal-content"> 
                        <div class="modal-header"> 
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                            <h4 class="modal-title">Add New Docket Products</h4> 
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



@endsection
