<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Cart;
use Illuminate\Support\Facades\Auth;
use PDF;
use App\Http\Controllers\App;
class ThreadController extends Controller
{
    public function index()
    {   
        Cart::destroy();
        $doc=DB::table('dockets')->distinct()->orderby('docket_no', 'desc')->get();
    	return view('pages.thread.addThread',compact('doc'));
    }
    public function SaveThread(Request $request)
    {
    	$data['thread_code']=$request->thread_code;
        $data['style_no']=$request->style_no;
    	$data['buyer']=$request->buyer;
    	$data['count_no']=$request->count_no;
    	$data['color']=$request->color;
    	$data['shade_no']=$request->shade_no;
    	$data['cone_length']=$request->cone_length;
    	$data['sup_id']=$request->sup_id;
    	$data['recv_date']=$request->recv_date;
    	$data['thread_route']=$request->thread_route;
    	$data['thread_type']=$request->thread_type;
    	$data['ttl_recv_cone']=$request->ttl_recv_cone;
    	$data['thread_comments']=$request->thread_comments;
        $data['actual_qty']=$request->ttl_recv_cone;
        $data['thread_price']=$request->price;
    	$image=$request->thread_photo;
       if($image)
       {
        $image_name=$request->buyer.'_'.$request->thead_code;
        $ext=strtolower($image->getClientOriginalExtension());
        $image_full_name=$image_name.'.'.$ext;
        $upload_path='public/threads/';
        $image_url=$upload_path.$image_full_name;
        $success=$image->move($upload_path,$image_full_name);
            if($success)
            {
                $data['thread_photo']=$image_url;
                $postimage=DB::table('threads')->insert($data);
            }
                if($postimage)

                {
                    $notification=array(
                        'message'=>"Thread Saved Successfully",
                        'alert-type'=>'success'
                    );
                    return Redirect()->back()->with($notification);
                }else
                {
                    $notification=array(
                        'message'=>" Thread Not Resigter",
                        'alert-type'=>'success'
                    );
                    return Redirect()->back()->with($notification);
                }


           }else
           {
            return Redirect()->back();
           }
    }//end of insert fabric

    public function allThread()
    {
    	Cart::destroy();
        $fdata=DB::table('threads')->get();
    	return view('pages.thread.allThread',compact('fdata'));
    }
    public function singleThread($id)
    {
    	$fadata=DB::table('threads')->where('thread_code',$id)->first();
       
    	return view ('pages.thread.singleThread')->with('fdata',$fadata);

    }

    public function editThread($id)
    {
    	$fadata=DB::table('threads')->where('thread_code',$id)->first();
    	return view ('pages.thread.editThread')->with('fdata',$fadata);
    }
    public function UpdateThread(Request $request, $id)
    {
    	$data['thread_code']=$request->thread_code;
        $data['style_no']=$request->style_no;
        $data['buyer']=$request->buyer;
        $data['count_no']=$request->count_no;
        $data['color']=$request->color;
        $data['shade_no']=$request->shade_no;
        $data['cone_length']=$request->cone_length;
        $data['sup_id']=$request->sup_id;
        $data['recv_date']=$request->recv_date;
        $data['thread_route']=$request->thread_route;
        $data['thread_type']=$request->thread_type;
        $data['ttl_recv_cone']=$request->ttl_recv_cone;
        $data['thread_comments']=$request->thread_comments;
        $data['actual_qty']=$request->actual_qty;
        $data['thread_price']=$request->price;
        // echo "<pre>";
        // print_r($data);
        // exit();

    	$image=$request->thread_photo;
    	if($image)
       {
        $image_name=$request->buyer.'_'.$request->thread_code;
        $ext=strtolower($image->getClientOriginalExtension());
        $image_full_name=$image_name.'.'.$ext;
        $upload_path='public/threads/';
        $image_url=$upload_path.$image_full_name;
        $success=$image->move($upload_path,$image_full_name);
            if($success)
            {
   
                
                $success=DB::table('threads')->where('thread_code',$id)->first();
                $img=$success->thread_photo;
                unlink($img);
                $data['thread_photo']=$image_url;
                $postimage=DB::table('threads')->where('thread_code',$id)->update($data);
            }
                if($postimage)

                {
                    $notification=array(
                        'message'=>"Thread Update Successfully",
                        'alert-type'=>'success'
                    );
                    return Redirect()->back()->with($notification);
                }else
                {
                    $notification=array(
                        'message'=>" Thread Not Update",
                        'alert-type'=>'success'
                    );
                    return Redirect()->back()->with($notification);
                }


           }else
           {
           $image=DB::table('threads')->where('thread_code',$id)->first();
           $data['thread_photo']=$image->thread_photo;
           $postdata=DB::table('threads')->where('thread_code',$id)->update($data);
            // echo '<pre>';
            // print_r($postdata);
            if($postdata)

                {
                    $notification=array(
                        'message'=>"Thread Update Successfully",
                        'alert-type'=>'success'
                    );
                    return Redirect()->back()->with($notification);
                }else
                {
                    $notification=array(
                        'message'=>" Thread Not Update",
                        'alert-type'=>'success'
                    );
                    return Redirect()->back()->with($notification);
                }

           }

    }//end of fabric function

    public function issueThread()
    {
		$prod_data=DB::table('threads')->get();
		return view ('pages.thread.issuethread',compact('prod_data'));
    }


    public function InvoiceCart(Request $request)
    {
        $validatedData = $request->validate([
        'emp_id' => 'required'],
        ['emp_id.required'=>'Please Select A Employee'
         ]);
       
        $emp_id=$request->emp_id;
        $order_no=$request->order_no;
        $buyer=$request->buyer;
        $color=$request->color;
        $style_no=$request->style_no;
        $employee_info=DB::table('employees')->where('emp_id',$emp_id)->first();
        $inv_contents=Cart::content();
         // echo "<pre>";
         // print_r($employee_info);
         // print_r($inv_contents);
         // print_r($color);
         // print_r($order_no);
         // print_r($buyer);
         // print_r($style_no);
         // exit();
        return view ('pages.thread.threadInvice',compact('employee_info','inv_contents','order_no','color','buyer','style_no'));

    }


    Public function FinalInvoiceCart(Request $request)
    {
       
        $user = Auth::user();
        $data=array();
        $data['emp_id']=$request->emp_id;
        $data['order_id']=$request->order_no;
        $data['order_date']=$request->order_date;
        $data['order_status']=$request->order_status;
        $data['total_products']=$request->total_products;
        $data['issued_by']=$user->name;
        
        $order_id=DB::table('th_orders')->insertGetId($data);
        $contents=Cart::content();
        $orderData=array();
        foreach ($contents as $content) {
           $orderData['order_id']=$request->order_no;
           $orderData['emp_id']=$request->emp_id;
           $orderData['thread_code']=$content->id; 
           $orderData['style_no']=$content->name; 
           $orderData['quantity']=$content->qty; 
           $orderData['unicost']=$content->price; 
           $orderData['total']=$content->total; 
           $orderData['color']=$request->color;
           $orderData['buyer']=$request->buyer;
           $insert=DB::table('th_orderdetails')->insert($orderData);
 		//Update fabric stock code
           $pro_code['style_no']=$content->id; 
           $product_qty=DB::table('threads')->where('thread_code',$pro_code)->first();
           $qty['ttl_recv_cone']=$product_qty->ttl_recv_cone-$content->qty; 
           $product_update=DB::table('threads')->where('thread_code',$pro_code)->update($qty);
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
                        'message'=>" Product Not Removed",
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
       //$data['thread_code']=$request->thread_code;
       // echo "<pre>";
       // print_r($data);
       // exit();
        $items=DB::table('threads')->where('thread_code',$request->id)->first();
        if($request->qty>$items->ttl_recv_cone)
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
        $thread_code=$request->thread_code;
        $items=DB::table('threads')->where('thread_code',$thread_code)->first();
      // echo "<pre>";
      // print_r($qty);
      // print_r($style_no);
      // exit();
      
        if($qty>$items->ttl_recv_cone)
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

    public function allissuedThread()
    {
       Cart::destroy();
       $order_data=DB::table('th_orders')
            ->join('employees','th_orders.emp_id','employees.emp_id')
            ->join('th_orderdetails','th_orderdetails.order_id','th_orders.order_id')
            ->select('th_orders.*','employees.emp_name','th_orderdetails.style_no','th_orderdetails.order_id','th_orderdetails.color','th_orderdetails.buyer')
            ->get();
//,'fa_orderdetails.style_no'
    return view ('pages.thread.allissuedThread',compact('order_data'));

    }// all order function end here


     public function viewIssue($id)
    {
       $order_data=DB::table('th_orders')
            ->join('employees','th_orders.emp_id','employees.emp_id')
             ->select('th_orders.*','employees.emp_name','employees.designation','employees.emp_department')
            ->first();
        $order_items=DB::table('th_orderdetails')
            ->join('threads','threads.thread_code','th_orderdetails.thread_code')
            ->select('th_orderdetails.*','threads.thread_code')->where('order_id',$id)
            ->get();

        return view ('pages.thread.viewissueThread',compact('order_data','order_items'));
    }


   
}

