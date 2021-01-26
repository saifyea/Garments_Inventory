<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Exports\ProductsExport;
use App\Imports\ProductsImport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
use Cart;
class ProductController extends Controller
{
   public function index()
   {
        Cart::destroy();

    $prod_data=DB::table('products')
            ->join('categories','products.category_id','categories.category_id')
            ->join('sub_categories','products.sub_cat_id','sub_categories.sub_cat_id')
                ->select('products.*','categories.category_name','sub_categories.sub_cat_name')
                  
                  ->get();
    return view ('pages.product.products',compact('prod_data'));	
   }

   public function StockProduct()
   {
    Cart::destroy();
    $prod_data=DB::table('products')
            ->join('categories','products.category_id','categories.category_id')
            ->join('sub_categories','products.sub_cat_id','sub_categories.sub_cat_id')
                ->select('products.*','categories.category_name','sub_categories.sub_cat_name')
                  
                  ->get();
    return view ('pages.product.stockProduct',compact('prod_data'));    
   }

   public function addProduct()
   {
    Cart::destroy();
    return view ('pages.product.addProduct');
   }


   public function SaveProduct(Request $request)
   {
   		$prod_data=array();
        $prod_data['prod_code']=$request->prod_code;
        $prod_data['prod_name']=$request->prod_name;
        $prod_data['prod_qty']=$request->prod_qty;
        $prod_data['actual_qty']=$request->prod_qty;
        $prod_data['prod_notify']=$request->prod_notify;
        $prod_data['category_id']=$request->category_id;
        $prod_data['sub_cat_id']=$request->sub_cat_id;
        $prod_data['sup_id']=$request->sup_id;
        $prod_data['prod_store_area']=$request->prod_store_area;
        $prod_data['prod_route']=$request->prod_route;
        $prod_data['brand']=$request->brand;
        $prod_data['chalan_no']=$request->chalan_no;
        $prod_data['prod_desc']=$request->prod_desc;
        $prod_data['model_no']=$request->model_no;
        $prod_data['prod_recv']=$request->prod_recv;
        $prod_data['prod_price']=$request->prod_price;
        $image=$request->image;
       if($image)
       {
        $image_name=$request->prod_code.'_'.$prod_data['prod_name']=$request->prod_name;
        $ext=strtolower($image->getClientOriginalExtension());
        $image_full_name=$image_name.'.'.$ext;
        $upload_path='public/products/';
        $image_url=$upload_path.$image_full_name;
        $success=$image->move($upload_path,$image_full_name);
            if($success)
            {
                $prod_data['prod_photo']=$image_url;
                $postimage=DB::table('products')->insert($prod_data);
            }
                if($postimage)

                {
                    $notification=array(
                        'message'=>"Product Resigter Successfully",
                        'alert-type'=>'success'
                    );
                    return Redirect('/product')->with($notification);
                }else
                {
                    $notification=array(
                        'message'=>" Product Not Resigter",
                        'alert-type'=>'success'
                    );
                    return Redirect('/product')->with($notification);
                }


           }else
           {
            return Redirect()->back();
           }
   }

   public function singleProduct($prod_code)
    {
      $prod_data=DB::table('products')
                ->join('categories','products.category_id','categories.category_id')
                ->join('suppliers','products.sup_id','suppliers.sup_id')
                ->join('sub_categories','products.sub_cat_id','sub_categories.sub_cat_id')
                ->join('substores','products.prod_store_area','substores.substoreid')
                ->select('products.*','categories.category_name','suppliers.sup_name','sub_categories.sub_cat_name','substores.substoreName')
                  ->where('prod_code',$prod_code)->first();
    return view ('pages.product.editProduct',compact('prod_data'));  
    }

     public function singleProductview($prod_code)
        {
          $prod_data=DB::table('products')
                    ->join('categories','products.category_id','categories.category_id')
                    ->join('suppliers','products.sup_id','suppliers.sup_id')
                    ->join('sub_categories','products.sub_cat_id','sub_categories.sub_cat_id')
                    ->join('substores','products.prod_store_area','substores.substoreid')
                    ->select('products.*','categories.category_name','suppliers.sup_name','sub_categories.sub_cat_name','substores.substoreName')
                      ->where('prod_code',$prod_code)->first();
        return view ('pages.product.viewProduct',compact('prod_data'));  
        }


   public function UpdateProduct(Request $request, $prod_code)
   {
        $prod_data=array();
        $prod_data['prod_code']=$request->prod_code;
        $prod_data['prod_name']=$request->prod_name;
        $prod_data['prod_qty']=$request->prod_qty;
        $prod_data['prod_notify']=$request->prod_notify;
        $prod_data['category_id']=$request->category_id;
        $prod_data['sub_cat_id']=$request->sub_cat_id;
        $prod_data['sup_id']=$request->sup_id;
        $prod_data['prod_store_area']=$request->prod_store_area;
        $prod_data['prod_route']=$request->prod_route;
        $prod_data['brand']=$request->brand;
        $prod_data['chalan_no']=$request->chalan_no;
        $prod_data['prod_desc']=$request->prod_desc;
        $prod_data['model_no']=$request->model_no;
        $prod_data['prod_recv']=$request->prod_recv;
        $prod_data['prod_price']=$request->prod_price;
        $prod_data['actual_qty']=$request->actual_qty;
        $image=$request->image;
       if($image)
       {
        $image_name=$request->prod_code.'_'.$prod_data['prod_name']=$request->prod_name;
        $ext=strtolower($image->getClientOriginalExtension());
        $image_full_name=$image_name.'.'.$ext;
        $upload_path='public/products/';
        $image_url=$upload_path.$image_full_name;
        $success=$image->move($upload_path,$image_full_name);
            if($success)
            {
   
                
                $success=DB::table('products')->where('prod_code',$prod_code)->first();
                $img=$success->prod_photo;
                unlink($img);
                $prod_data['prod_photo']=$image_url;
                $postimage=DB::table('products')->where('prod_code',$prod_code)->update($prod_data);
            }
                if($postimage)

                {
                    $notification=array(
                        'message'=>"Product Update Successfully",
                        'alert-type'=>'success'
                    );
                    return Redirect('/product')->with($notification);
                }else
                {
                    $notification=array(
                        'message'=>" Product Not Update",
                        'alert-type'=>'success'
                    );
                    return Redirect('/product')->with($notification);
                }


           }else
           {
            $image=DB::table('products')->where('prod_code',$prod_code)->first();
            $prod_data['prod_photo']=$image->prod_photo;
           $postdata=DB::table('products')->where('prod_code',$prod_code)->update($prod_data);
            // echo '<pre>';
            // print_r($postdata);
            if($postdata)

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

   }//update product function end here


    public function export()
    {
      return Excel::download(new ProductsExport, 'Products.xlsx');
    // $pdf = PDF::loadView('pdf.invoice', $data);
    // return $pdf->stream('invoice.pdf');
    }
    public function damageexport()
    {
      return Excel::download(new ProductsExport, 'Damage_Products.xlsx');
    // $pdf = PDF::loadView('pdf.invoice', $data);
    // return $pdf->stream('invoice.pdf');
    }
     public function import(Request $request)
    {
      $import= Excel::import(new ProductsImport, $request->file('import_file'));
      if($import)

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


    //damage products
    public function damageindex()
    {
        Cart::destroy();
         $prod_data=DB::table('damage_products')
                ->join('categories','damage_products.prod_cat_id','categories.category_id')
                ->join('sub_categories','damage_products.prod_sub_cat_id','sub_categories.sub_cat_id')
                ->select('damage_products.*','categories.category_name','sub_categories.sub_cat_name')
                  
                  ->get();
        //           echo "<pre>";
        // print_r($prod_data);
        // exit();
        return view ('pages.product.allDamage',compact('prod_data'));    

    }

    public function damageAdd()
    {
        return view ('pages.product.addDamage');
    }

    public function saveDamage(Request $request)

    {
        $prod_dag_data=array();
        $prod_dag_data['prod_code']=$request->prod_code;
        $prod_dag_data['prod_qty']=$request->prod_qty;
        $prod_dag_data['prod_desc']=$request->prod_note;
        $prod_dag_data['prod_cat_id']=$request->category_id;
        $prod_dag_data['prod_sub_cat_id']=$request->sub_cat_id;
        $prod_dag_data['prod_stock_status']=$request->prod_stock;
        $p_code=$request->prod_code;
        $data=DB::table('products')->where('prod_code',$p_code)->first();
        $prod_dag_data['prod_name']=$data->prod_name;
        $prod_dag_data['prod_photo']=$data->prod_photo;
        $prod_dag_data['damage_date']=date('yy-m-d');
        $postdata=DB::table('damage_products')->insert($prod_dag_data);
          if($postdata)

                {
                    $notification=array(
                        'message'=>"Product Saved Successfully",
                        'alert-type'=>'success'
                    );
                    return Redirect()->back()->with($notification);
                }else
                {
                    $notification=array(
                        'message'=>" Product Not Saved",
                        'alert-type'=>'success'
                    );
                    return Redirect()->back()->with($notification);
                }


    }

}
