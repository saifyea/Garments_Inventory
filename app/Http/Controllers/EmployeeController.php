<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Employee;
use Illuminate\Support\Str;


class EmployeeController extends Controller
{
    public function index()
    {
        $emp_data=DB::table('employees')->get();
        return view ('pages.employee.employee',compact('emp_data'));
    }

    public function RegEmp(Request $request)
    {
        // $validatedData = $request->validate([
     //    'emp_id' => 'required',
     //    'emp_name' => 'required',
     //    'designation' => 'required',
     //    'image'=>'required',
     //    'join_date'=>'required',
     //    'emp_department'=>'required',
     //    ]);

        $emp_data=array();
        $emp_data['emp_id']=$request->emp_id;
        $emp_data['emp_name']=$request->emp_name;
        $emp_data['designation']=$request->emp_designation;
        $emp_data['join_date']=$request->join_date;
        $emp_data['emp_department']=$request->emp_department;
        $emp_data['emp_details']=$request->details;
        $image=$request->image;

       if($image)
       {
        $image_name=Str::random(20);
        $ext=strtolower($image->getClientOriginalExtension());
        $image_full_name=$image_name.'.'.$ext;
        $upload_path='public/employee/emp_img/';
        $image_url=$upload_path.$image_full_name;
        $success=$image->move($upload_path,$image_full_name);
            if($success)
            {
                $emp_data['emp_image']=$image_url;
                $postimage=DB::table('employees')->insert($emp_data);
            }
                if($postimage)

                {
                    $notification=array(
                        'message'=>"Employee Resigter Successfully",
                        'alert-type'=>'success'
                    );
                    return Redirect()->back()->with($notification);
                }else
                {
                    $notification=array(
                        'message'=>" Employee Not Resigter",
                        'alert-type'=>'success'
                    );
                    return Redirect()->back()->with($notification);
                }


           }else
           {
            return Redirect()->back();
           }
    }

//single emplyee delete function
    public function DelEmp($emp_id)
    {
        $success=DB::table('employees')->where('emp_id',$emp_id)->first();
            if($success)
            {
                $img=$success->emp_image;
                unlink($img);
                $delemp=DB::table('employees')->where('emp_id',$emp_id)->delete();
            }
                if($delemp)

                {
                    $notification=array(
                        'message'=>"Employee Deleted Successfully",
                        'alert-type'=>'success'
                    );
                    return Redirect()->back()->with($notification);
                }else
                {
                    $notification=array(
                        'message'=>" Employee Not Delete",
                        'alert-type'=>'success'
                    );
                    return Redirect()->back()->with($notification);
                }


    }

//Single Emplyee view function 
    public function SingleEmp($emp_id)
    {
       $data=DB::table('employees')->where('emp_id',$emp_id)->first();
        $product2=DB::table('orderdetails')
            ->join('orders','orderdetails.order_id','orders.id')
            ->join('products','orderdetails.product_id','products.prod_code')
            ->select('orderdetails.*','orders.order_date','products.prod_name','orders.issued_by')
            ->where('orderdetails.emp_id',$emp_id)
            ->get();

            // echo "<pre>";
            // print_r($data->emp_id);
            // print_r($product2);
            // exit();
       return view ('pages.employee.SingleEmployee',compact('data','product2'));
    }

//Single employee update
    public function UpdEmp(Request $request, $emp_id)
    {
        $emp_data=array();
        $emp_data['emp_id']=$request->emp_id;
        $emp_data['emp_name']=$request->emp_name;
        $emp_data['designation']=$request->emp_designation;
        $emp_data['join_date']=$request->join_date;
        $emp_data['emp_department']=$request->emp_department;
        $emp_data['emp_details']=$request->details;
        $image=$request->image;

       if($image)
       {
        $image_name=Str::random(20);
        $ext=strtolower($image->getClientOriginalExtension());
        $image_full_name=$image_name.'.'.$ext;
        $upload_path='public/employee/emp_img/';
        $image_url=$upload_path.$image_full_name;
        $success=$image->move($upload_path,$image_full_name);
            if($success)
            {
                $success=DB::table('employees')->where('emp_id',$emp_id)->first();
                $img=$success->emp_image;
                unlink($img);
                $emp_data['emp_image']=$image_url;
                $postimage=DB::table('employees')->where('emp_id',$emp_id)->update($emp_data);
            }
                if($postimage)

                {
                    $notification=array(
                        'message'=>"Employee Update Successfully",
                        'alert-type'=>'success'
                    );
                    return Redirect()->back()->with($notification);
                }else
                {
                    $notification=array(
                        'message'=>" Employee Not Update",
                        'alert-type'=>'success'
                    );
                    return Redirect()->back()->with($notification);
                }


           }else
           {
            return Redirect()->back();
           }
    }

}
