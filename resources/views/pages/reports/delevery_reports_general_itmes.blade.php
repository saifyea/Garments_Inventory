
<h3>{{ config('app.name', 'Garments Inventory- General Items') }}</h3>
<p>Print Date: {{ date('d/m/yy')}}</p>

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

 
<h4>Total Delevered Items Between the dates </h4> 
@php
if ($cat=='all') {
   echo "<p>Delevered Product Category: <b>All</b></p>";
}else
{
    echo "<p>Delevered Product Category: <b>{$cat_name->category_name}</b></p>";   
}
@endphp

<table style="width: 100%">
    <thead>
        <tr>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Order Date</th>
            <th>Quantity</th>
            <th>Delevered To</th>
        </tr>
    </thead>

    <tbody>
        @foreach($data as $row)
        <tr class="gradeX">

            <td >{{$row->product_id}}</td>
            <td >{{$row->prod_name}}</td>
            <td >{{$row->order_date}}</td>
            <td>{{$row->quantity}}</td>
            <td >{{$row->emp_name}}</td>
                                                                      
        </tr>
      @endforeach
    </tbody>
</table>
