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


<h4>All Issued Fabrics</h4>             
<table style="width:100%">
	  <tr>
	    <th>#</th>
	    <th>Requisition No</th>
        <th>Issued To</th>
        <th>Issue Date</th>
        <th>Buyer</th>
        <th>Style No</th>
        <th>Color</th>
        <th>Delivered(Cons)</th>
	  </tr>
    @php
        $sl=1
    @endphp
  @foreach($data as $row)
	  <tr>
	    <td>{{$sl++}}</td>
		<td >{{$row->order_id}}</td>
	    <td>{{$row->emp_name}}</td>
	    <td >{{$row->order_date}}</td>
	    <td>{{$row->buyer}}</td>
	    <td >{{$row->style_no}}</td>
	    <td>{{$row->color}}</td>
	    <td >{{$row->total_products}}</td>
	  </tr>
  @endforeach
</table>
