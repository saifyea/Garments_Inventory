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
                <div class="col-sm-12 bg-info">
                    <h4 class="pull-left page-title text-white">POS</h4>
                    <ol class="breadcrumb pull-right text-white">
                        <li><a href="#" class="text-white">Saifyea</a></li>
                        <li class="text-white">{{date('d/m/y')}}</li>
                    </ol>
                </div>
            </div>

            <div class="row">
            	<div class="col-lg-4">

            	</div>
            	<div class="col-lg-8">

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
