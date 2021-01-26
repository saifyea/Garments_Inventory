
<h3>{{ config('app.name', 'Garments Inventory- Chamical Reports') }}</h3>
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

 
<h4>Total Delevered Chamical Between the dates </h4> 
<table style="width: 100%">
    <thead>
        <tr>
            <th>Chamical_Name</th>
            <th>Chamical Type</th>
            <th>Delevery Date</th>
            <th>Quantity (Kgs)</th>
            <th>Delevered To</th>
        </tr>
    </thead>

    <tbody>
        @foreach($data as $row)
        <tr class="gradeX">

            <td >{{$row->chamical_name}}</td>
            <td >{{$row->chamical_type}}</td>
            <td >{{$row->order_date}}</td>
            <td>{{$row->quantity}}</td>
            <td >{{$row->emp_name}}</td>
                                                                      
        </tr>
      @endforeach
    </tbody>
</table>
