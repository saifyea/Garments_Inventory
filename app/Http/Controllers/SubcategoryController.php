<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class subcategoryController extends Controller
{
   public function subcategoryPage()
    {
        $data=DB::table('sub_categories')->get();
   		return view ('pages.subcategory',compact('data'));

        //return view('pages.store');
    }

//Add store name
    public function AddsubCategory(Request $request)
   {
   		$data=array();
   		$data['sub_cat_name']=$request->subcategory;
   		//print_r($data);
   		$postdata=DB::table('sub_categories')->insert($data);
   		if($postdata)

                {
                    $notification=array(
                        'message'=>"Category Resigtered Successfully",
                        'alert-type'=>'success'
                    );
                    return Redirect()->back()->with($notification);
                }else
                {
                    $notification=array(
                        'message'=>" Category Not Resigter",
                        'alert-type'=>'success'
                    );
                    return Redirect()->back()->with($notification);
                }

   }

//view single store
   public function EditsubCategory($sub_cat_id)
   {
   	$data=DB::table('sub_categories')->where('sub_cat_id',$sub_cat_id)->first();
     return view ('pages.editsubCategory',compact('data'));
   	//print_r($data);
   }

//Update store
   public function UpdatesubCategory(Request $request, $sub_cat_id)

   {
		$data=array();
   		$data['sub_cat_name']=$request->subcategory;
   		//print_r($data);
   		//exit;
   		$postdata=DB::table('sub_categories')->where('sub_cat_id',$sub_cat_id)->update($data);
   		if($postdata)

                {
                    $notification=array(
                        'message'=>"Sub Category Update Successfully",
                        'alert-type'=>'success'
                    );
                     return Redirect()->back()->with($notification);
                }else
                {
                    $notification=array(
                        'message'=>"SUb Category Not Update",
                        'alert-type'=>'warning'
                    );
                    return Redirect()->back()->with($notification);
                }

   }
}
