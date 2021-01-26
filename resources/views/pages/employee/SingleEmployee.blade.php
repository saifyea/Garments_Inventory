@extends('layouts.app')
@section('content')

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    
                @php

                @endphp

                <div class="wraper container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="bg-picture text-center" style="background-image:url('{{asset('public/admin/images/big/bg.jpg')}}')">
                                <div class="bg-picture-overlay"></div>
                                <div class="profile-info-name">
                                    <img src="{{asset($data->emp_image)}}" class="thumb-lg img-circle img-thumbnail" alt="profile-image">
                                    <h3 class="text-white">{{$data->emp_name}}</h3>
                                </div>
                            </div>
                            <!--/ meta -->
                        </div>
                    </div>
                    <div class="row user-tabs">
                        <div class="col-lg-6 col-md-9 col-sm-9">
                            <ul class="nav nav-tabs tabs">
                            <li class="active tab">
                                <a href="#home-2" data-toggle="tab" aria-expanded="false" class="active"> 
                                    <span class="visible-xs"><i class="fa fa-home"></i></span> 
                                    <span class="hidden-xs">About Employee</span> 
                                </a> 
                            </li> 
                            {{-- <li class="tab"> 
                                <a href="#profile-2" data-toggle="tab" aria-expanded="false"> 
                                    <span class="visible-xs"><i class="fa fa-user"></i></span> 
                                    <span class="hidden-xs">Activities</span> 
                                </a> 
                            </li>  --}}
                            <li class="tab"> 
                                <a href="#messages-2" data-toggle="tab" aria-expanded="true"> 
                                    <span class="visible-xs"><i class="fa fa-envelope-o"></i></span> 
                                    <span class="hidden-xs">Issued Items</span> 
                                </a> 
                            </li> 
                            <li class="tab" > 
                                <a href="#settings-2" data-toggle="tab" aria-expanded="false"> 
                                    <span class="visible-xs"><i class="fa fa-cog"></i></span> 
                                    <span class="hidden-xs">Update Employee</span> 
                                </a> 
                            </li> 
                        <div class="indicator"></div></ul> 
                        </div>
                        <!--
                        <div class="col-lg-6 col-md-3 col-sm-3 hidden-xs">
                            <div class="pull-right">
                                <div class="dropdown">
                                    <a data-toggle="dropdown" class="dropdown-toggle btn-rounded btn btn-primary waves-effect waves-light" href="#"> Following <span class="caret"></span></a>
                                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                                        <li><a href="#">Poke</a></li>
                                        <li><a href="#">Private message</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Unfollow</a></li>
                                    </ul>
                                </div>
                              </div>
                        </div>
                        -->
                    </div>
                    <div class="row">
                        <div class="col-lg-12"> 
                        
                        <div class="tab-content profile-tab-content"> 
                            <div class="tab-pane active" id="home-2"> 
                                <div class="row">
                                    <div class="col-md-4">
                                        <!-- Personal-Information -->
                                        <div class="panel panel-default panel-fill">
                                            <div class="panel-heading"> 
                                                <h3 class="panel-title">Personal Information</h3> 
                                            </div> 
                                            <div class="panel-body"> 
                                                <div class="about-info-p">
                                                    <strong>Full Name</strong>
                                                    <br/>
                                                    <p class="text-muted">{{$data->emp_name}}</p>
                                                </div>
                                                <div class="about-info-p">
                                                    <strong>Designation</strong>
                                                    <br/>
                                                    <p class="text-muted">{{$data->designation}}</p>
                                                </div>
                                                <div class="about-info-p">
                                                    <strong>Joining Date</strong>
                                                    <br/>
                                                    <p class="text-muted">{{$data->join_date}}</p>
                                                </div>
                                                <div class="about-info-p m-b-0">
                                                    <strong>Section</strong>
                                                    <br/>
                                                    <p class="text-muted">{{$data->emp_department}}</p>
                                                </div>
                                            </div> 
                                        </div>
                                        <!-- Personal-Information -->

                                        <!-- Languages -->
                                        <div class="panel panel-default panel-fill">
                                            <div class="panel-heading"> 
                                                <h3 class="panel-title">Languages</h3> 
                                            </div> 
                                            <div class="panel-body"> 
                                                <ul>
                                                    <li>English</li>
                                                    <li>Franch</li>
                                                    <li>Greek</li>
                                                </ul>
                                            </div> 
                                        </div>
                                        <!-- Languages -->

                                    </div>


                                    <div class="col-md-8">
                                        <!-- Personal-Information -->
                                        <div class="panel panel-default panel-fill">
                                            <div class="panel-heading"> 
                                                <h3 class="panel-title">Biography</h3> 
                                            </div> 
                                            <div class="panel-body"> 
                                                {{$data->emp_details}}
                                            </div> 
                                        </div>
                                        <!-- Personal-Information -->

                                        <div class="panel panel-default panel-fill">
                                            <div class="panel-heading"> 
                                                <h3 class="panel-title">Items Taken Form Store</h3> 
                                            </div> 
                                            <div class="panel-body"> 
                                                <div class="m-b-15">
                                                    <h5>General Items <span class="pull-right">10 Pcs</span></h5>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-primary wow animated progress-animated" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 10%;">
                                                            <span class="sr-only">60% Complete</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="m-b-15">
                                                    <h5>Accessories <span class="pull-right">50 Pcs</span></h5>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-pink wow animated progress-animated" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                                                            <span class="sr-only">90% Complete</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="m-b-15">
                                                    <h5>Threads <span class="pull-right">1 Cones</span></h5>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-purple wow animated progress-animated" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 01%;">
                                                            <span class="sr-only">80% Complete</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="m-b-0">
                                                    <h5>Chamical <span class="pull-right">5 Liters</span></h5>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-info wow animated progress-animated" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 5%;">
                                                            <span class="sr-only">95% Complete</span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div> 
                                        </div>

                                    </div>

                                </div>
                            </div> 




                            <div class="tab-pane" id="profile-2">
                                <!-- Personal-Information -->
                                <div class="panel panel-default panel-fill">
                                    
                                    <div class="panel-body"> 
                                        <div class="timeline-2">
                                        <div class="time-item">
                                            <div class="item-info">
                                                <div class="text-muted">5 minutes ago</div>
                                                <p><strong><a href="#" class="text-info">John Doe</a></strong> Uploaded a photo <strong>"DSC000586.jpg"</strong></p>
                                            </div>
                                        </div>

                                        <div class="time-item">
                                            <div class="item-info">
                                                <div class="text-muted">30 minutes ago</div>
                                                <p><a href="" class="text-info">Lorem</a> commented your post.</p>
                                                <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                            </div>
                                        </div>

                                        <div class="time-item">
                                            <div class="item-info">
                                                <div class="text-muted">59 minutes ago</div>
                                                <p><a href="" class="text-info">Jessi</a> attended a meeting with<a href="#" class="text-success">John Doe</a>.</p>
                                                <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                            </div>
                                        </div>

                                        <div class="time-item">
                                            <div class="item-info">
                                                <div class="text-muted">5 minutes ago</div>
                                                <p><strong><a href="#" class="text-info">John Doe</a></strong>Uploaded 2 new photos</p>
                                            </div>
                                        </div>

                                        <div class="time-item">
                                            <div class="item-info">
                                                <div class="text-muted">30 minutes ago</div>
                                                <p><a href="" class="text-info">Lorem</a> commented your post.</p>
                                                <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                            </div>
                                        </div>

                                        <div class="time-item">
                                            <div class="item-info">
                                                <div class="text-muted">59 minutes ago</div>
                                                <p><a href="" class="text-info">Jessi</a> attended a meeting with<a href="#" class="text-success">John Doe</a>.</p>
                                                <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                            </div>
                                        </div>
                                    </div>

                                    </div> 
                                </div>
                                <!-- Personal-Information -->
                            </div> 



                            <div class="tab-pane" id="messages-2">
                                <!-- Personal-Information -->
                                <div class="panel panel-default panel-fill">
                                    <div class="panel-heading"> 
                                        <h3 class="panel-title">Items Issued</h3> 
                                    </div> 
                                    <div class="panel-body"> 
                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>#</th>
                                                                        <th>Product Name</th>
                                                                        <th>Product Received on</th>
                                                                        <th>Quantity</th>
                                                                        <th>Delevered By</th>
                                                                    </tr>
                                                                </thead>
                                                                @php
                                                               
                                                                $sl=1;
                                                                //$product2=DB::table('orderdetails')
                                                                       // ->join('products','orderdetails.product_id','products.prod_code')
                                                                       // ->join('orders', function ($join) {
                                                                         //   $join->on('orders.id', '=', 'orderdetails.order_id')
                                                                               //  ->where('orderdetails.emp_id', '=', '0000042');
                                                                       // })
                                                                       // ->get();
                                                                @endphp
                                                                <tbody>
                                                                    @foreach($product2 as $items)

                                                                    <tr>
                                                                        
                                                                        <td>{{$sl++}}</td>
                                                                        <td>{{$items->prod_name}}</td>

                                                                        <td>{{$items->order_date}}</td>
                                                                        <td><span class="label label-info">{{$items->quantity}}</span></td>
                                                                        <td>{{$items->issued_by}}</td>
                                                                        
                                                                    </tr>
                                                                    @endforeach
                                                                    
                                                                </tbody>
                                                            </table>

                                                        </div>

                                    </div> 
                                </div>
                                <!-- Personal-Information -->
                            </div> 


                            <div class="tab-pane" id="settings-2">
                                <!-- Personal-Information -->
                                <div class="panel panel-default panel-fill">
                                    <div class="panel-heading"> 
                                        <h3 class="panel-title">Edit Profile</h3> 
                                    </div> 
                                    <div class="panel-body"> 
                                        <form method="POST" action="{{URL::to('/update-employee/'.$data->emp_id)}}" enctype="multipart/form-data">
                                            @csrf
                                             <div class="form-group">
                                                <label for="FullName">Employee ID</label>
                                                <input type="text" value="{{$data->emp_id}}" id="FullName" class="form-control" name="emp_id">
                                            </div>
                                            <div class="form-group">
                                                <label for="FullName">Full Name</label>
                                                <input type="text" value="{{$data->emp_name}}" id="FullName" class="form-control" name="emp_name">
                                            </div>
                                            <div class="form-group">
                                                <label for="Email">Designation</label>
                                                <input type="test" value="{{$data->designation}}" id="Email" class="form-control" name="emp_designation">
                                            </div>
                                            <div class="form-group">
                                                <label for="Username">Department</label>
                                                <input type="text" value="{{$data->emp_department}}" id="Username" class="form-control" name="emp_department">
                                            </div>
                                            <div class="form-group">
                                                <label for="Password">Joining Date</label>
                                                <input type="text" value="{{$data->join_date}}" id="Username" class="form-control" name="join_date">
                                            </div>
                                            <div class="form-group">
                                                <label for="RePassword">Image</label>
                                                <img id="image" src="#" />
                                                <input type="file" name="image" accept="image/*" class="upload" onchange="readURL(this);">

                                            
                                            </div>
                                            <div class="form-group">
                                                <label for="AboutMe">About Employee</label>
                                                <textarea style="height: 125px;" id="AboutMe" class="form-control" name="details">{{$data->emp_details}}</textarea>
                                            </div>
                                            <button class="btn btn-primary waves-effect waves-light w-md" type="submit">Save</button>
                                        </form>

                                    </div> 
                                </div>
                                <!-- Personal-Information -->
                            </div> 
                        </div> 
                    </div>
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