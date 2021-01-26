
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

 
<h4>Total Delevered Threads Between the dates </h4> 
<table style="width: 100%">
    <thead>
        <tr>
            <th>Style NO</th>
            <th>For Buyer</th>
            <th>Count No</th>
            <th>Color</th>
            <th>Delevery Date</th>
            <th>Quantity (Cones)</th>
            <th>Delevered To</th>
        </tr>
    </thead>

    <tbody>
        @foreach($data as $row)
        <tr class="gradeX">

            <td >{{$row->style_no}}</td>
            <td >{{$row->buyer}}</td>
            <td >{{$row->count_no}}</td>
            <td >{{$row->color}}</td>
            <td >{{$row->order_date}}</td>
            <td>{{$row->quantity}}</td>
            <td >{{$row->emp_name}}</td>
                                                                      
        </tr>
      @endforeach
    </tbody>
</table>
