<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Cart;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        Cart::destroy();
        $docket=DB::table('dockets')->get();
        $febrics=DB::table('fabrics')->get();
        $thread=DB::table('threads')->get();
        $accessories=DB::table('accessories')->get();
        $product=DB::table('products')->get();
        $employees=DB::table('employees')->get();

        $data=DB::table('orderdetails')
            ->join('orders','orderdetails.order_id','orders.order_id')
            ->join('products','orderdetails.product_id','products.prod_code')
            ->select('orderdetails.*','orders.order_date','products.prod_name')
            ->where('order_date',date('yy-m-d'))->orderby('created_at','desc')->get(); 
       
        $th_order=DB::table('th_orderdetails')
                    ->join('th_orders','th_orders.order_id','th_orderdetails.order_id')
                    ->select('th_orderdetails.*','th_orders.order_date')
                    ->where('order_date',date('yy-m-d'))->orderby('created_at','desc')->get(); 

        $fa_order=DB::table('fa_orderdetails')
                    ->join('fa_orders','fa_orders.order_id','fa_orderdetails.order_id')
                    ->select('fa_orderdetails.*','fa_orders.order_date')
                    ->where('order_date',date('yy-m-d'))->orderby('created_at','desc')->get();

        $acc_order=DB::table('ac_orders')
                ->join('accessories','accessories.accessories_id','ac_orders.accessories_id')
                ->select('ac_orders.*','accessories.accessories_name','accessories.unit')
                ->where('order_date',date('yy-m-d'))->orderby('created_at','desc')->get();  
        // echo "<pre>";
        // print_r($data);

        // exit();
        return view('home',compact('data','docket','febrics','thread','accessories','product','employees','acc_order','th_order','fa_order'));
    }

    Public function search(Request $request)
    {   
        $this->validate($request,[
            'search'=>'required'
        ]);
        Cart::destroy();
        $data=$request->search;
        
        //$fabrics=DB::table('fabrics')->where('constructions','like','%'.$data.'%');

        // $search_content=DB::table('products')
        //         ->where('prod_name','like','%'.$data.'%')
        //         ->where('sup_id','like','%'.$data.'%')
        //         ->where('prod_name','like','%'.$data.'%')
        //         //->union($fabrics)
        //         ->get();

                 $search_content=DB::table('products')
                ->join('categories','products.category_id','categories.category_id')
                ->join('sub_categories','products.sub_cat_id','sub_categories.sub_cat_id')
                 ->where('prod_name','like','%'.$data .'%')
                 ->orwhere('brand','like','%'.$data.'%')

                ->select('products.*','categories.category_name','sub_categories.sub_cat_name')
                  
                  ->get();

                //   if(empty($search_content->prod_name))
                //   {
                //     echo "nothing";
                //     echo "<pre>";
                //     print_r($search_content);
                //     exit();

                //   }
                //   else 
                //     echo "<pre>";
                //     print_r($search_content);
                // exit();
       return view ('pages.search', compact('data','search_content'));
    }

    


   

    // public function search2(){
    //     return view ('pages.searchTest');
    // }


    // public function search3()
    // {
    //     return view('pages.search3');

    // }
    // public function autodata(Request $request)
    // {
        
    //      if($request->get('query'))
    //  {
    //   $query = $request->get('query');
    //   $data = DB::table('products')
    //     ->where('prod_name', 'LIKE', "%{$query}%")
    //     ->get();
    //   $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
    //   foreach($data as $row)
    //   {
    //    $output .= '
    //    <li><a href="#">'.$row->prod_name.'</a></li>
    //    ';
    //   }
    //   $output .= '</ul>';
    //   echo $output;
    //  }

    // }
    
}
