
<h3>{{ config('app.name', 'Garments Inventory Accessories Report') }}</h3>
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

 
<h4>Total Delevered Accessories Between the dates </h4> 
@php
if ($acc=='all') {
   echo "<p>Delevered Product Category: <b>All</b></p>";
}else
{
    echo "<p>Delevered Product Category: <b>{$acc_name->acc_name}</b></p>";   
}
@endphp

<table style="width: 100%">
    <thead>
        <tr>
            <th>Accessories Name</th>
            <th>For Buyer</th>
            <th>For Style</th>
            <th>Delevery Date</th>
            <th>Quantity</th>
            <th>Delevered To</th>
        </tr>
    </thead>

    <tbody>
        @foreach($data as $row)
        <tr class="gradeX">

            <td >{{$row->accessories_name}}</td>
            <td >{{$row->buyer}}</td>
            <td >{{$row->style_no}}</td>
            <td >{{$row->order_date}}</td>
            <td>{{$row->quantity}}</td>
            <td >{{$row->emp_name}}</td>
                                                                      
        </tr>
      @endforeach
    </tbody>
</table>
