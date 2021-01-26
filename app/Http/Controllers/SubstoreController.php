<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class SubstoreController extends Controller
{
    public function substorePage()
    {
        $data=DB::table('substores')->get();
   		return view ('pages.subStore',compact('data'));

        //return view('pages.store');
    }

//Add store name
    public function AddsubStore(Request $request)
   {
   		$data=array();
   		$data['substoreName']=$request->substore;
   		//print_r($data);
   		$postdata=DB::table('substores')->insert($data);
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
   public function EditsubStore($substoreid)
   {
   	$data=DB::table('substores')->where('substoreid',$substoreid)->first();
     return view ('pages.substoreEdit',compact('data'));
   	//print_r($data);
   }

//Update store
   public function UpdatesubStore(Request $request, $substoreid)

   {
		$data=array();
   		$data['substorename']=$request->substore;
   		//print_r($data);
   		//exit;
   		$postdata=DB::table('substores')->where('substoreid',$substoreid)->update($data);
   		if($postdata)

                {
                    $notification=array(
                        'message'=>"Sub Store Update Successfully",
                        'alert-type'=>'success'
                    );
                     return Redirect()->back()->with($notification);
                }else
                {
                    $notification=array(
                        'message'=>" Sub Store Not Update",
                        'alert-type'=>'success'
                    );
                    return Redirect()->back()->with($notification);
                }

   }
}
