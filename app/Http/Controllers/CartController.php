<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
class CartController extends Controller
{
    Public function AddCart(Request $request)
    {
       $data=array();
       $data['id']=$request->id;
       $data['name']=$request->name;
       $data['qty']=$request->qty;
       $data['price']=$request->price;
       $add=Cart::instance('shopping')->add('192ao12', 'Product 1', 1, 9.99);
        if($add)

                {
                    $notification=array(
                        'message'=>"Order Added Successfully",
                        'alert-type'=>'success'
                    );
                    return Redirect()->back()->with($notification);
                }else
                {
                    $notification=array(
                        'message'=>" Product Not Update",
                        'alert-type'=>'success'
                    );
                    return Redirect()->back()->with($notification);
                }

    }
}
