 <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
     {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> --}}
     {{-- <link href="{{asset('public/admin/css/materialize.css')}}" rel="stylesheet" /> --}}
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
     --}}
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
 {{--    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
{{--     <link href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" rel="Stylesheet"></link>
   <link href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" rel="Stylesheet"></link>
<script src='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js'></script>
<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js" ></script> --}}

    </head>

    <body>
      <div class="input-field">
      <input type="text" name="" id="searchData">
    </div>



      
{{-- <div class="container">
    <h1>Laravel 5.8 Autocomplete Search using Bootstrap Typeahead JS - ItSolutionStuff.com</h1>   
    <input class="typeahead form-control" type="text">
</div>
    --}}



<div class="form-group">
  <input type="text" name="prod_name" id="prod_name" class="form-control" placeholder="type prod name">
  <div id="prod_list"></div>
  @csrf
</div>

{{--       <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script> --}}

      <script src="{{asset('public/admin/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('public/admin/js/typo.js')}}"></script>
  <!--JavaScript at end of body for optimized loading-->
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> --}}

   <script type="text/javascript">
    var path = "{{ route('autocomplete') }}";
      $('input.typeahead').typeahead({
          source:  function (query, process) {
          return $.get(path, { query: query }, function (data) {
                  return process(data);
              });
          }


      });
    </script>

    <script type="text/javascript">
      $(document).ready(function(){

          $('#prod_name').keyup(function(){
            var query= $(this).val();
            if(query != '')
            {
              var _token= $('input[name="_token"]').val();
              $.ajax({
                 url:"{{ route('autocomplete3') }}",
                 method: "post",
                 data:{query:query,_token:_token},
                 success:function(data)
                 {
                  $('#prodlist').fadeIn()
                  $('#prodlist').html(data)
                 }
              })
            }
          });
      })

    </script>

{{-- materileze js autocomplete code --}}
   <script type="text/javascript">
      
             $(document).ready(function(){
                console.log('test');
                $.ajax({
                    type:'get',
                    url:'{!!URL::to('getproduct')!!}',
                    success:function(response){
                        console.log(response);

                        //convert arry to object
                        var custArray=response;
                        var dataCust={};
                        for(var i=0;i<custArray.length; i++)
                        {
                          dataCust[custArray[i].prod_name] =null;
                        }
                        console.log("dataCust");
                        console.log(dataCust);
                        //end conversion

                        //material css
                        $('input#searchData').autocomplete({
                          data: dataCust,
                        });
                      //end materail css
                    }
                })
              });

        </script>

  {{-- materileze js autocomplete code end --}}     

          
    </body>

  </html>



