
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
            <th>Docket No</th>
            <th>Buyer</th>
            <th>Style No</th>
            <th>Color</th>
            <th>Rolls</th>
            <th>Construction</th>
            <th>Length</th>
            <th>Supllier</th>
            

        </tr>
    </thead>

    <tbody>
        @foreach($data as $row)
        <tr class="gradeX">

            <td >{{$row->docket_no}}</td>
            <td >{{$row->buyer}}</td>
            <td >{{$row->style_no}}</td>
            <td >{{$row->color}}</td>
            <td >{{$row->rolls}}</td>
            <td>{{$row->construciton}}</td>                                                          
            <td>{{$row->fabric_length}}</td>                                                          
            <td>{{$row->sup_name}}</td>                                                          
        </tr>
      @endforeach
    </tbody>
</table>
