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
                                        <h3 class="panel-title">Manage Suppliaer<a class="btn btn-sm pull-right btn-primary waves-effect waves-light" href="{{URL::to('/supplier')}}">Add New Supplier</a>
                    
                                        </h3>
                                       
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <table id="datatable" class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Sl</th>
                                                            <th>Supplier Name</th>
                                                            <th>Mobile No</th>
                                                            <th>Email</th>
                                                            <th>Suppliler Details</th>

                                                            <th>Photo</th>
                                                            <th>Action</th>

                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        @foreach($data as $key=>$row)
                                                    
                                                        <tr class="gradeX">

                                                            <td >{{$key+1}}</td>
                                                            <td >{{$row->sup_name}}</td>
                                                            <td >{{$row->sup_mobile}}</td>
                                                            <td >{{$row->sup_email}}</td>
                                                            <td >{{$row->sup_company}}
                                                            </br>{{$row->sup_address}}</td>

                                                            <td><img src="{{$row->sup_photo}}" style="width:50px; height:50px;"></td>

                                                            <td class="actions">
                                                                <a href="{{URL('/single-supplier/'.$row->sup_id)}}" class="on-default view-row"><i class="fa fa-eye"></i></a>                     
                                                                <a href="{{URL('/single-supplierup/'.$row->sup_id)}}" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                                                                
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
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->



@endsection
