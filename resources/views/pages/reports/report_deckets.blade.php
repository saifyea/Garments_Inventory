
<h3>{{ config('app.name', 'Garments Inventory-Docekt Status') }}</h3>
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
            <th>Style</th>
            <th>PO No</th>
            <th>Order Quantity</th>
            <th>Shipment Date</th>  
        </tr>
    </thead>

    <tbody>
        @foreach($data as $row)
        <tr class="gradeX">
            <td >{{$row->docket_no}}</td>
            <td >{{$row->buyer}}</td>
            <td >{{$row->style_no}}</td>
            <td >{{$row->po_no}}</td>           
            <td>{{$row->order_qty}}</td>                                                          
            <td>{{$row->ship_date}}</td>                                                          
        </tr>
      @endforeach
    </tbody>
</table>
