<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Garments Inventory') }}</title>

        <!--- Admin Panal CSS & Script Added from Hare--->
        <link rel="shortcut icon" href="{{asset('public/admin/images/favicon_1.ico')}}">

        <title>Harry-Stock Inventory System</title>


        <!-- Base Css Files -->
        <link href="{{asset('public/admin/css/bootstrap.min.css')}}" rel="stylesheet" />

        <!-- Font Icons -->
        <link href="{{asset('public/admin/assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
        <link href="{{asset('public/admin/assets/ionicon/css/ionicons.min.css')}}" rel="stylesheet" />
        <link href="{{asset('public/admin/css/material-design-iconic-font.min.css')}}" rel="stylesheet">

        <!-- animate css -->
        <link href="{{asset('public/admin/css/animate.css')}}" rel="stylesheet" />

        <!-- Waves-effect -->
        <link href="{{asset('public/admin/css/waves-effect.css')}}" rel="stylesheet">
        <link href="{{asset('public/admin/assets/select2/select2.css')}}" rel="stylesheet" type="text/css" />

        <!-- {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> --}} -->


   

         <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css" rel="stylesheet" type="text/css" />

     
        

        <!-- Plugin Css-->
        <link rel="stylesheet" href="{{asset('public/admin/assets/magnific-popup/magnific-popup.css')}}" />
        <link rel="stylesheet" href="{{asset('public/admin/assets/jquery-datatables-editable/datatables.css')}}" />

        <!-- Custom Files -->
        <link href="{{asset('public/admin/css/helper.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('public/admin/css/style.css')}}" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

     <!--   {{--  <script src="{{asset('public/admin/js/modernizr.min.js')}}"></script> --}} -->



        <!--- Admin Panael CSS added end here-->

        <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">


</head>
    
 <body class="fixed-left">
        
        <!-- Begin page -->
        <div id="wrapper">
            @guest
                            
            @else
                           
            <!-- Top Bar Start -->
            <div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="{{Route('home')}}" class="logo"><i class="md md-terrain"></i> <span>{{ config('app.name', 'Garments Inventory') }}</span></a>
                    </div>
                </div>
                <!-- Button mobile view to collapse sidebar menu -->
                <div class="navbar navbar-default" role="navigation">
                    <div class="container">
                        <div class="">
                            <div class="pull-left">
                                <button class="button-menu-mobile open-left">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <span class="clearfix"></span>
                            </div>

                            <form class="navbar-form pull-left" role="search" method="get" action="{{URL::to('search')}}">
                                {{csrf_field()}}
                                <div class="form-group">
                                   {{--  <div class="form-group"> 
                                        <select class="form-control" name="accessoris_name">
                                            <option value="Accessories">Accessories</option>
                                            <option value="Accessories">Threads</option>
                                            <option value="Accessories">Threads</option>
                                        </select> 
                                    </div>  --}}
                                    <input type="text" name="search" class="form-control search-bar" placeholder="Type here for search...">
                                </div>
                                <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                            </form>
                                 @php
                                        $stock_product=DB::table('products')->where('prod_qty','<=','prod_notify')->get();
                                        $qty=1;
                                       
                                    @endphp
   
                            <ul class="nav navbar-nav navbar-right pull-right">
                                <li class="dropdown hidden-xs">
                                    <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                        @foreach($stock_product as $row)
                                        <i class="md md-notifications"></i> <span class="badge badge-xs badge-danger">{{$qty++}}</span>
                                        @endforeach
                                    </a>
                                   
                                    <ul class="dropdown-menu dropdown-menu-lg">
                                        <li class="text-center notifi-title">Items Need to purches</li>
                                        <li class="list-group">
                                            @foreach($stock_product as $items)
                                           <!-- list item-->
                                           <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left">
                                            {{-- <em class="fa fa-user-plus fa-2x text-info"></em> --}}
                                                     <img  id="image" src="{{asset($items->prod_photo)}}" style="height: 40px; width: 40px" />
                                                 </div>
                                                 <div class="media-body clearfix">
                                                    <div class="media-heading">{{$items->prod_name}}</div>
                                                    <p class="m-0">
                                                       <small>Current Stock: {{$items->prod_qty}} Pcs </small>
                                                    </p>
                                                 </div>
                                              </div>
                                           </a>
                                           @endforeach
                                           {{-- <!-- list item-->
                                            <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left">
                                                    <em class="fa fa-diamond fa-2x text-primary"></em>
                                                 </div>
                                                 <div class="media-body clearfix">
                                                    <div class="media-heading">New settings</div>
                                                    <p class="m-0">
                                                       <small>There are new settings available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                            </a>
                                            <!-- list item-->
                                            <a href="javascript:void(0);" class="list-group-item">
                                              <div class="media">
                                                 <div class="pull-left">
                                                    <em class="fa fa-bell-o fa-2x text-danger"></em>
                                                 </div>
                                                 <div class="media-body clearfix">
                                                    <div class="media-heading">Updates</div>
                                                    <p class="m-0">
                                                       <small>There are
                                                          <span class="text-primary">2</span> new updates available</small>
                                                    </p>
                                                 </div>
                                              </div>
                                            </a> --}}
                                           <!-- last list item -->
                                            <a href="javascript:void(0);" class="list-group-item">
                                              <small>See all Required Items</small>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="hidden-xs">
                                    <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="md md-crop-free"></i></a>
                                </li>
                                <li class="hidden-xs">
                                    <a href="#" class="right-bar-toggle waves-effect waves-light"><i class="md md-chat"></i></a>
                                </li>
                                @php

                                @endphp
                                <li class="dropdown">
                                    <a href="" class="dropdown-toggle profile" data-toggle="dropdown" aria-expanded="true"><img src="{{URL::to('public/admin/images/users/avatar-1.jpg')}}" alt="user-img" class="img-circle"> </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0)"><i class="md md-face-unlock"></i> Profile</a></li>
                                        <li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>
                                        <li><a href="javascript:void(0)"><i class="md md-lock"></i> Lock screen</a></li>


                                        <li><a href="{{ route('logout') }}"onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="md md-settings-power"></i> Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                        </form>

                                        </li>

                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
                            <li>
                                <a href="{{Route('home')}}" class="waves-effect active"><i class="md md-home"></i><span>Dashboard </span></a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="glyphicon glyphicon-briefcase"></i><span>Docket Manage</span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul style="">
                                    <li><a href="{{URL::to('/add-docket')}}"><i class="glyphicon glyphicon-tasks"></i><span>Add Docket</span></a></li>
                                    <li><a href="{{URL::to('/all-dockets')}}"><i class="fa fa-puzzle-piece"></i><span>All Dockets</span></a></li>
                                </ul>
                            </li>
                            
                           {{--  <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="fa fa-truck"></i><span> Manage Purchase </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul>
                                     <li class="has_sub">
                                        <a href="javascript:void(0);" class="waves-effect"><i class="glyphicon glyphicon-gift"></i><span>Suppliers</span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                        <ul style="">
                                            <li><a href="{{url::to('/supplier')}}"><i class="glyphicon glyphicon-plus"></i><span>Add Supplier</span></a></li>
                                            <li><a href="{{URL::to('/allSupplier')}}"><i class="glyphicon glyphicon-briefcase"></i><span>Manage Supplier</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="has_sub">
                                        <a href="javascript:void(0);" class="waves-effect"><i class="glyphicon glyphicon-credit-card"></i><span>Purchase</span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                        <ul style="">
                                            <li><a href="javascript:void(0);"><i class="glyphicon glyphicon-shopping-cart"></i><span>New Purchase</span></a></li>
                                            <li><a href="javascript:void(0);"><i class="glyphicon glyphicon-th-list"></i><span>Purchase Histry</span></a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
 --}}
                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="glyphicon glyphicon-th-large"></i><span> Generel Items </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul>
                                   
                                    <li><a href="{{URL::to('/add-product')}}"><i class="glyphicon glyphicon-plus"></i><span>Add Item</span></a></li>
                                    <li><a href="{{URL::to('/product')}}"><i class="glyphicon glyphicon-th-list"></i><span>Manage Items</span></a></li>
                                    <li><a href="{{URL::to('/barcode')}}"><i class="glyphicon glyphicon-barcode"></i><span>Barcode Print</span></a></li>
                                    <li><a href="{{URL::to('/all-damage-products')}}"><i class="glyphicon glyphicon-trash"></i><span>Demage Items</span></a></li>

                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="glyphicon glyphicon-shopping-cart"></i><span>Delever General Item </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul>
                                   
                                    <li><a href="{{URL::to('/add-order')}}" ><i class="glyphicon glyphicon-plus"></i><span>Add Order</span></a></li>
                                    <li><a href="{{URL::to('/all-order')}}"><i class="glyphicon glyphicon-briefcase"></i><span>Manage Order</span></a></li>
                                    {{-- <li><a href="javascript:void(0);"><i class="glyphicon glyphicon-check"></i><span>Manage Invoice</span></a></li> --}}

                                </ul>
                            </li>




                             <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="glyphicon glyphicon-th"></i><span> Febric Managment </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul>
                                   
                                    <li><a href="{{URL::to('/add-fabric')}}"><i class="glyphicon glyphicon-plus"></i><span>Add Fabric</span></a></li>
                                    <li><a href="{{URL::to('/issue-fabric')}}"><i class="glyphicon glyphicon-tasks"></i><span>Issue Fabrics</span></a></li>
                                    <li><a href="{{URL::to('/issued-fabric')}}"><i class="glyphicon glyphicon-tasks"></i><span>Issued Fabrics</span></a></li>
                                    <li><a href="{{URL::to('/all-fabric')}}"><i class="fa fa-puzzle-piece"></i><span>Stock Fabrics</span></a></li>

                                    
                                </ul>
                            </li>
                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="glyphicon glyphicon-sort-by-attributes"></i><span> Thread Managment </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul>
                                   
                                     <li><a href="{{URL::to('/add-thread')}}"><i class="glyphicon glyphicon-plus"></i><span>Add Thread</span></a></li>
                                    <li><a href="{{URL::to('/issue-thread')}}"><i class="glyphicon glyphicon-tasks"></i><span>Issue Threads</span></a></li>
                                    <li><a href="{{URL::to('/issued-thread')}}"><i class="glyphicon glyphicon-tasks"></i><span>Issued Threads</span></a></li>
                                    <li><a href="{{URL::to('/all-thread')}}"><i class="fa fa-puzzle-piece"></i><span>Stock Threads</span></a></li>

                                    
                                </ul>
                            </li>
                             <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="glyphicon glyphicon-filter"></i><span>Chamicals</span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul>
                                   
                                    <li><a href="{{URL::to('/add-chamical')}}"><i class="glyphicon glyphicon-plus"></i><span>Add Chamical</span></a></li>
                                    <li><a href="{{URL::to('/issue-chamical')}}"><i class="glyphicon glyphicon-tasks"></i><span>Issue Chamical</span></a></li>
                                    <li><a href="{{URL::to('/issued-chamical')}}"><i class="glyphicon glyphicon-tasks"></i><span>Issued Chamicals</span></a></li>
                                    <li><a href="{{URL::to('/all-chamical')}}"><i class="fa fa-puzzle-piece"></i><span>Stock Chamicals</span></a></li>

                                    
                                </ul>
                            </li>


                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="glyphicon glyphicon-compressed"></i><span> Accessories </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul>
                                   
                                    <li><a href="{{URL::to('/add-Accessories')}}"><i class="glyphicon glyphicon-plus"></i><span>Add Accessories</span></a></li>
                                    <li><a href="{{URL::to('/issue-Accessories')}}"><i class="glyphicon glyphicon-tasks"></i><span>Issue Accessories</span></a></li>
                                    <li><a href="{{URL::to('/issued-Accessories')}}"><i class="glyphicon glyphicon-tasks"></i><span>Issued Accessories</span></a></li>
                                    <li><a href="{{URL::to('/all-Accessories')}}"><i class="fa fa-puzzle-piece"></i><span>Stock Accessories</span></a></li>

                                    
                                </ul>

                                <!-- <ul>
                                   
                                    <li class="has_sub">
                                        <a href="javascript:void(0);" class="waves-effect"><i class="glyphicon glyphicon-indent-left"></i><span>Zipper</span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                        <ul style="">
                                            <li><a href="{{URL::to('/store')}}"><i class="glyphicon glyphicon-tasks"></i><span>Add Zipper</span></a></li>
                                            <li><a href="{{URL::to('/substore')}}"><i class="glyphicon glyphicon-tasks"></i><span>Used Zipper</span></a></li>
                                            <li><a href="{{URL::to('/department')}}"><i class="fa fa-puzzle-piece"></i><span>Damage Zipper</span></a></li>
                                            <li><a href="{{URL::to('/department')}}"><i class="fa fa-puzzle-piece"></i><span>Stock Zipper</span></a></li>
                                        </ul>
                                    </li>

                                    <li class="has_sub">
                                        <a href="javascript:void(0);" class="waves-effect"><i class="glyphicon glyphicon-indent-left"></i><span>Labels</span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                        <ul style="">
                                            <li><a href="{{URL::to('/store')}}"><i class="glyphicon glyphicon-tasks"></i><span>Add Label</span></a></li>
                                            <li><a href="{{URL::to('/substore')}}"><i class="glyphicon glyphicon-tasks"></i><span>Used Labels</span></a></li>
                                            <li><a href="{{URL::to('/department')}}"><i class="fa fa-puzzle-piece"></i><span>Damage Labels</span></a></li>
                                            <li><a href="{{URL::to('/department')}}"><i class="fa fa-puzzle-piece"></i><span>Stock Labels</span></a></li>
                                        </ul>
                                    </li>

                                     <li class="has_sub">
                                        <a href="javascript:void(0);" class="waves-effect"><i class="glyphicon glyphicon-indent-left"></i><span>Fabrics</span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                        <ul style="">
                                            <li><a href="{{URL::to('/store')}}"><i class="glyphicon glyphicon-tasks"></i><span>Add Fabric</span></a></li>
                                            <li><a href="{{URL::to('/substore')}}"><i class="glyphicon glyphicon-tasks"></i><span>Used Fabrics</span></a></li>
                                            <li><a href="{{URL::to('/department')}}"><i class="fa fa-puzzle-piece"></i><span>Damage Fabrics</span></a></li>
                                            <li><a href="{{URL::to('/department')}}"><i class="fa fa-puzzle-piece"></i><span>Stock Fabrics</span></a></li>
                                        </ul>
                                    </li>

                                </ul> -->
                            </li>

                            

                             <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="glyphicon glyphicon-signal"></i><span> Reports </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul>

                                    <li><a href="{{URL::to('/stock-reports')}}"><i class="glyphicon glyphicon-list"></i><span>In House Report</span></a></li>
                                    <li><a href="{{URL::to('/DeleveryReports')}}"><i class="glyphicon glyphicon-list-alt"></i><span>Delevery Reports</span></a></li>
                                   {{--  <li><a href="javascript:void(0);"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                        <span>Purchase Report</span></a>
                                    </li> --}}

                                    <li class="has_sub">
                                        <a href="javascript:void(0);" class="waves-effect"><i class="glyphicon glyphicon-indent-left"></i><span>Stock Reports</span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                        <ul style="">
                                            <li><a href="{{URL::to('/product')}}"><i class="glyphicon glyphicon-tasks"></i><span>General Itmes</span></a></li> 
                                            <li><a href="{{URL::to('/all-fabric')}}"><i class="glyphicon glyphicon-signal"></i><span>Fabrics</span></a></li>
                                            <li><a href="{{URL::to('/all-thread')}}"><i class="glyphicon glyphicon-tasks"></i><span>Threads</span></a></li>
                                            <li><a href="{{URL::to('/all-chamical')}}"><i class="glyphicon glyphicon-tasks"></i><span>Chemicals</span></a></li>
                                            <li><a href="{{URL::to('/all-Accessories')}}"><i class="fa fa-puzzle-piece"></i><span>Accessories</span></a></li>
                                            
                                        </ul>
                                    </li>

                                   <!--  <li><a href="{{URL::to('/stockProduct')}}"><i class="fa fa-stack-exchange" aria-hidden="true"></i>
                                        <span>Stock Report</span></a>
                                    </li> -->

                                </ul>
                            </li>

<!---
                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="md md-mail"></i><span> Mail </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{url('/inbox')}}">Inbox</a></li>
                                    <li><a href="email-compose.html">Compose Mail</a></li>
                                    <li><a href="email-read.html">View Mail</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="calendar.html" class="waves-effect"><i class="md md-event"></i><span> Calendar </span></a>
                            </li>

                            
-->
                            <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="fa fa-users"></i><span> Employees </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{URL::to('/employee')}}">Employees</a></li>
                                    <li><a href="{{URL::to('/single-employee')}}">Add Employee</a></li>
                                    
                                </ul>
                            </li>

                             <li class="has_sub">
                                <a href="#" class="waves-effect"><i class="glyphicon glyphicon-cog"></i><span> Settings </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul>
                                   
                                    <li><a href="{{URL::to('/store')}}"><i class="glyphicon glyphicon-tasks"></i><span>Store</span></a></li>
                                    <li><a href="{{URL::to('/substore')}}"><i class="glyphicon glyphicon-tasks"></i><span>Sub Store</span></a></li>
                                    <li><a href="{{URL::to('/department')}}"><i class="fa fa-puzzle-piece"></i><span>Sections</span></a></li>

                                    <li class="has_sub">
                                        <a href="javascript:void(0);" class="waves-effect"><i class="glyphicon glyphicon-indent-left"></i><span>Category</span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                        <ul style="">
                                            <li><a href="{{URL::to('/category')}}"><i class="glyphicon glyphicon-tag"></i><span>Product Category</span></a></li>
                                            <li><a href="{{URL::to('/sub-category')}}"><i class="glyphicon glyphicon-tags"></i><span>Sub Category</span></a></li>
                                        </ul>
                                    </li>
                                     <li class="has_sub">
                                        <a href="javascript:void(0);" class="waves-effect"><i class="glyphicon glyphicon-gift"></i><span>Suppliers</span> <span class="pull-right"><i class="md md-add"></i></span></a>
                                        <ul style="">
                                            <li><a href="{{url::to('/supplier')}}"><i class="glyphicon glyphicon-plus"></i><span>Add Supplier</span></a></li>
                                            <li><a href="{{URL::to('/allSupplier')}}"><i class="glyphicon glyphicon-briefcase"></i><span>Manage Supplier</span></a></li>
                                        </ul>
                                    </li>
                                     <li><a href="{{URL::to('/acc_name')}}"><i class="fa fa-puzzle-piece"></i><span>Accessories Names</span></a></li>
                                </ul>
                            </li>
                              


                            
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End --> 

            @endguest
                    

        <main class="py-4">
            @yield('content')
        </main>
        
    </div>


    <!--admin panel Script added from hare-->

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="{{asset('public/admin/js/jquery.min.js')}}"></script>
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> -->
        <script src="{{asset('public/admin/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('public/admin/js/waves.js')}}"></script>
        <script src="{{asset('public/admin/js/wow.min.js')}}"></script>
        <script src="{{asset('public/admin/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/admin/js/jquery.scrollTo.min.js')}}"></script>
        <script src="{{asset('public/admin/assets/chat/moment-2.2.1.js')}}"></script>
        <script src="{{asset('public/admin/assets/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
        <script src="{{asset('public/admin/assets/jquery-detectmobile/detect.js')}}"></script>
        <script src="{{asset('public/admin/assets/fastclick/fastclick.js')}}"></script>
        <script src="{{asset('public/admin/assets/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('public/admin/assets/jquery-blockui/jquery.blockUI.js')}}"></script>

         <!-- {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> --}} -->

        <!-- flot Chart -->
        <script src="{{asset('public/admin/assets/flot-chart/jquery.flot.js')}}"></script>
        <script src="{{asset('public/admin/assets/flot-chart/jquery.flot.time.js')}}"></script>
        <script src="{{asset('public/admin/assets/flot-chart/jquery.flot.tooltip.min.js')}}"></script>
        <script src="{{asset('public/admin/assets/flot-chart/jquery.flot.resize.js')}}"></script>
        <script src="{{asset('public/admin/assets/flot-chart/jquery.flot.pie.js')}}"></script>
        <script src="{{asset('public/admin/assets/flot-chart/jquery.flot.selection.js')}}"></script>
        <script src="{{asset('public/admin/assets/flot-chart/jquery.flot.stack.js')}}"></script>
        <script src="{{asset('public/admin/assets/flot-chart/jquery.flot.crosshair.js')}}"></script>

        <!-- Counter-up -->
        <script src="{{asset('public/admin/assets/counterup/waypoints.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('public/admin/assets/counterup/jquery.counterup.min.js')}}" type="text/javascript"></script>
        
        <!-- CUSTOM JS -->
        <script src="{{asset('public/admin/js/jquery.app.js')}}"></script>

        <!-- Dashboard -->
        <script src="{{asset('public/admin/js/jquery.dashboard.js')}}"></script>

        <!-- Chat -->
        <script src="{{asset('public/admin/js/jquery.chat.js')}}"></script>

        <!-- Todo -->
        <script src="{{asset('public/admin/js/jquery.todo.js')}}"></script>
        
       <!--  {{-- print area jquery --}} -->
        <script src="{{asset('public/admin/js/jquery.PrintArea.js')}}"></script>

        <script src="{{asset('public/admin/assets/tagsinput/jquery.tagsinput.min.js')}}"></script>
        <script src="{{asset('public/admin/assets/toggles/toggles.min.js')}}"></script>
        <script src="{{asset('public/admin/assets/timepicker/bootstrap-timepicker.min.js')}}"></script>
        <script src="{{asset('public/admin/assets/timepicker/bootstrap-datepicker.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/admin/assets/colorpicker/bootstrap-colorpicker.js')}}"></script>
        
        <script type="text/javascript" src="{{asset('public/admin/assets/jquery-multi-select/jquery.quicksearch.js')}}"></script>
        
        <script type="text/javascript" src="{{asset('public/admin/assets/spinner/spinner.min.js')}}"></script>
        <script src="{{asset('public/admin/assets/select2/select2.min.js')}}" type="text/javascript"></script>


         <!-- Examples -->
    <script src="{{asset('public/admin/assets/magnific-popup/magnific-popup.js')}}"></script>
    <script src="{{asset('public/admin/assets/jquery-datatables-editable/jquery.dataTables.js')}}"></script> 
    <script src="{{asset('public/admin/assets/datatables/dataTables.bootstrap.js')}}"></script>
    <script src="{{asset('public/admin/assets/jquery-datatables-editable/datatables.editable.init.js')}}"></script>

    <!-- Toastr  JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <!-- sweet alerts-->

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!--Morris Chart-->
       <!--  <script src="{{asset('public/admin/assets/morris/morris.min.js')}}"></script>
        <script src="{{asset('public/admin/assets/morris/raphael.min.js')}}"></script>
        <script src="{{asset('public/admin/assets/morris/morris.init.js')}}"></script> -->

    
        
    <!--- Datatable  Scrip-->
        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').dataTable();
            } );
        </script>

        <script type="text/javascript'">

            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 5000
                });
            });


        </script>

    <!--- Toastr Notification Scrip-->
        <script type="text/javascript">
            @if(Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}";
            switch(type){
                case 'info':
                    toastr.info("{{ Session::get('message') }}");
                    break;

                case 'warning':
                    toastr.warning("{{ Session::get('message') }}");
                    break;

                case 'success':
                    toastr.success("{{ Session::get('message') }}");
                    break;

                case 'error':
                    toastr.error("{{ Session::get('message') }}");
                    break;
            }
          @endif
        </script>

       <!--- Sweet Alert Scrip-->
        <script>
            $(document).ready(function() {
                $('#delete').click(function() {
                   Alert('Hellor');
                });

            });


             $("#print").click(function(){

           var mode='iframe';
           var close=mode=="popup";
           var options={mode:mode,popClose:close};
           $("div.print").printArea(options);

        });

        </script>

       <script>
            jQuery(document).ready(function() {
                    
                // Tags Input
                jQuery('#tags').tagsInput({width:'auto'});

                // Form Toggles
                jQuery('.toggle').toggles({on: true});

                // Time Picker
                jQuery('#timepicker').timepicker({defaultTIme: false});
                jQuery('#timepicker2').timepicker({showMeridian: false});
                jQuery('#timepicker3').timepicker({minuteStep: 15});

                // Date Picker
                jQuery('#datepicker').datepicker();
                jQuery('#datepicker-inline').datepicker();
                jQuery('#datepicker-multiple').datepicker({
                    numberOfMonths: 3,
                    showButtonPanel: true
                });
                //colorpicker start

                $('.colorpicker-default').colorpicker({
                    format: 'hex'
                });
                $('.colorpicker-rgba').colorpicker();


                

                //spinner start
                $('#spinner1').spinner();
                $('#spinner2').spinner({disabled: true});
                $('#spinner3').spinner({value:0, min: 0, max: 10});
                $('#spinner4').spinner({value:0, step: 5, min: 0, max: 200});
                //spinner end

                // Select2
                jQuery(".select2").select2({
                    width: '100%'
                });
            });
        </script>

      
    
    <!--admin panel script added end here-->

 <!--  {{-- <script type="text/javascript">
             $(document).ready(function(){
                console.log(test);
                $.ajax({
                    type:'get',
                    url:'{!!URL::to('getproduct')!!}',
                    success:function(){
                        console.log(response);
                    }
                })
              });

        </script> --}} -->
    <!--auto load script -->
    <!-- {{-- <script>
    $(document).ready(function(){

     $('#category_name').keyup(function(){ 
            var query = $(this).val();
            if(query != '')
            {
             var _token = $('input[name="_token"]').val();
             $.ajax({
              url:"{{ url('category/getCategory') }}",
              method:"POST",
              data:{query:query, _token:_token},
              success:function(data){
               //$('#categoryList').fadeIn();  
                        $('#categoryList').html(data);
              }
             });
            }
        });

        $(document).on('click', 'li', function(){  
            $('#category_name').val($(this).text());  
            $('#categoryList').fadeOut();  
        });  

    });
    </script> --}} -->

    <!-- aluto load script end here-->
<!-- @yield('script_content') -->

</body>
</html>
