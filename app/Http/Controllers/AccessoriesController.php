<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Cart;
use Illuminate\Support\Facades\Auth;

class AccessoriesController extends Controller
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

    public function index()
    {
    	Cart::destroy();
        $acc=DB::table('dockets')->distinct()->orderBy('docket_no', 'DESC')->get();
    	return view('pages.accessories.addAccessories',compact('acc'));
    }
    public function SaveAccessories(Request $request)
    {
        Cart::destroy();
    	
        $data['accessories_id']=$request->accessories_id;
    	$data['buyer']=$request->buyer;
    	$data['style_no']=$request->style_no;
    	$data['accessories_name']=$request->accessoris_name;
    	$data['ttl_recv']=$request->ttl_recv;
    	$data['unit']=$request->unit;
    	$data['sup_id']=$request->sup_id;
    	$data['recv_date']=$request->recv_date;
    	$data['acc_route']=$request->acc_route;
    	$data['acc_comments']=$request->acc_comments;
        $data['acc_price']=$request->price;
        $data['actual_qty']=$request->ttl_recv;

        // echo "<pre>";
        // print_r($data);
        // exit();

    	$image=$request->acc_photo;
       if($image)
       {
        $image_name=$request->accessories_id.'_'.$request->style_no;
        $ext=strtolower($image->getClientOriginalExtension());
        $image_full_name=$image_name.'.'.$ext;
        $upload_path='public/accessories/';
        $image_url=$upload_path.$image_full_name;
        $success=$image->move($upload_path,$image_full_name);
            if($success)
            {
                $data['acc_photo']=$image_url;
                $postimage=DB::table('accessories')->insert($data);
            }
                if($postimage)

                {
                    $notification=array(
                        'message'=>"Accessories Saved Successfully",
                        'alert-type'=>'success'
                    );
                    return Redirect()->back()->with($notification);
                }else
                {
                    $notification=array(
                        'message'=>" Accessories Not Resigter",
                        'alert-type'=>'success'
                    );
                    return Redirect()->back()->with($notification);
                }


           }else
           {
            return Redirect()->back();
           }
    }//end of insert fabric

      public function allAccessories()
    {
        Cart::destroy();
    	
        $acdata=DB::table('accessories')
    			// ->join('acc_names','acc_names.acc_id','accessories.accessories_name')
    			// ->select('accessories.*','acc_names.acc_name')
    			->get();
    	return view('pages.accessories.allAccessories',compact('acdata'));
    }
    public function singleAccessories($acc_id)
    {
    	$chdata=DB::table('accessories')->where('accessories_id',$acc_id)->first();
       
    	return view ('pages.accessories.singleAccessories')->with('acdata',$chdata);

    }

    public function editAccessories($acc_id)
    {
    	$fadata=DB::table('accessories')->where('accessories_id',$acc_id)->first();
    	return view ('pages.accessories.editAccessories')->with('cdata',$fadata);
    }


public function UpdateAccessories(Request $request, $id)
    {

    	$data['accessories_id']=$request->accessories_id;
    	$data['buyer']=$request->buyer;
    	$data['style_no']=$request->style_no;
    	$data['accessories_name']=$request->accessories_name;
    	$data['ttl_recv']=$request->ttl_recv;
    	$data['unit']=$request->unit;
    	$data['sup_id']=$request->sup_id;
    	$data['recv_date']=$request->recv_date;
    	$data['acc_route']=$request->acc_route;
    	$data['acc_comments']=$request->acc_comments;
        $data['acc_price']=$request->price;
    	$image=$request->acc_photo;
       if($image)
       {
        $image_name=$request->accessories_id.'_'.$request->style_no;
        $ext=strtolower($image->getClientOriginalExtension());
        $image_full_name=$image_name.'.'.$ext;
        $upload_path='public/accessories/';
        $image_url=$upload_path.$image_full_name;
        $success=$image->move($upload_path,$image_full_name);
            if($success)
            {
   
                
                $success=DB::table('accessories')->where('accessories_id',$id)->first();
                $img=$success->accessories_id_photo;
                unlink($img);
                $data['acc_photo']=$image_url;
                $postimage=DB::table('accessories')->where('accessories_id',$id)->update($data);
            }
                if($postimage)

                {
                    $notification=array(
                        'message'=>"Accessories Update Successfully",
                        'alert-type'=>'success'
                    );
                    return Redirect()->back()->with($notification);
                }else
                {
                    $notification=array(
                        'message'=>" Accessories Not Update",
                        'alert-type'=>'success'
                    );
                    return Redirect()->back()->with($notification);
                }


           }else
           {
           $image=DB::table('accessories')->where('accessories_id',$id)->first();
           $data['acc_photo']=$image->acc_photo;
           $postdata=DB::table('accessories')->where('accessories_id',$id)->update($data);
            // echo '<pre>';
            // print_r($postdata);
            if($postdata)

                {
                    $notification=array(
                        'message'=>"Accessories Update Successfully",
                        'alert-type'=>'success'
                    );
                    return Redirect()->back()->with($notification);
                }else
                {
                    $notification=array(
                        'message'=>" Accessories Not Update",
                        'alert-type'=>'success'
                    );
                    return Redirect()->back()->with($notification);
                }

           }

    }//end of update function




     public function issueAccessories()
    {
		
        $prod_data=DB::table('accessories')
					// ->join('acc_names','acc_names.acc_id','accessories.accessories_name')
    	// 		->select('accessories.*','acc_names.acc_name')
				->get();

		return view ('pages.accessories.issueAccessories',compact('prod_data'));
    }


    public function InvoiceCart(Request $request)
    {
        $validatedData = $request->validate([
        'emp_id' => 'required'],
        ['emp_id.required'=>'Please Select A Employee'
         ]);
       
        $emp_id=$request->emp_id;
        $order_no=$request->order_no;
        $accessories_id=$request->accessories_id;
        $employee_info=DB::table('employees')->where('emp_id',$emp_id)->first();
        $inv_contents=Cart::content();
         // echo "<pre>";	
         // print_r($employee_info);
         // print_r($inv_contents);
         // print_r($order_no);
         // print_r($accessories_id);
         // exit();
        return view ('pages.accessories.AccessoriesInvice',compact('employee_info','inv_contents','order_no','accessories_id'));

    }


    Public function FinalInvoiceCart(Request $request)
    {
       
        $user = Auth::user();
        $data=array();
        $data['order_id']=$request->order_no;
        $data['accessories_id']=$request->accessories_id;
        $data['emp_id']=$request->emp_id;
        $data['order_date']=$request->order_date;
        $data['order_status']=$request->order_status;
        $data['total_products']=$request->total_products;
        $data['issued_by']=$user->name;
        $order_id=DB::table('ac_orders')->insertGetId($data);
        $contents=Cart::content();
        $orderData=array();
        foreach ($contents as $content) {
           $orderData['order_id']=$request->order_no;
           $orderData['emp_id']=$request->emp_id;
           $orderData['accessories_id']=$request->accessories_id;
           $orderData['quantity']=$content->qty; 
           $orderData['unicost']=$content->price; 
           $orderData['total']=$content->total; 
           $insert=DB::table('ac_orderdetails')->insert($orderData);
 		//Update fabric stock code
           $pro_code['accessories_id']=$content->id; 
           $product_qty=DB::table('accessories')->where('accessories_id',$pro_code)->first();
           $qty['ttl_recv']=$product_qty->ttl_recv-$content->qty; 
           $product_update=DB::table('accessories')->where('accessories_id',$pro_code)->update($qty);
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
       // echo "<pre>";
       // print_r($data);
       // exit();
        $items=DB::table('accessories')->where('accessories_id',$request->id)->first();
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
        $accessories_id=$request->acc_id;
        $items=DB::table('accessories')->where('accessories_id',$accessories_id)->first();
        // echo "<pre>";
        // print_r($accessories_id);
        // print_r($items);
        // exit();
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


    public function allissuedAccessories()
    {
       $order_data=DB::table('ac_orders')
            ->join('employees','ac_orders.emp_id','employees.emp_id')
            ->join('accessories','accessories.accessories_id','ac_orders.accessories_id')
            ->join('ac_orderdetails','ac_orderdetails.order_id','ac_orders.order_id')
            ->select('ac_orders.*','employees.emp_name','ac_orderdetails.order_id','accessories.accessories_name','accessories.unit')
            ->get();

    return view ('pages.accessories.allissuedAccessories',compact('order_data'));

    }// all order function end here


     public function viewIssue($id)
    {
       $order_data=DB::table('ac_orders')
            ->join('employees','ac_orders.emp_id','employees.emp_id')
             ->select('ac_orders.*','employees.emp_name','employees.designation','employees.emp_department')
            ->first();

        $order_items=DB::table('ac_orderdetails')
            ->join('accessories','accessories.accessories_id','ac_orderdetails.accessories_id')
            ->select('ac_orderdetails.*','accessories.accessories_id','accessories.accessories_name')->where('order_id',$id)
            ->get();

        return view ('pages.accessories.viewissueAccessories',compact('order_data','order_items'));
    }



    // Accessories Name functions are here
    public function acc_namePage()
    {
        $data=DB::table('acc_names')->get();
   		return view ('pages.accessories.acc_name',compact('data'));

        //return view('pages.store');
    }

//Add store name
    public function Addacc_name(Request $request)
   {
   		$data=array();
   		$data['acc_name']=$request->acc_name;
   		//print_r($data);
   		$postdata=DB::table('acc_names')->insert($data);
   		if($postdata)

                {
                    $notification=array(
                        'message'=>"Acce. Name Resigtered Successfully",
                        'alert-type'=>'success'
                    );
                    return Redirect()->back()->with($notification);
                }else
                {
                    $notification=array(
                        'message'=>" Acce. Name Not Resigter",
                        'alert-type'=>'success'
                    );
                    return Redirect()->back()->with($notification);
                }

   }

//view single store
   public function Editacc_name($acc_id)
   {
   	$data=DB::table('acc_names')->where('acc_id',$acc_id)->first();
     return view ('pages.accessories.acc_name_edit',compact('data'));
   	//print_r($data);
   }

//Update store
   public function Updateacc_name(Request $request, $acc_id)

   {
		$data=array();
   		$data['acc_name']=$request->acc_name;
   		//print_r($data);
   		//exit;
   		$postdata=DB::table('acc_names')->where('acc_id',$acc_id)->update($data);
   		if($postdata)

                {
                    $notification=array(
                        'message'=>"Acce. Name Update Successfully",
                        'alert-type'=>'success'
                    );
                     return Redirect('/acc_namee')->with($notification);
                }else
                {
                    $notification=array(
                        'message'=>" Acce. Name Not Update",
                        'alert-type'=>'success'
                    );
                    return Redirect()->back()->with($notification);
                }

   }
    //accessories name function end here

}
