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
                        <!-- <div class="panel-heading">
                            <h3 class="panel-title ">Veiw Stock Reprots</h3>
                            
                        </div> -->
                         <div class="col-lg-12 "> 
                                <ul class="nav nav-tabs navtab-bg nav-justified " style="background:#1DB9DF"> 
                                    <li class="active"> 
                                        <a href="#general_items" data-toggle="tab" aria-expanded="false"> 
                                            <span class="visible-xs"><i class="fa fa-home"></i></span> 
                                            <span class="hidden-xs">General Items</span> 
                                        </a> 
                                    </li> 
                                    <li class=""> 
                                        <a href="#fabrics" data-toggle="tab" aria-expanded="true"> 
                                            <span class="visible-xs"><i class="fa fa-user"></i></span> 
                                            <span class="hidden-xs">Fabrics</span> 
                                        </a> 
                                    </li> 
                                    <li class=""> 
                                        <a href="#threads" data-toggle="tab" aria-expanded="false"> 
                                            <span class="visible-xs"><i class="fa fa-envelope-o"></i></span> 
                                            <span class="hidden-xs">Threads</span> 
                                        </a> 
                                    </li> 
                                    <li class=""> 
                                        <a href="#chamicals" data-toggle="tab" aria-expanded="false"> 
                                            <span class="visible-xs"><i class="fa fa-cog"></i></span> 
                                            <span class="hidden-xs">Chamicals</span> 
                                        </a> 
                                    </li>
                                    <li class=""> 
                                        <a href="#accessories" data-toggle="tab" aria-expanded="false"> 
                                            <span class="visible-xs"><i class="fa fa-cog"></i></span> 
                                            <span class="hidden-xs">Accessories</span> 
                                        </a> 
                                    </li> 
                                    <li class=""> 
                                        <a href="#dockets" data-toggle="tab" aria-expanded="false"> 
                                            <span class="visible-xs"><i class="fa fa-cog"></i></span> 
                                            <span class="hidden-xs">Dockets</span> 
                                        </a> 
                                    </li>  
                                </ul>

                                <div class="tab-content"> 
                                    <div class="tab-pane active" id="general_items"> 
                                        <div class="row">
                                            <div class="col-md-2"></div>
                                            <div class="col-md-8">
                                               <form action="{{URL::to('/reports-genersl-items')}}" method="GET">
                                                @csrf
                                            
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h3 class="panel-title" >In House Report of General Itmes</h3>
                                                    </div>
                                                    <div class="panel-body">
                                                        <div class="row">  
                                                            <div class="col-md-3">

                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="input-group">
                                                                    <span class="input-group-btn">
                                                                        <button type="button" class="btn waves-effect waves-light btn-info">Categories</button>
                                                                    </span>
                                                                        <select id="example-input1-group2" name="category" class="form-control">
                                                                            @php
                                                                                $employee = DB::table('categories')->get(); 
                                                                            @endphp
                                                                            <option selected="" value="all">All Items</option>
                                                                            @foreach($employee as $row)
                                                                                <option value="{{$row->category_name}}">{{$row->category_name}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br><br>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="input-group">
                                                                    <span class="input-group-btn">
                                                                        <button type="button" class="btn waves-effect waves-light btn-primary">From Date</button>
                                                                    </span>
                                                                        <input  class="form-control" type="date" name="start_date" required="">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="input-group">
                                                                    <span class="input-group-btn">
                                                                        <button type="button" class="btn waves-effect waves-light btn-primary">Till Date</button>
                                                                    </span>
                                                                        <input  class="form-control" type="date" name="end_date" required="">
                                                                </div>
                                                            </div>
                                                        </div><br>
                                                        <div class="modal-footer"> 
                                                             <button type="submit" class="btn btn-info w-md waves-effect waves-light pull-right" style="text-align: center;">View Reports</button>
                                                        </div>
                                                    </div> <!-- panel-body -->
                                                </div> <!-- panel -->
                                            </form>
                                            </div>
                                            <div class="col-md-2"></div>
                                        </div>
                                    </div> 
                                    <!-- end of General Items reprots -->
                                    <div class="tab-pane " id="fabrics"> 
                                        <div class="row">
                                            <div class="col-md-2"></div>
                                            <div class="col-md-8">
                                               <form action="{{URL::to('/reports-fabrics')}}" method="GET">
                                                @csrf
                                            
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h3 class="panel-title" >In House Fabrics Reports</h3>
                                                    </div>
                                                    <div class="panel-body">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="input-group">
                                                                    <span class="input-group-btn">
                                                                        <button type="button" class="btn waves-effect waves-light btn-primary">From Date</button>
                                                                    </span>
                                                                        <input  class="form-control" type="date" name="start_date" required="">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="input-group">
                                                                    <span class="input-group-btn">
                                                                        <button type="button" class="btn waves-effect waves-light btn-primary">Till Date</button>
                                                                    </span>
                                                                        <input  class="form-control" type="date" name="end_date" required="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="modal-footer"> 
                                                             <button type="submit" class="btn btn-info w-md waves-effect waves-light pull-right" style="text-align: center;">View Reports</button>
                                                        </div>
                                                    </div> <!-- panel-body -->
                                                </div> <!-- panel -->
                                            </form>
                                            </div>
                                            <div class="col-md-2"></div>
                                        </div> <!-- End of Fabrics reports tab -->
                                    </div> 
                                    <div class="tab-pane" id="threads"> 
                                       <div class="row">
                                            <div class="col-md-2"></div>
                                            <div class="col-md-8">
                                               <form action="{{URL::to('/reports-thread')}}" method="GET">
                                                @csrf
                                            
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h3 class="panel-title" >In House Thread Reports</h3>
                                                    </div>
                                                    <div class="panel-body">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="input-group">
                                                                    <span class="input-group-btn">
                                                                        <button type="button" class="btn waves-effect waves-light btn-primary">From Date</button>
                                                                    </span>
                                                                        <input  class="form-control" type="date" name="start_date" required="">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="input-group">
                                                                    <span class="input-group-btn">
                                                                        <button type="button" class="btn waves-effect waves-light btn-primary">Till Date</button>
                                                                    </span>
                                                                        <input  class="form-control" type="date" name="end_date" required="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="modal-footer"> 
                                                             <button type="submit" class="btn btn-info w-md waves-effect waves-light pull-right" style="text-align: center;">View Reports</button>
                                                        </div>
                                                    </div> <!-- panel-body -->
                                                </div> <!-- panel -->
                                            </form>
                                            </div>
                                            <div class="col-md-2"></div>
                                        </div> <!-- End of Threads reports tab -->
                                    </div> 
                                    <div class="tab-pane" id="chamicals"> 
                                        <div class="row">
                                            <div class="col-md-2"></div>
                                            <div class="col-md-8">
                                               <form action="{{URL::to('/reports-chamical')}}" method="GET">
                                                @csrf
                                            
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h3 class="panel-title" >In House Chamical Reports</h3>
                                                    </div>
                                                    <div class="panel-body">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="input-group">
                                                                    <span class="input-group-btn">
                                                                        <button type="button" class="btn waves-effect waves-light btn-primary">From Date</button>
                                                                    </span>
                                                                        <input  class="form-control" type="date" name="start_date" required="">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="input-group">
                                                                    <span class="input-group-btn">
                                                                        <button type="button" class="btn waves-effect waves-light btn-primary">Till Date</button>
                                                                    </span>
                                                                        <input  class="form-control" type="date" name="end_date" required="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="modal-footer"> 
                                                             <button type="submit" class="btn btn-info w-md waves-effect waves-light pull-right" style="text-align: center;">View Reports</button>
                                                        </div>
                                                    </div> <!-- panel-body -->
                                                </div> <!-- panel -->
                                            </form>
                                            </div>
                                            <div class="col-md-2"></div>
                                        </div> <!-- End of Chamical reports tab -->
                                    </div> 
                                    <div class="tab-pane" id="accessories"> 
                                        <div class="row">
                                            <div class="col-md-2"></div>
                                            <div class="col-md-8">
                                               <form action="{{URL::to('/reports-accessories')}}" method="GET">
                                                @csrf
                                            
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h3 class="panel-title" >In House Accessories Reports</h3>
                                                    </div>
                                                    <div class="panel-body">
                                                        <div class="row">  
                                                            <div class="col-md-3">

                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="input-group">
                                                                    <span class="input-group-btn">
                                                                        <button type="button" class="btn waves-effect waves-light btn-info">Accessories</button>
                                                                    </span>
                                                                        <select id="example-input1-group2" name="acc_name" class="form-control">
                                                                            @php
                                                                                $acc = DB::table('acc_names')->get(); 
                                                                            @endphp
                                                                            <option selected="" value="all">All Accessories</option>
                                                                            @foreach($acc as $row)
                                                                                <option value="{{$row->acc_name}}">{{$row->acc_name}}</option>
                                                                            @endforeach
                                                                        </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br><br>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="input-group">
                                                                    <span class="input-group-btn">
                                                                        <button type="button" class="btn waves-effect waves-light btn-primary">From Date</button>
                                                                    </span>
                                                                        <input  class="form-control" type="date" name="start_date" required="">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="input-group">
                                                                    <span class="input-group-btn">
                                                                        <button type="button" class="btn waves-effect waves-light btn-primary">Till Date</button>
                                                                    </span>
                                                                        <input  class="form-control" type="date" name="end_date" required="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="modal-footer"> 
                                                             <button type="submit" class="btn btn-info w-md waves-effect waves-light pull-right" style="text-align: center;">View Reports</button>
                                                        </div>
                                                    </div> <!-- panel-body -->
                                                </div> <!-- panel -->
                                            </form>
                                            </div>
                                            <div class="col-md-2"></div>
                                        </div> <!-- End of Accessories reports tab -->
                                    </div>
                                    <div class="tab-pane" id="dockets"> 
                                        <div class="row">
                                            <div class="col-md-2"></div>
                                            <div class="col-md-8">
                                               <form action="{{URL::to('/reports-dockets')}}" method="GET">
                                                @csrf
                                            
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h3 class="panel-title" >Newly Issued Dockets</h3>
                                                    </div>
                                                    <div class="panel-body">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="input-group">
                                                                    <span class="input-group-btn">
                                                                        <button type="button" class="btn waves-effect waves-light btn-primary">From Date</button>
                                                                    </span>
                                                                        <input  class="form-control" type="date" name="start_date" required="">
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6">
                                                                <div class="input-group">
                                                                    <span class="input-group-btn">
                                                                        <button type="button" class="btn waves-effect waves-light btn-primary">Till Date</button>
                                                                    </span>
                                                                        <input  class="form-control" type="date" name="end_date" required="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="modal-footer"> 
                                                             <button type="submit" class="btn btn-info w-md waves-effect waves-light pull-right" style="text-align: center;">View Reports</button>
                                                        </div>
                                                    </div> <!-- panel-body -->
                                                </div> <!-- panel -->
                                            </form>
                                            </div>
                                            <div class="col-md-2"></div>
                                        </div> <!-- End of Docket reports tab -->
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




</script>

@endsection
