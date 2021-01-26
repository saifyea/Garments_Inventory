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
<table style="width:100%">
	  <tr>
	    <th>#</th>
	    <th>Docket No</th>
	    <th>Style No</th>
	    <th>Buyer</th>
	    <th>PO Numbers</th>
	    <th>Order Qty</th>
	    <th>Ship Date</th>
	  </tr>
    @php
        $sl=1
    @endphp
  @foreach($data as $row)
	  <tr>
	    <td>{{$sl++}}</td>
	    <td >{{$row->docket_no}}</td>
	    <td >{{$row->style_no}}</td>
	    <td >{{$row->buyer}}</td>
	    <td >{{$row->po_no}}</td>
	    <td >{{$row->order_qty}}</td>
	    <td>{{$row->ship_date}}</td>
	  </tr>
  @endforeach
</table>
