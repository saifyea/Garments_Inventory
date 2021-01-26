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
                                <h4 class="pull-left page-title">Welcome !</h4>
                                <ol class="breadcrumb pull-right">
                                    <li><a href="{{URL::to('/')}}">{{config('app.name')}}</a></li>
                                    <li class="active">Dashboard</li>
                                </ol>
                            </div>
                        </div>
                        @php
                            
                            
                        @endphp
                        <!-- Start Widget -->
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-info"><i class="glyphicon glyphicon-th"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <span class="counter">{{$docket->count()}}</span>
                                        Total Dockets
                                    </div>
                                    <!-- <div class="tiles-progress">
                                        <div class="m-t-20">
                                            <h5 class="text-uppercase">Dockets Delever <span class="pull-right">60%</span></h5>
                                            <div class="progress progress-sm m-0">
                                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-purple"><i class="ion-ios7-cart"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <span class="counter">{{$docket->count()}}</span>
                                        New orders
                                    </div>
                                    <!-- <div class="tiles-progress">
                                        <div class="m-t-20">
                                            <h5 class="text-uppercase">Orders Completed <span class="pull-right">90%</span></h5>
                                            <div class="progress progress-sm m-0">
                                                <div class="progress-bar progress-bar-purple" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                                    <span class="sr-only">90% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                            
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-success"><i class="glyphicon glyphicon-list-alt"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <span class="counter">{{$docket->sum('order_qty')}}</span>
                                        Total Orders
                                    </div>
                                    <!-- <div class="tiles-progress">
                                        <div class="m-t-20">
                                            <h5 class="text-uppercase">orders Completed <span class="pull-right">60%</span></h5>
                                            <div class="progress progress-sm m-0">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-primary"><i class="ion-android-contacts"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <span class="counter">{{$febrics->count('emp_id')}}</span>
                                        Total Users
                                    </div>
                                    <!-- <div class="tiles-progress">
                                        <div class="m-t-20">
                                            <h5 class="text-uppercase">Active Users <span class="pull-right">57%</span></h5>
                                            <div class="progress progress-sm m-0">
                                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%;">
                                                    <span class="sr-only">95% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div> 
                        <!-- End row-->

                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-info"><i class="glyphicon glyphicon-tasks"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <span class="counter">{{$febrics->sum('fabric_length')}}</span>
                                        Total Fabrics (Mtr)
                                    </div>
                                    <!-- <div class="tiles-progress">
                                        <div class="m-t-20">
                                            <h5 class="text-uppercase">Fabrics Delever <span class="pull-right">60%</span></h5>
                                            <div class="progress progress-sm m-0">
                                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                                    <span class="sr-only">50% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-purple"><i class="glyphicon glyphicon-paperclip"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <span class="counter">{{$thread->sum('ttl_recv_cone')}}</span>
                                        Total Threads
                                    </div>
                                   <!--  <div class="tiles-progress">
                                        <div class="m-t-20">
                                            <h5 class="text-uppercase">Threads Delever <span class="pull-right">90%</span></h5>
                                            <div class="progress progress-sm m-0">
                                                <div class="progress-bar progress-bar-purple" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                                    <span class="sr-only">90% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                            
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-success"><i class="ion-eye"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <span class="counter">{{$accessories->sum('ttl_recv')}}</span>
                                        Total Accessories
                                    </div>
                                    <!-- <div class="tiles-progress">
                                        <div class="m-t-20">
                                            <h5 class="text-uppercase">Accessories Delever <span class="pull-right">60%</span></h5>
                                            <div class="progress progress-sm m-0">
                                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-primary"><i class="glyphicon glyphicon-list"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        <span class="counter">{{$product->sum('prod_qty')}}</span>
                                        Total General Items
                                    </div>
                                   <!--  <div class="tiles-progress">
                                        <div class="m-t-20">
                                            <h5 class="text-uppercase">General Items Delever<span class="pull-right">57%</span></h5>
                                            <div class="progress progress-sm m-0">
                                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: 57%;">
                                                    <span class="sr-only">57% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div> 
                        <!-- End row-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-primary ">
                                    <div class="panel-heading bg-success">
                                        <h4 class="panel-title">today's delevery againist requisition</h4>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                           <!-- INBOX -->
                                            <div class="col-lg-12">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title text-center">General Items</h4>
                                                    </div>
                                                    <div class="panel-body">
                                                        <div class="inbox-widget nicescroll mx-box">
                                                            @foreach($data as $items)
                                                            <a href="{{URL('/single-order/'.$Items->order_id)}}">
                                                                <div class="inbox-item">
                                                                   
                                                                    <p class="inbox-item-text">{{$items->prod_name}}</p>
                                                                    <p class="inbox-item-date">{{$items->quantity}} pcs</p>

                                                                </div>
                                                            </a>
                                                             
                                                            @endforeach
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                        </div>

                                        <div class="col-md-3">
                                           <!-- INBOX -->
                                            <div class="col-lg-12">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title text-center">Accessories</h4>
                                                    </div>
                                                    <div class="panel-body">
                                                        <div class="inbox-widget nicescroll mx-box">
                                                            @foreach($acc_order as $items)
                                                            <a href="{{URL('/ac-single-issue/'.$items->order_id)}}">
                                                                <div class="inbox-item">
                                                                    
                                                                    <p class="inbox-item-text">{{$items->accessories_name}}</p>
                                                                    <p class="inbox-item-date">{{$items->total_products}} {{$items->unit}}</p>

                                                                </div>
                                                            </a>
                                                            
                                                            @endforeach
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                        </div>


                                        <div class="col-md-3">
                                           <!-- INBOX -->
                                            <div class="col-lg-12">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title text-center">Threads</h4>
                                                    </div>
                                                    <div class="panel-body">
                                                        <div class="inbox-widget nicescroll mx-box">
                                                            @foreach($th_order as $items)
                                                            <a href="{{URL('/th-single-issue/'.$items->order_id)}}">
                                                                <div class="inbox-item">
                                                                    <p class="inbox-item-text">{{$items->style_no}}->{{$items->color}}</p>
                                                                    <p class="inbox-item-date">{{$items->quantity}} Cons</p>

                                                                </div>
                                                            </a>
                                                             
                                                            @endforeach
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                        </div>

                                        <div class="col-md-3">
                                           <!-- INBOX -->
                                            <div class="col-lg-12">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title text-center">Fabrics</h4>
                                                    </div>
                                                    <div class="panel-body">
                                                        <div class="inbox-widget nicescroll mx-box">
                                                            @foreach($fa_order as $items)
                                                            <a href="{{URL('/single-issue/'.$items->order_id)}}">
                                                                <div class="inbox-item">
                                                                    <p class="inbox-item-text">{{$items->style_no}}->{{$items->color}}</p>
                                                                    <p class="inbox-item-date">{{$items->quantity}} Mtr</p>

                                                                </div>
                                                            </a>
                                                             
                                                            @endforeach
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> <!-- end col -->
                                        </div>

                                    </div>



                                </div>
                            </div> <!-- end of the row -->


                            <!-- CHAT -->
                            <!-- <div class="col-lg-4">
                                <div class="panel panel-default">
                                    <div class="panel-heading"> 
                                        <h3 class="panel-title">Last 10 Delevery</h3> 
                                    </div> 
                                    <div class="panel-body mx-box"> 
                                        <div class="chat-conversation">
                                            <ul class="conversation-list nicescroll mx-box">
                                                @foreach($data as $items)
                                                <li class="clearfix">
                                                    <div class="chat-avatar">
                                                        <img src="{{$items->prod_photo}}" alt="male">
                                                        
                                                    </div>
                                                    <div class="conversation-text">
                                                        <div class="ctext-wrap">
                                                            <i>{{$items->prod_name}}</i>
                                                            <p>
                                                                {{$items->quantity}}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                 @endforeach
                                            </ul>
                                            
                                        </div>
                                    </div> 
                                </div>
                            </div> --> <!-- end col-->


                            <!-- TODO -->
                            <!-- <div class="col-lg-4">
                                <div class="panel panel-primary" style="min-height: 520px">
                                    <div class="panel-heading"> 
                                        <h3 class="panel-title">Product Need TO Purches</h3> 
                                    </div> 
                                    <div class="panel-body todoapp mx-box "> 
                                        
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Product Name</th>
                                                            <th>Current Stock</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    @php
                                                        $stock_product=DB::table('products')->get()
                                                    @endphp
                                                    <tbody>
                                                        @foreach($stock_product as $items)
                                                        <tr>
                                                            <td>{{$items->prod_name}}</td>
                                                            <td>{{$items->prod_qty}}</td>
                                                            <td><a href="#">Purchas</a></td>
                                                        </tr>
                                                       @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                        
                                        
                                    </div> 
                                </div> -->
                            </div> <!-- end col -->
                        </div> <!-- end row -->

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
