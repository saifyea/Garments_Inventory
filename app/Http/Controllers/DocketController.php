<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ProductsExport;
use PDF;
class DocketController extends Controller
{
    public function index()
    {
        
    	return view ('pages.docket.addDocket');

    }

    Public function SaveDocket(Request $request)
    {
    	$DockData=array();
    	$DockData['docket_no']=$request->docket_no;
    	$DockData['style_no']=$request->style_no;
    	$DockData['buyer']=$request->buyer;
    	$DockData['po_no']=$request->po_no;
    	$DockData['items']=$request->items;
        $DockData['order_qty']=$request->order_qty;
        $DockData['ship_date']=$request->ship_date;
    	$DockData['fabric_type']=$request->fabric_type;
    	$DockData['pocketing']=$request->pocketing;
    	$DockData['fuisng']=$request->fuisng;
    	$DockData['wash']=$request->wash;
    	$DockData['thread']=$request->thread;
    	$DockData['elastic']=$request->elastic;
    	$DockData['button']=$request->button;
    	$DockData['zipper']=$request->zipper;
    	$DockData['price_sticker']=$request->price_sticker;
    	$DockData['poly_sticker']=$request->poly_sticker;
    	$DockData['size_sticker']=$request->size_sticker;
    	$DockData['barcode_sticker']=$request->barcode_sticker;
    	$DockData['other_stickers']=$request->other_stickers;
    	$DockData['main_label']=$request->main_label;
    	$DockData['care_label']=$request->care_label;
    	$DockData['size_label']=$request->size_label;
        $DockData['size_label']=$request->size_label;
    	$DockData['decor_label']=$request->decor_label;
        $DockData['other_lebels']=$request->other_lebels;
    	$DockData['hook_bar']=$request->hook_bar;
    	$DockData['rivets']=$request->rivets;
    	$DockData['patch']=$request->patch;
    	$DockData['tags']=$request->tags;
    	$DockData['cartoon_sticker']=$request->cartoon_sticker;
    	$DockData['others_items']=$request->others_items;
        $DockData['poly']=$request->poly;
        $DockData['cartoon']=$request->cartoon;
    
        // echo "<pre>";
        // print_r($DockData);
        // exit();

        $postdata=DB::table('dockets')->insert($DockData);
        if($postdata)

                {
                    $notification=array(
                        'message'=>"Docket Saved Successfully",
                        'alert-type'=>'success'
                    );
                    return Redirect('/all-dockets')->with($notification);
                }else
                {
                    $notification=array(
                        'message'=>" Docket Not Saved",
                        'alert-type'=>'success'
                    );
                    return Redirect('/all-dockets')->with($notification);
                }

    }


    public function AllDocket()
    {
        $DockData=DB::table('dockets')->get();
        return view('pages.docket.allDockets',compact('DockData'));
    }

    public function SingleView($id)
    {
        
    	$data=DB::table('dockets')->where('docket_no',$id)->first();
        $acc=DB::table('accessories')->where('style_no', $data->style_no)->get();
        $threads=DB::table('threads')->where('style_no', $data->style_no)->first();
        $fabrics=DB::table('fabrics')->where('style_no', $data->style_no)->first();

        // $an=$data->style_no;
        // echo "<pre>";
        // print_r($acc);
        // echo "<br>";
        // print_r($data);
        // echo $an;
        // exit();

        return view ('pages.docket.singleDocket',compact('data','acc','threads','fabrics'));
    }

    public function editDocket($id)
    {
    	$DockData=DB::table('dockets')->where('docket_no',$id)->first();
        return view ('pages.docket.updateDocket')->with('data',$DockData);
    }


    public function updateDocket(Request $request, $id)
    {
    	$DockData=array();
    	$DockData['docket_no']=$request->docket_no;
    	$DockData['style_no']=$request->style_no;
    	$DockData['buyer']=$request->buyer;
    	$DockData['po_no']=$request->po_no;
    	$DockData['items']=$request->items;
        $DockData['order_qty']=$request->order_qty;
        $DockData['ship_date']=$request->ship_date;
    	$DockData['fabric_type']=$request->fabric_type;
    	$DockData['pocketing']=$request->pocketing;
    	$DockData['fuisng']=$request->fuisng;
    	$DockData['wash']=$request->wash;
    	$DockData['thread']=$request->thread;
    	$DockData['elastic']=$request->elastic;
    	$DockData['button']=$request->button;
    	$DockData['zipper']=$request->zipper;
    	$DockData['price_sticker']=$request->price_sticker;
    	$DockData['poly_sticker']=$request->poly_sticker;
    	$DockData['size_sticker']=$request->size_sticker;
    	$DockData['barcode_sticker']=$request->barcode_sticker;
    	$DockData['other_stickers']=$request->other_stickers;
    	$DockData['main_label']=$request->main_label;
    	$DockData['care_label']=$request->care_label;
    	$DockData['size_label']=$request->size_label;
        $DockData['size_label']=$request->size_label;
    	$DockData['decor_label']=$request->decor_label;
        $DockData['other_lebels']=$request->other_lebels;
    	$DockData['hook_bar']=$request->hook_bar;
    	$DockData['rivets']=$request->rivets;
    	$DockData['patch']=$request->patch;
    	$DockData['tags']=$request->tags;
    	$DockData['cartoon_sticker']=$request->cartoon_sticker;
    	$DockData['others_items']=$request->others_items;
        $DockData['poly']=$request->poly;
        $DockData['cartoon']=$request->cartoon;
        
        // echo "<pre>";
        // print_r($DockData);
        // exit();

        $updata=DB::table('dockets')->where('docket_no',$id)->update($DockData);
        if($updata)

                {
                    $notification=array(
                        'message'=>"Docket Update Successfully",
                        'alert-type'=>'success'
                    );
                    return Redirect('/all-dockets')->with($notification);
                }else
                {
                    $notification=array(
                        'message'=>" Docket Not Update",
                        'alert-type'=>'success'
                    );
                   return Redirect('/all-dockets')->with($notification);
                }
    }

     public function export()
    {
      return Excel::download(new ProductsExport, 'Dockets.xlsx');
    
    }

   
}
