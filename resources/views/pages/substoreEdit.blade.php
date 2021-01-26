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
                                        <h3 class="panel-title">Edit Sub Store Name</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                            <!-- Basic example -->
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                   
                                    <div class="panel-body">
                                        <form method="POST" action="{{URL::to('/substore-update/'.$data->substoreid)}}">
                                            @csrf
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Sub Store Name</label>
                                                <input type="text" class="form-control" name="substore" id="exampleInputEmail1" Value="{{$data->substoreName}}">
                                            </div>
                                            <div class="form-group">

                                            <button type="submit" class="btn btn-success waves-effect waves-light">Update</button>
                                            
                                            <a href="{{URL::to('/substore')}}" class="btn btn-info">Cancel</a>
                                        </form>

                                    </div><!-- panel-body -->
                                </div> <!-- panel -->
                            </div> <!-- col-->
                    </div> 



                       

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