<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Cart;
use Illuminate\Support\Facades\Auth;
class OrderController extends Controller
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
    return view ('pages.addOrder',compact('prod_data'));
    //return view('pages.addOrder');
    }

    Public function AddCart(Request $request)
    {
       $data=array();
       $data['id']=$request->id;
       $data['name']=$request->name;
       $data['qty']=$request->qty;
       $data['weight']=$request->weight;
       $data['price']=$request->price;
       // echo "<pre>";
       // print_r($data);
       // exit();
        $items=DB::table('products')->where('prod_code',$request->id)->first();
        if($request->qty>$items->prod_qty)
        {
            $notification=array(
                        'message'=>"Items is not available in stock",
                        'alert-type'=>'warning'
                    );
                    return Redirect()->back()->with($notification);
        }
        else
        {
            $add=Cart::add($data);
           // echo "<pre>";
           // print_r(cart::content());
           // exit();
            if($add)

                {
                    $notification=array(
                        'message'=>"Product Added Successfully",
                        'alert-type'=>'success'
                    );
                    return Redirect()->back()->with($notification);
                }else
                {
                    $notification=array(
                        'message'=>" Product Not Added",
                        'alert-type'=>'success'
                    );
                    return Redirect()->back()->with($notification);
                }
        }
       

    }

    Public function UpdateCart(Request $request, $rowId)
    {
       

        $qty=$request->qty;
        $prod_code=$request->prod_code;
        $items=DB::table('products')->where('prod_code',$prod_code)->first();
       // $message= array();//place outside the loop
        if($qty>$items->prod_qty)
        {
             $notification=array(
                        'message'=>"Items is not available in stock",
                        'alert-type'=>'warning'
                    );
                    return Redirect()->back()->with($notification);
        }
       
        else
        {
        
            $UpdateCat=Cart::update($rowId,$qty);
            if($UpdateCat)

                {
                    $notification=array(
                        'message'=>"Product Update Successfully",
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

    Public function RemoveCart($rowId)
    {
        $remove=Cart::remove($rowId);

        if($remove)

                {
                    $notification=array(
                        'message'=>"Product Removed Successfully",
                        'alert-type'=>'success'
                    );
                    return Redirect()->back()->with($notification);
                }else
                {
                    $notification=array(
                        'message'=>" Product Not Removed",
                        'alert-type'=>'success'
                    );
                    return Redirect()->back()->with($notification);
                }
    }

    public function InvoiceCart(Request $request)
    {
        $validatedData = $request->validate([
        'emp_id' => 'required'],
        ['emp_id.required'=>'Please Select A Employee'
         ]);
       
        $emp_id=$request->emp_id;
        $employee_info=DB::table('employees')->where('emp_id',$emp_id)->first();
        $inv_contents=Cart::content();
        //echo $employee_id;
        // echo "<br>";
        // echo "<pre>";
        //print_r($inv_contents);
        return view ('pages.invoice',compact('employee_info','inv_contents'));
        //print_r($employee_info);
    }

    Public function FinalInvoiceCart(Request $request)
    {
       
        $user = Auth::user();
        $data=array();
        $data['emp_id']=$request->emp_id;
        $data['order_date']=$request->order_date;
        $data['order_status']=$request->order_status;
        $data['total_products']=$request->total_products;
        $data['sub_total']=$request->sub_total;
        $data['vat']=$request->vat;
        $data['total']=$request->total;
        $data['payment_status']=$request->payment_status;
        $data['pay']=$request->pay;
        $data['due']=$request->due;
        $data['issued_by']=$user->name;
        
        $order_id=DB::table('orders')->insertGetId($data);
        $contents=Cart::content();
        $orderData=array();
        foreach ($contents as $content) {
           $orderData['order_id']=$order_id; 
           $orderData['emp_id']=$request->emp_id;
           $orderData['product_id']=$content->id; 
           $orderData['quantity']=$content->qty; 
           $orderData['unicost']=$content->price; 
           $orderData['total']=$content->total; 
           $insert=DB::table('orderdetails')->insert($orderData);
            
           $pro_code['product_id']=$content->id; 
           $product_qty=DB::table('products')->where('prod_code',$pro_code)->first();
           $qty['prod_qty']=$product_qty->prod_qty-$content->qty; 
           $product_update=DB::table('products')->where('prod_code',$pro_code)->update($qty);
    
        }
        if($insert)

                {
                    $notification=array(
                        'message'=>"Order Submited Successfully",
                        'alert-type'=>'success'
                    );
                    Cart::destroy();
                    return Redirect()->route('home')->with($notification);
                }else
                {
                    $notification=array(
                        'message'=>" Product Not Removed",
                        'alert-type'=>'success'
                    );
                    return Redirect()->back()->with($notification);
                }

       
    }//end function



    public function allOrder()
    {
        Cart::destroy();
       $order_data=DB::table('orders')
            ->join('employees','orders.emp_id','employees.emp_id')
              ->select('orders.*','employees.emp_name')
            ->get();

    return view ('pages.allOrder',compact('order_data'));

    }// all order function end here


    public function viewOrder($id)
    {
       $order_data=DB::table('orders')
            ->join('employees','orders.emp_id','employees.emp_id')
            //->join('employees','orders.emp_id','employees.emp_id')
            // ->join('sub_categories','products.sub_cat_id','sub_categories.sub_cat_id')
              ->select('orders.*','employees.emp_name','employees.designation','employees.emp_department')
            ->first();
        $order_items=DB::table('orderdetails')
            ->join('products','products.prod_code','orderdetails.product_id')
            ->select('orderdetails.*','products.prod_name')->where('order_id',$id)
            ->get();
        // echo "<pre>";
        // print_r($order_data);
        // exit();
        return view ('pages.viewOrder',compact('order_data','order_items'));
    }
}
