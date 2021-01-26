
  @foreach($data as $row)
	 {!! DNS1D::getBarcodeHTML($row->id, "C39") !!}
            <p class="pid">{{$row->id}}</p>
  @endforeach

