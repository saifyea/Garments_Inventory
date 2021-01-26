<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AuotocompleteController extends Controller
{
     function index()
    {
    	return view('pages.autocomplete');

    }
    function fetch(Request $request)
    {
    	 if($request->get('query'))
    	 {
    	 	$query=$request->get('query');
    	 	$data=DB::table('products')
    	 		->where('prod_name', 'like', '%{$query}%')
    	 		->get();

    	 	$output='<ul class="dropdown_menu" style="display:block, position:relative">';
    	 	foreach($data as $row)
    	 	{
    	 		$output .='<li><a href="#">'.$row->prod_name.'</a></li>';
    	 	}
    	 	$output .='</ul>';
    	 	echo $output;


    	 }
    }
}
