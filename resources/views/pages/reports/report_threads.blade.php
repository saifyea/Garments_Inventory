
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
            <th>Buyer</th>
            <th>Style No</th>
            <th>Thread Type</th>
            <th>Count No</th>
            <th>Color</th>
            <th>Quantity</th>
            <th>Supllier</th>  
        </tr>
    </thead>

    <tbody>
        @foreach($data as $row)
        <tr class="gradeX">
            <td >{{$row->buyer}}</td>
            <td >{{$row->style_no}}</td>
            <td >{{$row->thread_type}}</td>  
            <td >{{$row->count_no}}</td>
            <td >{{$row->color}}</td>           
            <td>{{$row->ttl_recv_cone}}</td>                                                          
            <td>{{$row->sup_name}}</td>                                                          
        </tr>
      @endforeach
    </tbody>
</table>
