<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Cart;
use Illuminate\Support\Facades\Auth;

class ChamicalController extends Controller
{
   public function index()
    {
    	return view('pages.chamical.addChamical');
    }
    public function SaveChamical(Request $request)
    {
    	$data['style_no']=$request->style_no;
    	$data['buyer']=$request->buyer;
    	$data['chamical_id']=$request->chamical_id;
    	$data['chamical_name']=$request->chamical_name;
    	$data['chamical_type']=$request->chamical_type;
    	$data['chamical_stored']=$request->chamical_stored;
    	$data['sup_id']=$request->sup_id;
    	$data['recv_date']=$request->recv_date;
        $data['unit']=$request->unit;
    	$data['ttl_recv']=$request->ttl_recv;
        $data['actual_qty']=$request->ttl_recv;
        $data['chamical_price']=$request->price;
    	$data['chamical_comments']=$request->chamical_comments;
    	$image=$request->chamical_photo;
       if($image)
       {
        $image_name=$request->chamical_id.'_'.$request->style_no;
        $ext=strtolower($image->getClientOriginalExtension());
        $image_full_name=$image_name.'.'.$ext;
        $upload_path='public/chamicals/';
        $image_url=$upload_path.$image_full_name;
        $success=$image->move($upload_path,$image_full_name);
            if($success)
            {
                $data['chamical_photo']=$image_url;
                $postimage=DB::table('chamicals')->insert($data);
            }
                if($postimage)

                {
                    $notification=array(
                        'message'=>"Chamicals Saved Successfully",
                        'alert-type'=>'success'
                    );
                    return Redirect()->back()->with($notification);
                }else
                {
                    $notification=array(
                        'message'=>" Chamical Not Resigter",
                        'alert-type'=>'success'
                    );
                    return Redirect()->back()->with($notification);
                }


           }else
           {
            return Redirect()->back();
           }
    }//end of insert fabric

    public function allChamical()
    {
    	$chdata=DB::table('chamicals')->get();
    	return view('pages.chamical.allChamical',compact('chdata'));
    }
    public function singleChamical($id)
    {
    	$chdata=DB::table('chamicals')->where('chamical_id',$id)->first();
       
    	return view ('pages.chamical.singleChamical')->with('chdata',$chdata);

    }

    public function editChamical($id)
    {
    	$fadata=DB::table('chamicals')->where('chamical_id',$id)->first();
    	return view ('pages.chamical.editChamical')->with('cdata',$fadata);
    }
    public function UpdateChamical(Request $request, $id)
    {
    	$data['style_no']=$request->style_no;
    	$data['buyer']=$request->buyer;
    	$data['chamical_id']=$request->chamical_id;
    	$data['chamical_name']=$request->chamical_name;
    	$data['chamical_type']=$request->chamical_type;
    	$data['chamical_stored']=$request->chamical_stored;
    	$data['sup_id']=$request->sup_id;
    	$data['recv_date']=$request->recv_date;
    	$data['ttl_recv']=$request->ttl_recv;
        $data['ttl_recv']=$request->actual_qty;
        $data['chamical_price']=$request->price;
        $data['unit']=$request->unit;
    	$data['chamical_comments']=$request->chamical_comments;
    	$image=$request->chamical_photo;
    	if($image)
       {
        $image_name=$request->chamical_id.'_'.$request->style_no;
        $ext=strtolower($image->getClientOriginalExtension());
        $image_full_name=$image_name.'.'.$ext;
        $upload_path='public/chamicals/';
        $image_url=$upload_path.$image_full_name;
        $success=$image->move($upload_path,$image_full_name);
            if($success)
            {
   
                
                $success=DB::table('chamicals')->where('chamical_id',$id)->first();
                $img=$success->chamical_id_photo;
                unlink($img);
                $data['chamical_photo']=$image_url;
                $postimage=DB::table('chamicals')->where('chamical_id',$id)->update($data);
            }
                if($postimage)

                {
                    $notification=array(
                        'message'=>"Chamical Update Successfully",
                        'alert-type'=>'success'
                    );
                    return Redirect()->back()->with($notification);
                }else
                {
                    $notification=array(
                        'message'=>" Chamical Not Update",
                        'alert-type'=>'success'
                    );
                    return Redirect()->back()->with($notification);
                }


           }else
           {
           $image=DB::table('chamicals')->where('chamical_id',$id)->first();
           $data['chamical_photo']=$image->chamical_photo;
           $postdata=DB::table('chamicals')->where('chamical_id',$id)->update($data);
            // echo '<pre>';
            // print_r($postdata);
            if($postdata)

                {
                    $notification=array(
                        'message'=>"Chamical Update Successfully",
                        'alert-type'=>'success'
                    );
                    return Redirect()->back()->with($notification);
                }else
                {
                    $notification=array(
                        'message'=>" Chamical Not Update",
                        'alert-type'=>'success'
                    );
                    return Redirect()->back()->with($notification);
                }

           }

    }//end of fabric function

    public function issueChamical()
    {
		$prod_data=DB::table('chamicals')->get();
		return view ('pages.chamical.issueChamical',compact('prod_data'));
    }


    public function InvoiceCart(Request $request)
    {
        $validatedData = $request->validate([
        'emp_id' => 'required'],
        ['emp_id.required'=>'Please Select A Employee'
         ]);
       
        $emp_id=$request->emp_id;
        $order_no=$request->order_no;
        $chamical_id=$request->chamical_id;
        $employee_info=DB::table('employees')->where('emp_id',$emp_id)->first();
        $inv_contents=Cart::content();
         // echo "<pre>";
         // print_r($employee_info);
         // print_r($inv_contents);
         // print_r($order_no);
         // print_r($chamical_id);
         // exit();
        return view ('pages.chamical.chamicalInvice',compact('employee_info','inv_contents','order_no','chamical_id'));

    }


    Public function FinalInvoiceCart(Request $request)
    {
       
        $user = Auth::user();
        $data=array();
        $data['order_id']=$request->order_no;
        $data['chamical_id']=$request->chamical_id;
        $data['emp_id']=$request->emp_id;
        $data['order_date']=$request->order_date;
        $data['order_status']=$request->order_status;
        $data['total_products']=$request->total_products;
        $data['issued_by']=$user->name;
        $order_id=DB::table('ch_orders')->insertGetId($data);
        $contents=Cart::content();
        $orderData=array();
        foreach ($contents as $content) {
           $orderData['order_id']=$request->order_no;
           $orderData['emp_id']=$request->emp_id;
           $orderData['chamical_id']=$request->chamical_id;
           $orderData['quantity']=$content->qty; 
           $orderData['unicost']=$content->price; 
           $orderData['total']=$content->total; 
           $insert=DB::table('ch_orderdetails')->insert($orderData);
 		//Update fabric stock code
           $pro_code['chamical_id']=$content->id; 
           $product_qty=DB::table('chamicals')->where('chamical_id',$pro_code)->first();
           $qty['ttl_recv']=$product_qty->ttl_recv-$content->qty; 
           $product_update=DB::table('chamicals')->where('chamical_id',$pro_code)->update($qty);
    	//end fabric stock code
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
                        'message'=>" Order Not Submited",
                        'alert-type'=>'success'
                    );
                    return Redirect()->back()->with($notification);
                }

       
    }//end function

    Public function AddCart(Request $request)
    {
       $data=array();
       $data['id']=$request->id;
       $data['name']=$request->name;
       $data['qty']=$request->qty;
       $data['weight']=$request->weight;
       $data['price']=$request->price;
        $items=DB::table('chamicals')->where('chamical_id',$request->id)->first();
        if($request->qty>$items->ttl_recv)
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
        $chamical_id=$request->chamical_id;
        $items=DB::table('chamicals')->where('chamical_id',$chamical_id)->first();
        if($qty>$items->ttl_recv)
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


    public function allissuedChamical()
    {
       $order_data=DB::table('ch_orders')
            ->join('employees','ch_orders.emp_id','employees.emp_id')
            ->join('chamicals','chamicals.chamical_id','ch_orders.chamical_id')
            ->join('ch_orderdetails','ch_orderdetails.order_id','ch_orders.order_id')
            ->select('ch_orders.*','employees.emp_name','ch_orderdetails.order_id','chamicals.chamical_name','chamicals.chamical_type')
            ->get();

    return view ('pages.chamical.allissuedChamical',compact('order_data'));

    }// all order function end here


     public function viewIssue($id)
    {
       $order_data=DB::table('ch_orders')
            ->join('employees','ch_orders.emp_id','employees.emp_id')
             ->select('ch_orders.*','employees.emp_name','employees.designation','employees.emp_department')
            ->first();

        $order_items=DB::table('ch_orderdetails')
            ->join('chamicals','chamicals.chamical_id','ch_orderdetails.chamical_id')
            ->select('ch_orderdetails.*','chamicals.chamical_id','chamicals.chamical_name')->where('order_id',$id)
            ->get();

        return view ('pages.chamical.viewissueChamical',compact('order_data','order_items'));
    }
}

