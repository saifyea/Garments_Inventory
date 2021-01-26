<!<!DOCTYPE html>
<html>
<head>
	<title>Autocomptete</title>
<script src="{{asset('public/admin/js/jquery.min.js')}}"></script>
	 <link href="{{asset('public/admin/css/bootstrap.min.css')}}" rel="stylesheet" /> 
	 
        <script src="{{asset('public/admin/js/bootstrap.min.js')}}"></script>
</head>
<body>
	<div class="container-box">
		<h4>Autocompete check</h4>
		<div class="form-group">
			<input type="text" name="prod_name", class="form-control", id="prod_name" placeholder="Type product name">
			<div id="prod_list"></div>
		@csrf
		</div>
		
	</div>

</body>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#prod_name').keyup(function(){
				var query=$(this).val();
				if(query != '')
				{
					var _token = $('input[name="_token"]').val();
					$.ajax({
						url:"{{ route('autocomplete.fetch')}}",
						method:"POST",
						data:{query:query,_token:_token},
						success:function(data)
						{
							$('#prod_list').fadeIn();
							$('#prod_list').html(data);


						}
					})
				}
			});
		});

	</script>
</html>
















