
<h3>{{ config('app.name', 'Garments Inventory-Chemical Reports') }}</h3>
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
            <th>Chamical ID</th>
            <th>Chamical Name</th>
            <th>Chamical Type</th>
            <th>For Buyer</th>
            <th>For Style</th>
            <th>Quantity</th>
            <th>Supllier</th>  
        </tr>
    </thead>

    <tbody>
        @foreach($data as $row)
        <tr class="gradeX">
            <td >{{$row->chamical_id}}</td>
            <td >{{$row->chamical_name}}</td>
            <td >{{$row->chamical_type}}</td>  
            <td >{{$row->buyer}}</td>
            <td >{{$row->style_no}}</td>           
            <td>{{$row->ttl_recv}}</td>                                                          
            <td>{{$row->sup_name}}</td>                                                          
        </tr>
      @endforeach
    </tbody>
</table>
