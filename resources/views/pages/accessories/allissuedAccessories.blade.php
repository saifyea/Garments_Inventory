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
                                        <h3 class="panel-title">All Orders<a href="{{URL::to('/accessories-order-export')}}" class="btn btn-success btn-sm pull-right">Excel</a>
                                            <a href="{{URL::to('/pdf-issue-accessories')}}" class="btn btn-danger btn-sm pull-right">PDF</a>
                                        </h3>
                                       
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <table id="datatable" class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Sl</th>
                                                            <th>Requisition No</th>
                                                            <th>Issued To</th>
                                                            <th>Issue Date</th>
                                                            <th>Accessories Name</th>
                                                            <th>Delivered(Qty)</th>
                                                            <th>Action</th>

                                                        </tr>
                                                    </thead>
                                                        @php
                                                        $sl=1;
                                                        @endphp
                                                    <tbody>
                                                        @foreach($order_data as $row)
                                                        <tr class="gradeX">
                                                            <td>{{$sl++}}</td>
                                                            <td >{{$row->order_id}}</td>
                                                            <td>{{$row->emp_name}}</td>
                                                            <td >{{$row->order_date}}</td>
                                                            <td>{{$row->accessories_name}}</td>
                                                            <td >{{$row->total_products}} {{$row->unit}}</td>
                                                            <td class="actions">
                                                                <a href="{{URL('/ac-single-issue/'.$row->order_id)}}" class="on-default view-row "><i class="fa fa-eye fa-2x"></i></a>                     
                                                               
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
           

   


</script>

@endsection
