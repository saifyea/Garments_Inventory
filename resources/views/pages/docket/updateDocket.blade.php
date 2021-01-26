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
                            <h3 class="panel-title">Add Docket</h3>
                            
                        </div>
                        <div class="panel-body">
                            <form method="POST" action="{{URL::to('/update-docket/'.$data->docket_no)}}" enctype="multipart/form-data">
                             @csrf

                            <div class="row"> 
                                <div class="col-md-2"></div>
                                <div class="col-md-8"> 
                                    <div class="form-group"> 
                                        <label for="field-1" class="control-label">Docket No</label> 
                                        <input name="docket_no" type="text" class="form-control" id="field-1" value="{{$data->docket_no}}"> 
                                    </div> 
                                </div>

                                <div class="col-md-2"></div> 
                            </div> 
                            <div class="row"> 
                                <div class="col-md-2"></div>
                                <div class="col-md-4"> 
                                    <div class="form-group"> 
                                        <label for="field-1" class="control-label">Style No</label> 
                                        <input name="style_no" type="text" class="form-control" id="field-1" value="{{$data->style_no}}"> 
                                    </div> 
                                </div>

                                 <div class="col-md-4"> 
                                    <div class="form-group"> 
                                        <label for="field-2" class="control-label">Buyer</label> 
                                        <input name="buyer" type="text" class="form-control" id="field-2" value="{{$data->buyer}}"> 
                                    </div> 
                                </div> 
                                <div class="col-md-2"></div> 
                            </div> 

                            <div class="row"> 
                                <div class="col-md-2"></div>
                                <div class="col-md-4"> 
                                    <div class="form-group"> 
                                        <label for="field-1" class="control-label">Po No</label> 
                                        <input name="po_no" type="text" class="form-control" id="field-1" value="{{$data->po_no}}"> 
                                    </div> 
                                </div>

                                 <div class="col-md-4"> 
                                    <div class="form-group"> 
                                        <label for="field-2" class="control-label">Items</label> 
                                        <input name="items" type="text" class="form-control" id="field-2" value="{{$data->items}}"> 
                                    </div> 
                                </div> 
                                <div class="col-md-2"></div> 
                            </div> 


                            <div class="row"> 
                                <div class="col-md-2"></div>
                                <div class="col-md-4"> 
                                    <div class="form-group"> 
                                        <label for="field-1" class="control-label">Order Quantity</label> 
                                        <input name="order_qty" type="number" class="form-control" id="field-1" value="{{$data->order_qty}}"> 
                                    </div> 
                                </div>

                                 <div class="col-md-4"> 
                                    <div class="form-group"> 
                                        <label for="field-2" class="control-label">Shiped Date</label> 
                                        <input name="ship_date" type="date" class="form-control" id="field-2" value="{{$data->ship_date}}"> 
                                    </div> 
                                </div> 
                                <div class="col-md-2"></div> 
                            </div> 



                            <div class="row"> 
                                <div class="col-md-2"></div>
                                <div class="col-md-4"> 
                                    <div class="form-group"> 
                                        <label for="field-1" class="control-label">Fabric Types</label> 
                                        <input name="fabric_type" type="text" class="form-control" id="field-2" value="{{$data->fabric_type}}"> 

                                    </div> 
                                </div>

                                 <div class="col-md-4"> 
                                    <div class="form-group"> 
                                        <label for="field-1" class="control-label">Pocketing</label> 
                                        <input name="pocketing" type="text" class="form-control" id="field-2" value="{{$data->pocketing}}"> 
                                    </div> 
                                </div> 
                                <div class="col-md-2"></div> 
                            </div> 

                            <div class="row"> 
                                <div class="col-md-2"></div>
                                <div class="col-md-3"> 
                                     <div class="form-group"> 
                                        <label for="field-1" class="control-label">Fusing</label> 
                                        <input name="fuisng" type="text" class="form-control" id="field-2" value="{{$data->fuisng}}">
                                    </div> 
                                </div>
                                <div class="col-md-3"> 
                                    <div class="form-group"> 
                                        <label for="field-1" class="control-label">Wash</label> 
                                        <input name="wash" type="text" class="form-control" id="field-2" value="{{$data->wash}}"> 
                                    </div> 
                                </div>

                                 <div class="col-md-2"> 
                                    <div class="form-group"> 
                                        <label for="field-2" class="control-label">Thread</label> 
                                        <input name="thread" type="text" class="form-control" id="field-2" value="{{$data->thread}}"> 
                                    </div> 
                                </div> 
                                <div class="col-md-2"></div> 
                            </div> 


                            <div class="row"> 
                                <div class="col-md-2"></div>
                                <div class="col-md-3"> 
                                    <div class="form-group"> 
                                        <label for="field-1" class="control-label">Elastic</label> 
                                        <input name="elastic" type="text" class="form-control" id="field-2" value="{{$data->elastic}}"> 

                                    </div> 
                                </div>

                                 <div class="col-md-3"> 
                                    <div class="form-group"> 
                                        <label for="field-2" class="control-label">Buttons</label> 
                                        <input name="button" type="text" class="form-control" id="field-2" value="{{$data->button}}"> 
                                    </div> 
                                </div>
                                <div class="col-md-2"> 
                                    <div class="form-group"> 
                                        <label for="field-2" class="control-label">Zipper</label> 
                                        <input name="zipper" type="text" class="form-control" id="field-2" value="{{$data->zipper}}"> 
                                    </div> 
                                </div>  

                                <div class="col-md-2"></div> 
                            </div> 

<!-- {{-- 
                            <div class="row">
                                <div class="col-md-2"></div>
                                <div class="col-md-8"><label for="field-2" class="control-label">Others Accessories</label> <hr></div>
                            </div> --}} -->

                            <div class="row" style="font-size: 12px;"> 
                                <div class="col-md-2"></div>

                                <div class="col-md-2"> 
                                    <div class="panel panel-border ">
                                        <div class="panel-heading"> 
                                            <h3 class="panel-title">Stickers</h3> 
                                        </div>
                                        <div class="panel-body" > 
                                            @if($data->cartoon_sticker=="Yes")
                                                <div class="checkbox checkbox-info checkbox-circle">
                                                    <input id="checkbox1" name="cartoon_sticker" type="checkbox" checked value="{{$data->cartoon_sticker}}">
                                                    <label for="checkbox1">
                                                        Cartoon Sticker
                                                    </label>
                                                </div>
                                            @else
                                                 <div class="checkbox checkbox-info checkbox-circle">
                                                    <input id="checkbox1" name="cartoon_sticker" type="checkbox"  value="{{$data->cartoon_sticker}}">
                                                    <label for="checkbox1">
                                                        Cartoon Sticker
                                                    </label>
                                                </div>
                                            @endif
                                            @if($data->poly_sticker=="Yes")
                                                <div class="checkbox checkbox-info checkbox-circle">
                                                    <input id="checkbox-2" name="poly_sticker" type="checkbox" checked value="{{$data->poly_sticker}}">
                                                    <label for="checkbox-2">
                                                        Poly Sticker
                                                    </label>
                                                </div>  
                                            @else 
                                                <div class="checkbox checkbox-info checkbox-circle">
                                                    <input id="checkbox-2" name="poly_sticker" type="checkbox" value="{{$data->poly_sticker}}">
                                                    <label for="checkbox-2">
                                                        Poly Sticker
                                                    </label>
                                                </div>
                                            @endif

                                            @if($data->size_sticker=="Yes")
                                                <div class="checkbox checkbox-info checkbox-circle">
                                                    <input id="checkbox-3" name="size_sticker" type="checkbox" checked value="{{$data->size_sticker}}">
                                                    <label for="checkbox-3">
                                                        Size Sticker
                                                    </label>
                                                </div>
                                                @else
                                                <div class="checkbox checkbox-info checkbox-circle">
                                                    <input id="checkbox-3" name="size_sticker" type="checkbox" value="{{$data->size_sticker}}">
                                                    <label for="checkbox-3">
                                                        Size Sticker
                                                    </label>
                                                </div>
                                            @endif

                                            @if($data->barcode_sticker=="Yes")
                                                 <div class="checkbox checkbox-info checkbox-circle">
                                                    <input id="checkbox-4" name="barcode_sticker" type="checkbox" checked value="{{$data->barcode_sticker}}">
                                                    <label for="checkbox-4">
                                                        Barcode Sticker
                                                    </label>
                                                </div>
                                            @else
                                                <div class="checkbox checkbox-info checkbox-circle">
                                                    <input id="checkbox-4" name="barcode_sticker" type="checkbox" value="{{$data->barcode_sticker}}">
                                                    <label for="checkbox-4">
                                                        Barcode Sticker
                                                    </label>
                                                </div>
                                            @endif

                                            @if(empty($data->other_stickers))
                                       {{--      <div class="checkbox checkbox-info checkbox-circle">
                                                <input id="checkbox-5" name="other_stickers" type="checkbox" value="Yes">
                                                <label for="checkbox-5">
                                                     Anyting Other
                                                </label>
                                            </div> --}}
                                            <div class="">
                                                <label for="checkbox-5">
                                                     Anyting Other
                                                </label>
                                                <input id="checkbox-12" name="other_stickers" value="{{$data->other_stickers}}" type="text">
                                                
                                            </div> 
                                            @else
                                          {{--   <div class="checkbox checkbox-info checkbox-circle">
                                                <input id="checkbox-5" checked name="other_stickers" type="checkbox" value="{{$data->other_stickers}}">
                                                <label for="checkbox-5">
                                                     Anyting Other
                                                </label>
                                            </div> --}}
                                            <div class="">
                                                <label for="checkbox-5">
                                                     Anyting Other
                                                </label>
                                                <input id="checkbox-12" name="other_stickers" value="{{$data->other_stickers}}" type="text">
                                                
                                            </div>
                                            @endif
                                        </div> 
                                    </div>
                                </div>
                                 <div class="col-md-3"> 
                                    <div class="panel panel-border">
                                        <div class="panel-heading"> 
                                            <h3 class="panel-title">Labels</h3> 
                                        </div>
                                        <div class="panel-body"> 
                                          @if($data->main_label=="Yes")  
                                            <div class="checkbox checkbox-info checkbox-circle">
                                                <input id="checkbox-6" name="main_label" type="checkbox" checked value="{{$data->main_label}}">
                                                <label for="checkbox-6">
                                                   Main Label
                                                </label>
                                            </div>
                                            @else
                                            <div class="checkbox checkbox-info checkbox-circle">
                                                <input id="checkbox-6" name="main_label" type="checkbox"  value="{{$data->main_label}}">
                                                <label for="checkbox-6">
                                                   Main Label
                                                </label>
                                            </div>
                                            @endif
                                            @if($data->care_label=="Yes")
                                            <div class="checkbox checkbox-info checkbox-circle">
                                                <input id="checkbox-7" name="care_label" type="checkbox" checked value="{{$data->care_label}}">
                                                <label for="checkbox-7">
                                                    Care Label
                                                </label>
                                            </div>
                                            @else
                                            <div class="checkbox checkbox-info checkbox-circle">
                                                <input id="checkbox-7" name="care_label" type="checkbox" value="{{$data->care_label}}">
                                                <label for="checkbox-7">
                                                    Care Label
                                                </label>
                                            </div>
                                            @endif

                                            @if($data->size_label=="Yes")
                                            <div class="checkbox checkbox-info checkbox-circle">
                                                <input id="checkbox-8" name="size_label" type="checkbox" checked value="{{$data->size_label}}">
                                                <label for="checkbox-8">
                                                   Size Label
                                                </label>
                                            </div> 
                                            @else
                                            <div class="checkbox checkbox-info checkbox-circle">
                                                <input id="checkbox-8" name="size_label" type="checkbox" value="{{$data->size_label}}">
                                                <label for="checkbox-8">
                                                   Size Label
                                                </label>
                                            </div> 
                                            @endif

                                            @if($data->decor_label=="Yes")
                                             <div class="checkbox checkbox-info checkbox-circle">
                                                <input id="checkbox-9" name="decor_label" type="checkbox" checked value="{{$data->decor_label}}">
                                                <label for="checkbox-9">
                                                   Decorated Label
                                                </label>
                                            </div>
                                            @else
                                            <div class="checkbox checkbox-info checkbox-circle">
                                                <input id="checkbox-9" name="decor_label" type="checkbox" value="{{$data->decor_label}}">
                                                <label for="checkbox-9">
                                                   Decorated Label
                                                </label>
                                            </div>
                                            @endif
                                        @if(empty($data->other_lebels))
                                            {{-- <div class="checkbox checkbox-info checkbox-circle">
                                                <input id="checkbox-10" name="other_labels" type="checkbox"  value="{{$data->other_lebels}}">
                                                <label for="checkbox-10">
                                                   Anyting Other
                                                </label>
                                            </div> --}}
                                            <div class="">
                                                 <label for="checkbox-10">
                                                   Anyting Other
                                                </label>
                                                <input id="checkbox-12" name="other_lebels" type="text" value="{{$data->other_lebels}}">
                                            </div>
                                            @else
                                           {{--  <div class="checkbox checkbox-info checkbox-circle">
                                                <input id="checkbox-10" name="other_labels" type="checkbox" checked="" value="{{$data->other_lebels}}">
                                                <label for="checkbox-10">
                                                     Anyting Other
                                                </label>
                                            </div> --}}
                                            <div class="">
                                                <label for="checkbox-10">
                                                     Anyting Other
                                                </label>
                                                <input id="checkbox-12" name="other_lebels" type="text" value="{{$data->other_lebels}}">
                                            </div>
                                            @endif
                                        </div> 
                                    </div>
                                </div>

                                <div class="col-md-3"> 
                                    <div class="panel panel-border ">
                                        <div class="panel-heading"> 
                                            <h3 class="panel-title">Others</h3> 
                                        </div>
                                        <div class="panel-body"> 
                                            @if($data->rivets=="Yes")
                                          <div class="checkbox checkbox-info checkbox-circle checkbox-inline">
                                                <input type="checkbox" id="inlineCheckbox1"  name="rivets" value="{{$data->rivets}}" checked>
                                                <label for="inlineCheckbox1"> Rivets </label>
                                            </div>
                                            @else
                                            <div class="checkbox checkbox-info checkbox-circle checkbox-inline">
                                                <input type="checkbox" id="inlineCheckbox1"  name="rivets" value="{{$data->rivets}}" checked>
                                                <label for="inlineCheckbox1"> Rivets </label>
                                            </div>
                                            @endif

                                            @if($data->patch=="Yes")
                                            <div class="checkbox checkbox-info checkbox-circle checkbox-inline">
                                                <input type="checkbox" id="inlineCheckbox2" name="patch" value="{{$data->patch}}" checked>
                                                <label for="inlineCheckbox2"> Patch </label>
                                            </div>
                                            @else
                                            <div class="checkbox checkbox-info checkbox-circle checkbox-inline">
                                                <input type="checkbox" id="inlineCheckbox2" name="patch" value="{{$data->patch}}" checked>
                                                <label for="inlineCheckbox2"> Patch </label>
                                            </div>
                                            @endif

                                            @if($data->tags=="Yes")
                                            <div class="checkbox checkbox-info checkbox-circle checkbox-inline">
                                                <input type="checkbox" id="inlineCheckbox3" name="tags" value="{{$data->tags}}" checked>
                                                <label for="inlineCheckbox3"> Tags</label>
                                            </div>
                                            @else
                                            <div class="checkbox checkbox-info checkbox-circle checkbox-inline">
                                                <input type="checkbox" id="inlineCheckbox3" name="tags" value="{{$data->tags}}" checked>
                                                <label for="inlineCheckbox3"> Tags</label>
                                            </div>
                                            @endif
                                            <br>
                                            @if($data->hook_bar=="Yes")
                                            <div class="checkbox checkbox-info checkbox-circle checkbox-inline">
                                                <input id="checkbox-13" name="hook_bar" type="checkbox" checked value="Yes">
                                                <label for="checkbox-13">
                                                   Hook & Bar
                                                </label>
                                            </div>
                                            @else
                                            <div class="checkbox checkbox-info checkbox-circle checkbox-inline ">
                                                <input id="checkbox-13" name="hook_bar" type="checkbox"  value="Yes">
                                                <label for="checkbox-13">
                                                   Hook & Bar
                                                </label>
                                            </div> 
                                            @endif

                                            @if($data->poly=="Yes")
                                            <div class="checkbox checkbox-info checkbox-circle checkbox-inline">
                                                <input id="checkbox-poly" name="poly" type="checkbox" checked value="Yes">
                                                <label for="checkbox-poly">
                                                   Ply
                                                </label>
                                            </div>
                                            @else
                                            <div class="checkbox checkbox-info checkbox-circle checkbox-inline ">
                                                <input id="checkbox-poly" name="poly" type="checkbox"  value="Yes">
                                                <label for="checkbox-poly">
                                                   Poly
                                                </label>
                                            </div> 
                                            @endif
                                            <br>

                                            @if($data->drowsting=="Yes")
                                            <div class="checkbox checkbox-info checkbox-circle checkbox-inline">
                                                <input id="checkbox-14" name="drowsting" type="checkbox" checked="" value="Yes">
                                                <label for="checkbox-14">
                                                   Drowsting
                                                </label>
                                            </div>
                                            @else
                                            <div class="checkbox checkbox-info checkbox-circle checkbox-inline">
                                                <input id="checkbox-14" name="drowsting" type="checkbox"  value="Yes">
                                                <label for="checkbox-14">
                                                   Drowsting
                                                </label>
                                            </div>
                                            @endif

                                             @if($data->cartoon=="Yes")
                                            <div class="checkbox checkbox-info checkbox-circle checkbox-inline">
                                                <input id="checkbox-cartoon" name="cartoon" type="checkbox" checked value="Yes">
                                                <label for="checkbox-cartoon">
                                                   Cartoon
                                                </label>
                                            </div>
                                            @else
                                            <div class="checkbox checkbox-info checkbox-circle checkbox-inline ">
                                                <input id="checkbox-cartoon" name="cartoon" type="checkbox"  value="Yes">
                                                <label for="checkbox-cartoon">
                                                   Cartoon
                                                </label>
                                            </div> 
                                            @endif
                                            <br>

                                            @if($data->price_sticker=="Yes")
                                            <div class="checkbox checkbox-info checkbox-circle">
                                                <input id="checkbox1" name="price_sticker" type="checkbox" checked="" value="Yes">
                                                <label for="checkbox1">
                                                    Price Ticket
                                                </label>
                                            </div>
                                            @else
                                            <div class="checkbox checkbox-info checkbox-circle">
                                                <input id="checkbox1" name="price_sticker" type="checkbox"  value="Yes">
                                                <label for="checkbox1">
                                                    Price Ticket
                                                </label>
                                            </div>
                                            @endif
                                            
                                            @if(empty($data->others_items))
                                            {{-- <div class="checkbox checkbox-info checkbox-circle">
                                                <input id="checkbox-15" name="others_items" type="checkbox" value="Yes">
                                                <label for="checkbox-15">
                                                     Anyting Other
                                                </label>
                                            </div> --}}
                                            <div class="">
                                                <label for="checkbox-15">
                                                     Anyting Other
                                                </label>
                                                <input id="checkbox-12" name="others_items" type="text" value="{{$data->others_items}}">
                                            </div> 
                                            @else
                                           {{--  <div class="checkbox checkbox-info checkbox-circle">
                                                <input id="checkbox-15" checked="" name="others_items" type="checkbox" value="Yes">
                                                <label for="checkbox-15">
                                                     Anyting Other
                                                </label>
                                            </div> --}}
                                            <div class="">
                                                 <label for="checkbox-15">
                                                     Anyting Other
                                                </label>
                                                <input id="checkbox-12" name="others_items" type="text" value="{{$data->others_items}}">
                                            </div>
                                            @endif

                                        </div> 
                                    </div>
                                </div>
                                <div class="col-md-2"></div> 
                            </div> 


                            <div class="row"> 
                              <div class="col-md-2"></div> 
                               <div class="col-md-8">
                                  <div class="modal-footer"> 
                                    <button type="submit" class="btn btn-info waves-effect waves-light">Update Docket</button> 
                                </div>
                             </div>
                                    <div class="col-md-2"></div> 
                                
                             </div>

                        </form>

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
