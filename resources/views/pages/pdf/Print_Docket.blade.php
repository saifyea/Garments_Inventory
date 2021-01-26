<h3>Harry Fashion Limited</h3>
<p>Print Date: <?php date('d/m/yy') ?></p>

<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 5px;
  text-align: left;    
}
</style>


<h4>All Dockets</h4>   

                                                <table class="table table-bordered table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th width="1">Particuler</th>
                                                                <th width="10">
                                                                    Descriptions
                                                                </th>
                                                                
                                                            </tr>
                                                        </thead>
                                                         
                                                        <tbody>
                                                            <tr>
                                                                <th>Style No</th>
                                                                <td >{{$data->style_no}}</td>
                                                            </tr>
                                                            <tr>
                                                               <th>Name of Buyer</th>
                                                                <td >{{$data->buyer}}</td>
                                                            </tr>
                                                            <tr>
                                                               <th>PO Numgers</th>
                                                                <td >{{$data->po_no}}</td>
                                                            </tr>
                                                            <tr>
                                                               <th>Items</th>
                                                                <td >{{$data->items}}</td>
                                                            </tr>
                                                             <tr>
                                                               <th>Order Quantity</th>
                                                                <td>{{$data->order_qty}}</td>
                                                            </tr>
                                                             <tr>
                                                               <th>Shipment Date</th>
                                                                <td >{{$data->ship_date}}</td>
                                                            </tr>
                                                             
                                                            
                                                        </tbody>
                                                    </table>
                                            
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th></th>
                                                                <th>
                                                                    Required Items
                                                                </th>
                                                                <th>
                                                                   Description
                                                                </th>
                                                                <th>
                                                                    In-house Status
                                                                </th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th>Fabrics</th>
                                                                <td>Yes</td>
                                                                <td>{{$data->fabric_type}}</td>
                                                                <td>In House</td>
                                                                
                                                            </tr>
                                                            <tr>
                                                               <th>Pocketing</th>
                                                                <td>
                                                                    @php  if($data->pocketing!=null)  echo "Yes";
                                                                    @endphp

                                                                </td>
                                                                <td>{{$data->pocketing}}</td>
                                                                <td>In House</td>
                                                            </tr>
                                                            <tr>
                                                               <th>Fusing</th>
                                                                <td>@php  if($data->pocketing!=null)  echo "Yes";
                                                                    @endphp</td>
                                                                <td>{{$data->fuisng}}</td>
                                                                <td>In House</td>
                                                            </tr>
                                                            <tr>
                                                               <th>Thread</th>
                                                                <td>@php  if($data->pocketing!=null)  echo "Yes";
                                                                    @endphp</td>
                                                                <td>{{$data->thread}}</td>
                                                                <td>In House</td>
                                                            </tr>
                                                            <tr>
                                                               <th>Elastic</th>
                                                                <td>@php  if($data->pocketing!=null)  echo "Yes";
                                                                    @endphp</td>
                                                                <td>{{$data->elastic}}</td>
                                                                <td>In House</td>
                                                            </tr>
                                                            <tr>
                                                               <th>Buttons</th>
                                                                <td>@php  if($data->pocketing!=null)  echo "Yes";
                                                                    @endphp</td>
                                                                <td>{{$data->button}}</td>
                                                                <td>In House</td>
                                                            </tr>
                                                            <tr>
                                                               <th>Zipper</th>
                                                                <td>@php  if($data->pocketing!=null)  echo "Yes";
                                                                    @endphp</td>
                                                                <td>{{$data->zipper}}</td>
                                                                <td>In House</td>
                                                            </tr>
                                                            <tr>
                                                               <th>Wash</th>
                                                                <td>@php  if($data->pocketing!=null)  echo "Yes";
                                                                    @endphp</td>
                                                                <td>{{$data->wash}}</td>
                                                                <td>In House</td>
                                                            </tr>
                                                                                                                       
                                                            <tr>
                                                                <th>Nestable</th>
                                                                <td colspan="3">Yes</td>
                                                            </tr>
                                                            
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th></th>
                                                                <th>
                                                                    Required Items
                                                                </th>
                                                                <th>
                                                                    In-house Status
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th> Price Sticker</th>
                                                                <td>{{$data->price_sticker}}</td>
                                                                <td>In House</td>
                                                            </tr>
                                                            <tr>
                                                               <th>Poly Sticker</th>
                                                                <td>{{$data->poly_sticker}}</td>
                                                                <td>In House</td>
                                                            </tr>
                                                            <tr>
                                                               <th>Size Sticker</th>
                                                                <td>{{$data->size_sticker}}</td>
                                                                <td>In House</td>
                                                            </tr>
                                                            <tr>
                                                               <th>Barcode Sticker</th>
                                                                <td>{{$data->barcode_sticker}}</td>
                                                                <td>In House</td>
                                                            </tr>
                                                            <tr>
                                                               <th>Main Label</th>
                                                                <td>{{$data->main_label}}</td>
                                                                <td>In House</td>
                                                            </tr>
                                                            <tr>
                                                               <th>Care Label</th>
                                                                <td>{{$data->care_label}}</td>
                                                                <td>In House</td>
                                                            </tr>
                                                            <tr>
                                                               <th>Size Label</th>
                                                                <td>{{$data->size_label}}</td>
                                                                <td>In House</td>
                                                            </tr>
                                                            <tr>
                                                               <th>Decorated Label</th>
                                                                <td>{{$data->decor_label}}</td>
                                                                <td>In House</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th></th>
                                                                <th>
                                                                    Required Items
                                                                </th>
                                                                <th>
                                                                    In-house Status
                                                                </th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th>Rivets</th>
                                                                <td>{{$data->rivets}}</td>
                                                                <td>In House</td>
                                                                
                                                            </tr>
                                                            <tr>
                                                               <th>Patch</th>
                                                                <td>{{$data->patch}}</td>
                                                                <td>In House</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Tags</th>
                                                                <td>{{$data->tags}}</td>
                                                                <td>In House</td>
                                                                
                                                            </tr>
                                                            <tr>
                                                               <th>Hook & Bar</th>
                                                                <td>{{$data->hook_bar}}</td>
                                                                <td>In House</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Drowsting</th>
                                                                <td>{{$data->drowsting}}</td>
                                                                <td>In House</td>
                                                                
                                                            </tr>
                                                            <tr>
                                                               <th>Others Acce</th>
                                                                <td>{{$data->other_stickers}}</td>
                                                                <td>In House</td>
                                                            </tr>
                                                             <tr>
                                                               <th>Others Acce</th>
                                                                <td>{{$data->other_lebels}}</td>
                                                                <td>In House</td>
                                                            </tr>
                                                             <tr>
                                                               <th>Others Acce</th>
                                                                <td>{{$data->others_items}}</td>
                                                                <td>In House</td>
                                                            </tr>
                                                            
                                                                                                                       
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                        </div>
                                        
                                        <hr>
                                        <div class="hidden-print">
                                            <div class="pull-right">
                                                <a href="#" class="btn btn-inverse waves-effect waves-light"><i class="fa fa-print"></i></a>
                                               <a href="{{URL::to('all-dockets')}}" class="btn btn-info waves-effect waves-light">Back</a>
                                            </div>
                                        </div>
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

