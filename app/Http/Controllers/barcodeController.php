<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Milon\Barcode\DNS1D;
use Milon\Barcode\DNS2D;
Use Cart;
Use PDF;
class barcodeController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$prod_data=DB::table('products')
            ->join('categories','products.category_id','categories.category_id')
            ->join('sub_categories','products.sub_cat_id','sub_categories.sub_cat_id')
                ->select('products.*','categories.category_name','sub_categories.sub_cat_name') 
                  ->get();
    return view ('pages.barcode',compact('prod_data'));
    //return view('pages.addOrder');
    }


    Public function AddBarcode(Request $request)
    {
       $data=array();
       $data['id']=$request->id;
       $data['name']=$request->name;
       $data['qty']=$request->qty;
       $data['weight']=$request->weight;
       $data['price']=$request->price;
       $add=Cart::add($data);
        if($data)

                {
                    $notification=array(
                        'message'=>"Product Added Successfully",
                        'alert-type'=>'success'
                    );
                    return Redirect()->back()->with($notification,$data);
                }else
                {
                    $notification=array(
                        'message'=>" Product Not Added",
                        'alert-type'=>'success'
                    );
                    return Redirect()->back()->with($notification);
                }

	
    }

    Public function clearBarcode()
    {
    	Cart::destroy();
    	return Redirect()->back();
    }


    Public function printBarcode(Request $request)
    {   
        $data=Cart::content();
        $pdf = PDF::loadView('pages.print_barcod', compact('data'));
        return $pdf->stream('Product_Barcode.pdf');
    }



}
