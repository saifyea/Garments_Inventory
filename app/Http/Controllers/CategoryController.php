<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class categoryController extends Controller
{
   public function categoryPage()
    {
        $data=DB::table('categories')->get();
   		return view ('pages.category',compact('data'));

        //return view('pages.store');
    }

//Add store name
    public function AddCategory(Request $request)
   {
   		$data=array();
   		$data['category_name']=$request->category;
   		//print_r($data);
   		$postdata=DB::table('categories')->insert($data);
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
   public function EditCategory($category_id)
   {
   	$data=DB::table('categories')->where('category_id',$category_id)->first();
     return view ('pages.editCategory',compact('data'));
   	//print_r($data);
   }

//Update store
   public function UpdateCategory(Request $request, $category_id)

   {
		$data=array();
   		$data['category_name']=$request->category;
   		//print_r($data);
   		//exit;
   		$postdata=DB::table('categories')->where('category_id',$category_id)->update($data);
   		if($postdata)

                {
                    $notification=array(
                        'message'=>"Category Update Successfully",
                        'alert-type'=>'success'
                    );
                     return Redirect()->back()->with($notification);
                }else
                {
                    $notification=array(
                        'message'=>" Category Not Update",
                        'alert-type'=>'success'
                    );
                    return Redirect()->back()->with($notification);
                }

   }
}

