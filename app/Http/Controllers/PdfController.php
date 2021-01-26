<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ProductsExport;
use PDF2;
class PdfController extends Controller
{
     public function pdfDocket()
	    {
	        $data=DB::table('dockets')->get();
	        $pdf = PDF::loadView('pages.pdf.dockets', compact('data'));
	        return $pdf->stream('dockets.pdf');
	    }

	   public function pdfProduct()
	    {
	        $data=DB::table('products')
            ->join('categories','products.category_id','categories.category_id')
            ->join('sub_categories','products.sub_cat_id','sub_categories.sub_cat_id')
                ->select('products.*','categories.category_name','sub_categories.sub_cat_name')
                  
                  ->get();
	        $pdf = PDF::loadView('pages.pdf.products', compact('data'));
	        return $pdf->stream('products.pdf');
	    }

	    public function pdfissuefabric()
	    {
	        $data=DB::table('fabrics')
	        ->join('fa_orderdetails','fa_orderdetails.style_no','fabrics.style_no')
	        ->join('employees','employees.emp_id','fa_orderdetails.emp_id')
	        //->join('fa_orders','fa_orders.')
                ->select('fabrics.*','fa_orderdetails.quantity','employees.emp_name')
                  
                  ->get();
	        $pdf = PDF::loadView('pages.pdf.issuefabric', compact('data'));
	        return $pdf->stream('fabrics.pdf');
	    }

	    public function pdfissuethread()
	    {
	        
       $data=DB::table('th_orders')
            ->join('employees','th_orders.emp_id','employees.emp_id')
            ->join('th_orderdetails','th_orderdetails.order_id','th_orders.order_id')
            ->select('th_orders.*','employees.emp_name','th_orderdetails.style_no','th_orderdetails.order_id','th_orderdetails.color','th_orderdetails.buyer')
            ->get();
	        $pdf = PDF::loadView('pages.pdf.issuethreads', compact('data'));
	        return $pdf->stream('threads.pdf');
	    }



	  public function pdfsingledocket($id)
    {
    	$data=DB::table('dockets')->where('style_no',$id)->first();

    	 $pdf = PDF::loadView('pages.pdf.Print_Docket', compact('data'));
	      return $pdf->stream('dockets.pdf');
        //return view ('pages.pdf.Print_Docket')->with('data',$DockData);
    }

    public function pdfdamageproduct()
	    {
	        
       $data=DB::table('damage_products')
            ->join('categories','damage_products.prod_cat_id','categories.category_id')
            ->join('sub_categories','damage_products.prod_sub_cat_id','sub_categories.sub_cat_id')
            ->select('damage_products.*','categories.category_name','sub_categories.sub_cat_name')
            ->get();
	        $pdf = PDF2::loadView('pages.pdf.damage_products', compact('data'));
	        return $pdf->stream('damage_products.pdf');
	    }

}
