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

<h4>All General Items (Damaged)</h4>
              
<table style="width:100%">
	  <tr>
	    <th>#</th>
	     <th>Product ID</th>
        <th>Product Name</th>
        <th>Category</th>
        <th>Sub Category</th>
        <th>Damage Qty</th>
        <th>Comments</th>
	  </tr>
    @php
        $sl=1
    @endphp
  @foreach($data as $row)
	  <tr>
	    <td>{{$sl++}}</td>
	     <td >{{$row->prod_code}}</td>
        <td >{{$row->prod_name}}</td>
        <td >{{$row->category_name}}</td>
        <td>{{$row->sub_cat_name}}</td>
        <td >{{$row->prod_qty}}</td>
        <td>{{$row->prod_desc}}</td>
	  </tr>
  @endforeach
</table>
