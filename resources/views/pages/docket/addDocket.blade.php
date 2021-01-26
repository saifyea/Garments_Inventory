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
                        <div class="panel-heading">
                            <h3 class="panel-title ">Add Docket</h3>
                            
                        </div>
                        <div class="panel-body">
                            <form method="POST" action="{{URL::to('/save-docket')}}" enctype="multipart/form-data">
                             @csrf

                            <div class="row"> 
                                <div class="col-md-2"></div>
                                <div class="col-md-8"> 
                                    <div class="form-group"> 
                                        <label for="field-1" class="control-label">Docket No</label> 
                                        <input name="docket_no" type="text" class="form-control" id="field-1" placeholder="Docket No"> 
                                    </div> 
                                </div>

                                <div class="col-md-2"></div> 
                            </div> 
                            <div class="row"> 
                                <div class="col-md-2"></div>
                                <div class="col-md-4"> 
 
                                       <label for="field-1" class="control-label">Style No</label> 
                                       
                                      {{--  <div class="form-group">
                                        <input type="text" name="style_no" id="style_no" class="form-control" placeholder="Enter Style No" />
                                        <div id="stylelist"></div>
                                       </div>
                                       {{ csrf_field() }} --}}
                                

                                 {{--    <div class="form-group"> 
                                        <label for="field-1" class="control-label">Style No</label> --}} 
                                        <input name="style_no" type="text" class="form-control" id="field-1" placeholder="Style No"> 
                                   {{--  </div>  --}}
                                </div>

                                 <div class="col-md-4"> 
                                    <div class="form-group"> 
                                        <label for="field-2" class="control-label">Buyer</label> 
                                        
                                       {{--  <div class="form-group">
                                        <input type="text" name="style_no" id="style_no" class="form-control" placeholder="Enter Style No" />
                                        <div id="stylelist"></div>
                                       </div>
                                       {{ csrf_field() }} --}}

                                       <input name="buyer" type="text" class="form-control" id="field-2" placeholder="Buyer"> 
                                    </div> 
                                </div> 
                                <div class="col-md-2"></div> 
                            </div> 

                            <div class="row"> 
                                <div class="col-md-2"></div>
                                <div class="col-md-4"> 
                                    <div class="form-group"> 
                                        <label for="field-1" class="control-label">Po No</label> 
                                        <input name="po_no" type="text" class="form-control" id="field-1" placeholder="PO numbers"> 
                                    </div> 
                                </div>

                                 <div class="col-md-4"> 
                                    <div class="form-group"> 
                                        <label for="field-2" class="control-label">Order Items</label> 
                                        <input name="items" type="text" class="form-control" id="field-2" placeholder="Order Items"> 
                                    </div> 
                                </div> 
                                <div class="col-md-2"></div> 
                            </div> 


                            <div class="row"> 
                                <div class="col-md-2"></div>
                                <div class="col-md-4"> 
                                    <div class="form-group"> 
                                        <label for="field-1" class="control-label">Order Quantity</label> 
                                        <input name="order_qty" type="number" class="form-control" id="field-1" placeholder="Order Quantity"> 
                                    </div> 
                                </div>

                                 <div class="col-md-4"> 
                                    <div class="form-group"> 
                                        <label for="field-2" class="control-label">Shiped Date</label> 
                                        <input name="ship_date" type="date" class="form-control" id="field-2" > 
                                    </div> 
                                </div> 
                                <div class="col-md-2"></div> 
                            </div> 



                            <div class="row"> 
                                <div class="col-md-2"></div>
                                <div class="col-md-4"> 
                                    <div class="form-group"> 
                                        <label for="field-1" class="control-label">Fabric Types</label> 
                                        <input name="fabric_type" type="text" class="form-control" id="field-2" placeholder="Fabrics Types"> 

                                    </div> 
                                </div>

                                 <div class="col-md-4"> 
                                    <div class="form-group"> 
                                        <label for="field-1" class="control-label">Pocketing</label> 
                                        <input name="pocketing" type="text" class="form-control" id="field-2" placeholder="Pocketing Details"> 
                                    </div> 
                                </div> 
                                <div class="col-md-2"></div> 
                            </div> 

                            <div class="row"> 
                                <div class="col-md-2"></div>
                                <div class="col-md-3"> 
                                     <div class="form-group"> 
                                        <label for="field-1" class="control-label">Fusing</label> 
                                        <input name="fuisng" type="text" class="form-control" id="field-2" placeholder="Fusing Details">
                                    </div> 
                                </div>
                                <div class="col-md-3"> 
                                    <div class="form-group"> 
                                        <label for="field-1" class="control-label">Wash</label> 
                                        <input name="wash" type="text" class="form-control" id="field-2" placeholder="Wash Process"> 
                                    </div> 
                                </div>

                                 <div class="col-md-2"> 
                                    <div class="form-group"> 
                                        <label for="field-2" class="control-label">Thread</label> 
                                        <input name="thread" type="text" class="form-control" id="field-2" placeholder="Thread Type"> 
                                    </div> 
                                </div> 
                                <div class="col-md-2"></div> 
                            </div> 


                            <div class="row"> 
                                <div class="col-md-2"></div>
                                <div class="col-md-3"> 
                                    <div class="form-group"> 
                                        <label for="field-1" class="control-label">Elastic</label> 
                                        <input name="elastic" type="text" class="form-control" id="field-2" placeholder="Elastic Details"> 

                                    </div> 
                                </div>

                                 <div class="col-md-3"> 
                                    <div class="form-group"> 
                                        <label for="field-2" class="control-label">Buttons</label> 
                                        <input name="button" type="text" class="form-control" id="field-2" placeholder="Button Type"> 
                                    </div> 
                                </div>
                                <div class="col-md-2"> 
                                    <div class="form-group"> 
                                        <label for="field-2" class="control-label">Zipper</label> 
                                        <input name="zipper" type="text" class="form-control" id="field-2" placeholder="Zipper Type"> 
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
                                            <h4 class="panel-title">Stickers</h4> 
                                        </div>
                                        <div class="panel-body" > 
                                         
                                            <div class="checkbox checkbox-info checkbox-circle">
                                                <input id="checkbox1" name="cartoon_sticker" type="checkbox" checked value="Yes">
                                                <label for="checkbox1">
                                                    Cartoon Sticker
                                                </label>
                                            </div>
                                            <div class="checkbox checkbox-info checkbox-circle">
                                                <input id="checkbox-2" name="poly_sticker" type="checkbox" checked value="Yes">
                                                <label for="checkbox-2">
                                                    Poly Sticker
                                                </label>
                                            </div>
                                            <div class="checkbox checkbox-info checkbox-circle">
                                                <input id="checkbox-3" name="size_sticker" type="checkbox" checked value="Yes">
                                                <label for="checkbox-3">
                                                    Size Sticker
                                                </label>
                                            </div>
                                             <div class="checkbox checkbox-info checkbox-circle">
                                                <input id="checkbox-4" name="barcode_sticker" type="checkbox" checked value="Yes">
                                                <label for="checkbox-4">
                                                    Barcode Sticker
                                                </label>
                                            </div>

                                           {{--  <div class="checkbox checkbox-info checkbox-circle">
                                                <input id="checkbox-5" name="other_sticker" type="checkbox" value="Yes">
                                                <label for="checkbox-5">
                                                    Anyting Others
                                                </label>
                                            </div> --}}
                                            <div {{-- class="checkbox checkbox-info checkbox-circle" --}}>
                                                 <label for="checkbox-5">
                                                    Anyting Others
                                                </label>
                                                <input id="checkbox-12" name="other_stickers" type="text" width="10">
                                                
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                                 <div class="col-md-3"> 
                                    <div class="panel panel-border">
                                        <div class="panel-heading"> 
                                            <h3 class="panel-title">Labels</h3> 
                                        </div>
                                        <div class="panel-body"> 
                                         
                                            <div class="checkbox checkbox-info checkbox-circle">
                                                <input id="checkbox-6" name="main_label" type="checkbox" checked value="Yes">
                                                <label for="checkbox-6">
                                                   Main Label
                                                </label>
                                            </div>
                                            <div class="checkbox checkbox-info checkbox-circle">
                                                <input id="checkbox-7" name="care_label" type="checkbox" checked value="Yes">
                                                <label for="checkbox-7">
                                                    Care Label
                                                </label>
                                            </div>
                                            <div class="checkbox checkbox-info checkbox-circle">
                                                <input id="checkbox-8" name="size_label" type="checkbox" checked value="Yes">
                                                <label for="checkbox-8">
                                                   Size Label
                                                </label>
                                            </div> 
                                             <div class="checkbox checkbox-info checkbox-circle">
                                                <input id="checkbox-9" name="decor_label" type="checkbox" checked value="Yes">
                                                <label for="checkbox-9">
                                                   Decorated Label
                                                </label>
                                            </div>
                                    
                                           {{--  <div class="checkbox checkbox-info checkbox-circle">
                                                <input id="checkbox-10" name="other_label" type="checkbox"  value="Yes">
                                                <label for="checkbox-10">
                                                    Anyting Others
                                                </label>
                                            </div> --}}
                                            <div >
                                                <label for="checkbox-10">
                                                    Anyting Others
                                                </label>
                                                <input id="checkbox-12" name="other_lebels" type="text" >
                                                
                                            </div>
                                        </div> 
                                    </div>
                                </div>

                                <div class="col-md-3"> 
                                    <div class="panel panel-border ">
                                        <div class="panel-heading"> 
                                            <h3 class="panel-title">Others</h3> 
                                        </div>
                                        <div class="panel-body"> 

                                          <div class="checkbox checkbox-info checkbox-circle checkbox-inline">
                                                <input type="checkbox" id="inlineCheckbox1"  name="rivets" value="Yes" checked>
                                                <label for="inlineCheckbox1"> Rivets </label>
                                            </div>
                                            <div class="checkbox checkbox-info checkbox-circle checkbox-inline">
                                                <input type="checkbox" id="inlineCheckbox2" name="patch" value="Yes" checked>
                                                <label for="inlineCheckbox2"> Patch </label>
                                            </div>
                                            <div class="checkbox checkbox-info checkbox-circle checkbox-inline">
                                                <input type="checkbox" id="inlineCheckbox3" name="tags" value="Yes" checked>
                                                <label for="inlineCheckbox3"> Tags</label>
                                            </div>
                                            <br>
                                            <div class="checkbox checkbox-info checkbox-circle checkbox-inline">
                                                <input id="checkbox-13" name="hook_bar" type="checkbox" checked value="Yes">
                                                <label for="checkbox-13">
                                                   Hook & Bar
                                                </label>
                                            </div>
                                             <div class="checkbox checkbox-info checkbox-circle checkbox-inline">
                                                <input type="checkbox" id="inlineCheckbox4" name="poly" value="Yes" checked>
                                                <label for="inlineCheckbox4"> Poly</label>
                                            </div>
                                            <br>
                                            <div class="checkbox checkbox-info checkbox-circle checkbox-inline">
                                                <input id="checkbox-14" name="drowsting" type="checkbox" checked value="Yes">
                                                <label for="checkbox-14">
                                                   Drowsting
                                                </label>
                                            </div>
                                             <div class="checkbox checkbox-info checkbox-circle checkbox-inline">
                                                <input type="checkbox" id="inlineCheckbox5" name="cartoon" value="Yes" checked>
                                                <label for="inlineCheckbox5"> Cartoon</label>
                                            </div>
                                            <br>

                                            <div class="checkbox checkbox-info checkbox-circle">
                                                <input id="checkbox1" name="price_sticker" type="checkbox" checked value="Yes">
                                                <label for="checkbox1">
                                                    Price Ticket
                                                </label>
                                            </div>
                                            
                                            {{-- <div class="checkbox checkbox-info checkbox-circle">
                                                <input id="checkbox-15" name="others" type="checkbox" value="Yes">
                                                <label for="checkbox-15">Anyting Others</label>
                                            </div> --}}
                                            <div class="">
                                                <label for="checkbox-15">Anyting Others</label>
                                                <input id="checkbox-12" name="others_items" type="text" >
                                                
                                            </div>

                                            

                                        </div> 
                                    </div>
                                </div>
                                <div class="col-md-2"></div> 
                            </div> 


                            <div class="row"> 
                              <div class="col-md-2"></div> 
                               <div class="col-md-8">
                                  <div class="modal-footer"> 
                                    <button type="submit" class="btn btn-info waves-effect waves-light">Save Docket</button> 
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
        //reader.readAsDataURL(input.files[1]);

    }


</script>


@endsection

@section('script_content')
<!--auto load script -->
    <script>
    $(document).ready(function(){

     $('#style_no').keyup(function(){ 
            var query = $(this).val();
            if(query != '')
            {
             var _token = $('input[name="_token"]').val();
             $.ajax({
              url:"{{ url('dockets/getStyle') }}",
              method:"POST",
              data:{query:query, _token:_token},
              success:function(data){
               //$('#stylelist').fadeIn();  
                        $('#stylelist').html(data);
              }
             });
            }
        });

        $(document).on('click', 'li', function(){  
            $('#style_no').val($(this).text());  
            $('#stylelist').fadeOut();  
        });  

    });
    </script>

    <!--auto load script -->
    <script>
    $(document).ready(function(){

     $('#buyer').keyup(function(){ 
            var query = $(this).val();
            if(query != '')
            {
             var _token = $('input[name="_token"]').val();
             $.ajax({
              url:"{{ url('dockets/getBuyer') }}",
              method:"POST",
              data:{query:query, _token:_token},
              success:function(data){
               //$('#stylelist').fadeIn();  
                        $('#buyerlist').html(data);
              }
             });
            }
        });

        $(document).on('click', 'li', function(){  
            $('#buyer').val($(this).text());  
            $('#buyerlist').fadeOut();  
        });  

    });
    </script>

@endsection
   