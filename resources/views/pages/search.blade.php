@extends('layouts.app')

@section('content')

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
                            <h3 class="panel-title">Search Result</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <p>You are locking for:<b> {{$data}}</b></p>

                                    <div class="panel-body">
                                    	<div class="row">
                                    		<div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="table-responsive">
                                                	{{-- @if(empty($search_content->prod_name))
                                                		<h2>Opps! Item not found</h2>
                                                	@else --}}
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>Items Name</th>
                                                                <th>Category</th>
                                                                <th>Available Stock</th>
                                                                <th>Photo</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
															@foreach($search_content as $items)
                                                            <tr>
                                                                <td>{{$items->prod_name}}</td>
                                                                <td >{{$items->category_name}}->{{$items->sub_cat_name}}</td>
                                                                <td>{{$items->prod_qty}}</td>
                                                                <td><img class="form-control" id="image" src="{{asset($items->prod_photo)}}" style="height: 100px; width: 100px" /></td>
                                                            </tr>
                                                          @endforeach  
                                                        </tbody>
                                                    </table>
                                                    {{-- /@endif --}}
                                                </div>
                                            </div>
                                    	</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End row -->


@endsection