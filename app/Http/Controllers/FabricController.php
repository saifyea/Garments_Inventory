<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Cart;
use Illuminate\Support\Facades\Auth;
class FabricController extends Controller
{
    public function index()
    {
        Cart::destroy();
        $doc=DB::table('dockets')->distinct()->orderby('docket_no', 'desc')->get();
    	return view('pages.fabrics.addFabric',compact('doc'));
    }
    public function SaveFabric(Request $request)
    {
    	$datafabric['style_no']=$request->style_no;
    	$datafabric['docket_no']=$request->docket_no;
    	$datafabric['fabric_code']=$request->fabric_code;
    	$datafabric['order_no']=$request->order_no;
    	$datafabric['lot_no']=$request->lot_no;
    	$datafabric['shade_no']=$request->shade_no;
    	$datafabric['buyer']=$request->buyer;
    	$datafabric['sup_id']=$request->sup_id;
    	$datafabric['color']=$request->color;
    	$datafabric['rolls']=$request->rolls;
    	$datafabric['fabric_length']=$request->fabric_length;
    	$datafabric['width']=$request->width;
    	$datafabric['recv_date']=$request->recv_date;
    	$datafabric['prod_store_area']=$request->prod_store_area;
    	$datafabric['fabric_route']=$request->fabric_route;
    	$datafabric['construction']=$request->construction;
        $datafabric['actual_qty']=$request->fabric_length;
        $datafabric['febric_price']=$request->price;
    	$image=$request->fabric_photo;
       if($image)
       {
        $image_name=$request->fabric_code.'_'.$request->style_no;
        $ext=strtolower($image->getClientOriginalExtension());
        $image_full_name=$image_name.'.'.$ext;
        $upload_path='public/fabric/';
        $image_url=$upload_path.$image_full_name;
        $success=$image->move($upload_path,$image_full_name);
            if($success)
            {
                $datafabric['fabric_photo']=$image_url;
                $postimage=DB::table('fabrics')->insert($datafabric);
            }
                if($postimage)

                {
                    $notification=array(
                        'message'=>"Fabric Saved Successfully",
                        'alert-type'=>'success'
                    );
                    return Redirect()->back()->with($notification);
                }else
                {
                    $notification=array(
                        'message'=>" Product Not Resigter",
                        'alert-type'=>'success'
                    );
                    return Redirect()->back()->with($notification);
                }


           }else
           {
            return Redirect()->back();
           }
    }//end of insert fabric

    public function allFabric()
    {
    	Cart::destroy();
        $fdata=DB::table('fabrics')->get();
    	return view('pages.fabrics.allFabric',compact('fdata'));
    }
    public function singleFabric($id)
    {
    	$fadata=DB::table('fabrics')->where('fabric_code',$id)->first();
    	// echo "<pre>";
     //    print_r($fadata);
     //    exit();

        return view ('pages.fabrics.singleFabric')->with('fdata',$fadata);

    }

    public function editFabric($id)
    {
    	$fadata=DB::table('fabrics')->where('fabric_code',$id)->first();
    	return view ('pages.fabrics.editFabric')->with('fdata',$fadata);
    }
    public function UpdateFabric(Request $request, $id)
    {
    	$datafabric['style_no']=$request->style_no;
    	$datafabric['docket_no']=$request->docket_no;
    	$datafabric['fabric_code']=$request->fabric_code;
    	$datafabric['order_no']=$request->order_no;
    	$datafabric['lot_no']=$request->lot_no;
    	$datafabric['shade_no']=$request->shade_no;
    	$datafabric['buyer']=$request->buyer;
    	$datafabric['sup_id']=$request->sup_id;
    	$datafabric['color']=$request->color;
    	$datafabric['rolls']=$request->rolls;
    	$datafabric['fabric_length']=$request->fabric_length;
    	$datafabric['width']=$request->width;
    	$datafabric['recv_date']=$request->recv_date;
    	$datafabric['prod_store_area']=$request->prod_store_area;
    	$datafabric['fabric_route']=$request->fabric_route;
    	$datafabric['construction']=$request->construction;
        $datafabric['actual_qty']=$request->actual_qty;
        $datafabric['febric_price']=$request->price;
    	$image=$request->fabric_photo;
    	if($image)
       {
        $image_name=$request->fabric_code.'_'.$request->style_no;
        $ext=strtolower($image->getClientOriginalExtension());
        $image_full_name=$image_name.'.'.$ext;
        $upload_path='public/fabric/';
        $image_url=$upload_path.$image_full_name;
        $success=$image->move($upload_path,$image_full_name);
            if($success)
            {
   
                
                $success=DB::table('fabrics')->where('fabric_code',$id)->first();
                $img=$success->fabric_photo;
                unlink($img);
                $datafabric['fabric_photo']=$image_url;
                $postimage=DB::table('fabrics')->where('fabric_code',$id)->update($datafabric);
            }
                if($postimage)

                {
                    $notification=array(
                        'message'=>"Fabric Update Successfully",
                        'alert-type'=>'success'
                    );
                    return Redirect()->back()->with($notification);
                }else
                {
                    $notification=array(
                        'message'=>" Fabric Not Update",
                        'alert-type'=>'success'
                    );
                    return Redirect()->back()->with($notification);
                }


           }else
           {
           $image=DB::table('fabrics')->where('fabric_code',$id)->first();
           $datafabric['fabric_photo']=$image->fabric_photo;
           $postdata=DB::table('fabrics')->where('fabric_code',$id)->update($datafabric);
            // echo '<pre>';
            // print_r($postdata);
            if($postdata)

                {
                    $notification=array(
                        'message'=>"Fabric Update Successfully",
                        'alert-type'=>'success'
                    );
                    return Redirect()->back()->with($notification);
                }else
                {
                    $notification=array(
                        'message'=>" Fabric Not Update",
                        'alert-type'=>'success'
                    );
                    return Redirect()->back()->with($notification);
                }

           }

    }//end of fabric function

    public function issueFabric()
    {
		$prod_data=DB::table('fabrics')->get();
		return view ('pages.fabrics.issueFabric',compact('prod_data'));
    }


    Public function AddCart(Request $request)
    {
       $data=array();
       $data['id']=$request->id;
       $data['name']=$request->name;
       $data['qty']=$request->qty;
       $data['weight']=$request->weight;
       $data['price']=$request->price;
      //  echo "<pre>";
      //  print_r($data);
      // exit();
        $items=DB::table('fabrics')->where('fabric_code',$request->id)->first();
       //  echo "<pre>";
       // print_r($items);
       // exit();
        if($request->qty>$items->fabric_length)
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
        $style_no=$request->fabric_code;
        $items=DB::table('fabrics')->where('fabric_code',$style_no)->first();
       // echo "<pre>";
       //     print_r($items);
       //     exit();

        if($qty>$items->fabric_length)
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



    public function InvoiceCart(Request $request)
    {
        $validatedData = $request->validate([
        'emp_id' => 'required'],
        ['emp_id.required'=>'Please Select A Employee'
         ]);
       
        $emp_id=$request->emp_id;
        $order_no=$request->order_no;
        $color=$request->color;
        $buyer=$request->buyer;
        $style_no=$request->style_no;
        $employee_info=DB::table('employees')->where('emp_id',$emp_id)->first();
        $inv_contents=Cart::content();
         // echo "<pre>";
         // print_r($employee_info);
         // print_r($inv_contents);
         // print_r($color);
         // print_r($buyer);
         // print_r($order_no);
         // exit();
        return view ('pages.fabrics.fabricInvice',compact('employee_info','inv_contents','order_no','color','buyer','style_no'));

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

        
        $order_id=DB::table('fa_orders')->insertGetId($data);
        $contents=Cart::content();
        $orderData=array();
        foreach ($contents as $content) {
           $orderData['order_id']=$request->order_no;
           $orderData['emp_id']=$request->emp_id;
           $orderData['fabric_code']=$content->id; 
           $orderData['quantity']=$content->qty; 
           $orderData['unicost']=$content->price; 
           $orderData['total']=$content->total; 
           $orderData['color']=$request->color;
           $orderData['buyer']=$request->buyer;
           $orderData['style_no']=$request->style_no;

           $insert=DB::table('fa_orderdetails')->insert($orderData);
 		//Update fabric stock code
           $pro_code['fabric_code']=$content->id; 
           $product_qty=DB::table('fabrics')->where('fabric_code',$pro_code)->first();
           $qty['fabric_length']=$product_qty->fabric_length-$content->qty; 
           $product_update=DB::table('fabrics')->where('fabric_code',$pro_code)->update($qty);
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

    // Public function AddCart(Request $request)
    // {
    //    $data=array();
    //    $data['id']=$request->id;
    //    $data['name']=$request->name;
    //    $data['qty']=$request->qty;
    //    $data['weight']=$request->weight;
    //    $data['price']=$request->price;
    //    //$data['color']=$request->color;
    //    $add=Cart::add($data);

    //     if($add)

    //             {
    //                 $notification=array(
    //                     'message'=>"Product Added Successfully",
    //                     'alert-type'=>'success'
    //                 );
    //                 return Redirect()->back()->with($notification);
    //             }else
    //             {
    //                 $notification=array(
    //                     'message'=>" Product Not Added",
    //                     'alert-type'=>'success'
    //                 );
    //                 return Redirect()->back()->with($notification);
    //             }

    // }

    public function allissuedFabric()
    {
       Cart::destroy();
       $order_data=DB::table('fa_orders')
            ->join('employees','fa_orders.emp_id','employees.emp_id')
            ->join('fa_orderdetails','fa_orderdetails.order_id','fa_orders.order_id')
            ->select('fa_orders.*','employees.emp_name','fa_orderdetails.fabric_code','fa_orderdetails.order_id','fa_orderdetails.color')
            ->get();
//,'fa_orderdetails.style_no'
    return view ('pages.fabrics.allissuedFabric',compact('order_data'));

    }// all order function end here


     public function viewIssue($id)
    {
       $order_data=DB::table('fa_orders')
            ->join('employees','fa_orders.emp_id','employees.emp_id')
             ->select('fa_orders.*','employees.emp_name','employees.designation','employees.emp_department')
            ->first();
        $order_items=DB::table('fa_orderdetails')
            ->join('fabrics','fabrics.fabric_code','fa_orderdetails.fabric_code')
            ->select('fa_orderdetails.*','fabrics.style_no')->where('order_id',$id)
            ->get();

        return view ('pages.fabrics.viewissueFabric',compact('order_data','order_items'));
    }

}

