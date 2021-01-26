<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class departmentController extends Controller
{
    public function departmentPage()
    {
        $data=DB::table('departments')->get();
   		return view ('pages.department',compact('data'));

        //return view('pages.store');
    }

//Add store name
    public function AddDepartment(Request $request)
   {
   		$data=array();
   		$data['department_name']=$request->department;
   		//print_r($data);
   		$postdata=DB::table('departments')->insert($data);
   		if($postdata)

                {
                    $notification=array(
                        'message'=>"Department Resigtered Successfully",
                        'alert-type'=>'success'
                    );
                    return Redirect()->back()->with($notification);
                }else
                {
                    $notification=array(
                        'message'=>" Department Not Resigter",
                        'alert-type'=>'success'
                    );
                    return Redirect()->back()->with($notification);
                }

   }

//view single store
   public function EditDepartment($department_id)
   {
   	$data=DB::table('departments')->where('department_id',$department_id)->first();
     return view ('pages.EditDepartment',compact('data'));
   	//print_r($data);
   }

//Update store
   public function UpdateDepartment(Request $request, $department_id)

   {
		$data=array();
   		$data['department_name']=$request->store;
   		//print_r($data);
   		//exit;
   		$postdata=DB::table('departments')->where('department_id',$department_id)->update($data);
   		if($postdata)

                {
                    $notification=array(
                        'message'=>"Department Update Successfully",
                        'alert-type'=>'success'
                    );
                     return Redirect()->back()->with($notification);
                }else
                {
                    $notification=array(
                        'message'=>" Department Not Update",
                        'alert-type'=>'success'
                    );
                    return Redirect()->back()->with($notification);
                }

   }
}
