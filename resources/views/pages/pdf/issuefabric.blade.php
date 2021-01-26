<h3>Harry Fashion Limited</h3>
<p>Print Date: {{date('d/m/yy')}}</p>

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


<h4>All Issued Fabrics</h4>             
<table style="width:100%">
	  <tr>
	    <th>#</th>
	   	<th>Buyer</th>
	    <th>Docket No</th>
	    <th>Style No</th>
	    <th>Color</th>
	    <th>Shade No</th>
	    <th>Deliver Qty</th>
	    <th>Issued To</th>
	  </tr>
    @php
        $sl=1
    @endphp
  @foreach($data as $row)
	  <tr>
	    <td>{{$sl++}}</td>
	    <td >{{$row->buyer}}</td>
	    <td >{{$row->docket_no}}</td>
	    <td >{{$row->style_no}}</td>
	    <td >{{$row->color}}</td>
	    <td >{{$row->shade_no}}</td>
	    <td>{{$row->quantity}}</td>
	    <td>{{$row->emp_name}}</td>
	  </tr>
  @endforeach
</table>
