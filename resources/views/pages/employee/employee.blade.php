@extends('layouts.app')

@section('content')

          <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="pull-left page-title">Datatable</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="#">Moltran</a></li>
                                    <li><a href="#">Tables</a></li>
                                    <li class="active">Datatable</li>
                                </ol>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Datatable<button class="btn btn-sm pull-right btn-primary waves-effect waves-light" data-toggle="modal" data-target="#con-close-modal">Add New Employee</button></h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <table id="datatable" class="table table-striped table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Employee ID</th>
                                                            <th>Employee Name</th>
                                                            <th>Designation</th>
                                                            <th>Department</th>
                                                            <th>Actions</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        @foreach($emp_data as $row)
                                                        <tr class="gradeX" id="dataTable">

                                                            <td>{{$row->emp_id}}</td>
                                                            <td>{{$row->emp_name}}</td>
                                                            <td>{{$row->designation}}</td>
                                                            <td>{{$row->emp_department}}</td>
                                                            <td class="actions">
                                                                <a href="{{URL('/single-employee/'.$row->emp_id)}}" class="on-default view-row"><i class="fa fa-eye"></i></a>                     
                                                                <a href="#" class="on-default edit-row"><i class="fa fa-pencil"></i></a>
                                                                <a id="delete" href="{{URL('/delete-employee/'.$row->emp_id)}}"  class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
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

            <div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                <div class="modal-dialog"> 
                    <div class="modal-content"> 
                        <div class="modal-header"> 
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
                            <h4 class="modal-title">Register New Employee</h4> 
                        </div> 
                        
                        <div class="modal-body"> 
                            <form method="POST" action="{{URL::to('/register-employee')}}" enctype="multipart/form-data">
                                @csrf
                              <div class="row"> 
                                 <div class="col-md-12">
                                  
                                {{--     <img id="image" src="#" />
                                    <input type="file" name="image" accept="image/*" class="upload" required onchange="readURL(this);"> --}}
                                     <label for="field-1" class="control-label">Employee Photo</label>
                                    <img class="form-control" id="image" src="{{asset('public/employee/emp_img/photo.png')}}" style="height: 150px; width: 150px" />
                                    <input type="file" name="image" accept="image/*" class="upload" required onchange="readURL(this);">

                                 </div>
                             </div>

                            <div class="row"> 
                                <div class="col-md-6"> 
                                    <div class="form-group"> 
                                        <label for="field-1" class="control-label">Employee ID</label> 
                                        <input name="emp_id" type="text" class="form-control" id="field-1" placeholder="ID"> 
                                    </div> 
                                </div> 
                                <div class="col-md-6"> 
                                    <div class="form-group"> 
                                        <label for="field-2" class="control-label">Employee Name</label> 
                                        <input name="emp_name" type="text" class="form-control" id="field-2" placeholder="Name"> 
                                    </div> 
                                </div> 
                            </div> 

                             <div class="row"> 
                                <div class="col-md-6"> 
                                    <div class="form-group"> 
                                        <label for="field-1" class="control-label">Designaton</label> 
                                        <input name="emp_designation" type="text" class="form-control" id="field-1" placeholder="Designation"> 
                                    </div> 
                                </div> 
                                <div class="col-md-6"> 
                                    <div class="form-group"> 
                                        <label for="field-2" class="control-label">Joining Date</label> 
                                        <input name="join_date" type="date" class="form-control" id="field-2" placeholder="Join Date"> 
                                    </div> 
                                </div> 
                            </div> 

                            
                            <div class="row"> 
                                <div class="col-md-6"> 
                                    <div class="form-group"> 
                                        <label for="field-1" class="control-label">Department</label> 
                                        <input name="emp_department" type="text" class="form-control" id="field-1" placeholder="Department"> 
                                    </div> 
                                </div> 

                                <div class="col-md-6"> 
                                    <div class="form-group no-margin"> 
                                        <label for="field-7" class="control-label">Employee Details</label> 
                                        <textarea name="details" class="form-control" placeholder="About Emplyee if any"></textarea> 
                                        {{-- <textarea name="details" class="form-control autogrow" id="field-7" placeholder="Write something about yourself" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 104px;">           
                                        </textarea>  --}}
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
        </div><!-- /.modal -->

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
    }

</script>

@endsection
