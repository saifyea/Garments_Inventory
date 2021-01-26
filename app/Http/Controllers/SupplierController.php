<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class supplierController extends Controller
{
    public function index()
    {
    	return view('pages.supplier');
    }

    public function indexall()
    {
        $data=DB::table('suppliers')->get();
        return view('pages.allSupplier',compact('data'));
    }

    public function addSupplier(Request $request)
    {
    	$data=array();
        $data['sup_name']=$request->name;
        $data['sup_mobile']=$request->mobile;
        $data['sup_email']=$request->email;
        $data['sup_company']=$request->company;
        $data['sup_address']=$request->address;
        // $data['sup_photo']=$request->prod_desc;
        // $data['model_no']=$request->model_no;
        $image=$request->image;
// print_r($data);
// exit();
       if($image)
       {
        $image_name=$request->name.'_'.$request->mobile;
        $ext=strtolower($image->getClientOriginalExtension());
        $image_full_name=$image_name.'.'.$ext;
        $upload_path='public/supplier/';
        $image_url=$upload_path.$image_full_name;
        $success=$image->move($upload_path,$image_full_name);
            if($success)
            {
                $data['sup_photo']=$image_url;
                $postimage=DB::table('suppliers')->insert($data);
            }
                if($postimage)

                {
                    $notification=array(
                        'message'=>"Supplier Resigter Successfully",
                        'alert-type'=>'success'
                    );
                    return Redirect('/allSupplier')->with($notification);
                }else
                {
                    $notification=array(
                        'message'=>" Supplier Not Resigter",
                        'alert-type'=>'success'
                    );
                    return Redirect('/allSupplier')->with($notification);
                }


           }else
           {
            return Redirect()->back();
           }
    } 

    public function viewSupllier($sup_id)
    {
        $data=DB::table('suppliers')->where('sup_id',$sup_id)->first();
        return view ('pages.singleSupplier',compact('data'));
        //echo "view";
    }

    public function viewSupllierup($sup_id)
    {
        $data=DB::table('suppliers')->where('sup_id',$sup_id)->first();
        return view ('pages.updateSupplier',compact('data'));
        //echo "view";
    }

    public function updateSupplier(Request $request, $sup_id)
    {
        $data=array();
        $data['sup_name']=$request->name;
        $data['sup_mobile']=$request->mobile;
        $data['sup_email']=$request->email;
        $data['sup_company']=$request->company;
        $data['sup_address']=$request->address;
        $image=$request->image;

       if($image)
       {
        $image_name=$request->name.'_'.$request->mobile;
        $ext=strtolower($image->getClientOriginalExtension());
        $image_full_name=$image_name.'.'.$ext;
        $upload_path='public/supplier/';
        $image_url=$upload_path.$image_full_name;
        $success=$image->move($upload_path,$image_full_name);
            if($success)
            {
                $success=DB::table('suppliers')->where('sup_id',$sup_id)->first();
                $img=$success->sup_photo;
                unlink($img);
                $data['sup_photo']=$image_url;
                $postimage=DB::table('suppliers')->where('sup_id',$sup_id)->update($data);
            }
                if($postimage)

                {
                    $notification=array(
                        'message'=>"Supplier Update Successfully",
                        'alert-type'=>'success'
                    );
                    return Redirect()->back()->with($notification);
                }else
                {
                    $notification=array(
                        'message'=>" Supplier Not Update",
                        'alert-type'=>'success'
                    );
                    return Redirect()->back()->with($notification);
                }


           }else
           {
            $image=DB::table('suppliers')->where('sup_id',$sup_id)->first();
            $data['sup_photo']=$image->sup_photo;
            $postdata=DB::table('suppliers')->where('sup_id',$sup_id)->update($data);
            if($postdata)

                {
                    $notification=array(
                        'message'=>"Supplier Update Successfully",
                        'alert-type'=>'success'
                    );
                    return Redirect()->back()->with($notification);
                }else
                {
                    $notification=array(
                        'message'=>" Supplier Not Update",
                        'alert-type'=>'success'
                    );
                    return Redirect()->back()->with($notification);
                }

           }
    }//update function end here
}
