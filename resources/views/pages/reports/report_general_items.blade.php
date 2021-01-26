
<h3>Harry Fashion Limited</h3>
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


<h4>Total Items Received Between the dates</h4>             
<table style="width: 100%">
    <thead>
        <tr>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Category</th>
            <th>Brand</th>
            <th>Suppllier</th>
            <th>Quantity</th>
            

        </tr>
    </thead>

    <tbody>
        @foreach($data as $row)
        <tr class="gradeX">

            <td >{{$row->prod_code}}</td>
            <td >{{$row->prod_name}}</td>
            <td >{{$row->category_name}}</td>
            <td >{{$row->brand}}</td>
            <td >{{$row->sup_name}}</td>
            <td>{{$row->prod_qty}}</td>                                                          
        </tr>
      @endforeach
    </tbody>
</table>
