<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class storeController extends Controller
{
    public function storePage()
    {
        $data=DB::table('stores')->get();
   		return view ('pages.store',compact('data'));

        //return view('pages.store');
    }

//Add store name
    public function AddStore(Request $request)
   {
   		$data=array();
   		$data['storeName']=$request->store;
   		//print_r($data);
   		$postdata=DB::table('stores')->insert($data);
   		if($postdata)

                {
                    $notification=array(
                        'message'=>"Store Resigtered Successfully",
                        'alert-type'=>'success'
                    );
                    return Redirect()->back()->with($notification);
                }else
                {
                    $notification=array(
                        'message'=>" Store Not Resigter",
                        'alert-type'=>'success'
                    );
                    return Redirect()->back()->with($notification);
                }

   }

//view single store
   public function EditStore($storeId)
   {
   	$data=DB::table('stores')->where('storeId',$storeId)->first();
     return view ('pages.storeEdit',compact('data'));
   	//print_r($data);
   }

//Update store
   public function UpdateStore(Request $request, $storeId)

   {
		$data=array();
   		$data['storeName']=$request->store;
   		//print_r($data);
   		//exit;
   		$postdata=DB::table('stores')->where('storeId',$storeId)->update($data);
   		if($postdata)

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

   }

}
