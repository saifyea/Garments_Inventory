<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;

class ReportsController extends Controller

{
  //Function for view general itmes
    public function general_reports(Request $request)
    {
        $start_date=$request->start_date;
        $end_date=$request->end_date;
        $cat=$request->category;
        if ($cat=='all') {
        	$data=DB::table('products')
       		->join('categories','categories.category_id','products.category_id')
       		->join('suppliers','suppliers.sup_id','products.sup_id')
       		->select('products.*','categories.category_name','suppliers.sup_name')
       		->wherebetween('created_at',array($start_date,$end_date))
       		->get();
       		 $pdf = PDF::loadView('pages.reports.report_general_items', compact('data'));
	        return $pdf->stream('stationary_items.pdf');
        }else {
        	$data=DB::table('products')
       		->join('categories','categories.category_id','products.category_id')
       		->join('suppliers','suppliers.sup_id','products.sup_id')
       		->select('products.*','categories.category_name','suppliers.sup_name')
       		->where('category_name',$cat)
       		->wherebetween('created_at',array($start_date,$end_date))
       		->get();
       		 $pdf = PDF::loadView('pages.reports.report_general_items', compact('data'));
	        return $pdf->stream('stationary_items.pdf');
        }
       
    }

  //Function for view fabrics in house
    public function fabrics_reports(Request $request)
    {
        $start_date=$request->start_date;
        $end_date=$request->end_date;
       $data=DB::table('fabrics')
       		->join('suppliers','suppliers.sup_id','fabrics.sup_id')
       		->select('fabrics.*','suppliers.sup_name')
       		->wherebetween('created_at',array($start_date,$end_date))
       		->get();
       		 $pdf = PDF::loadView('pages.reports.report_fabrics', compact('data'));
	        return $pdf->stream('fabrics.pdf');
    } 
 //Function for view threads in house
    public function threads_reports(Request $request)
    {
        $start_date=$request->start_date;
        $end_date=$request->end_date;
       $data=DB::table('threads')
       		->join('suppliers','suppliers.sup_id','threads.sup_id')
       		->select('threads.*','suppliers.sup_name')
       		->wherebetween('created_at',array($start_date,$end_date))
       		->get();
       		 $pdf = PDF::loadView('pages.reports.report_threads', compact('data'));
	        return $pdf->stream('threads.pdf');
    }
 //Function for view chamical in house
   public function chamical_reports(Request $request)
    {
        $start_date=$request->start_date;
        $end_date=$request->end_date;
       $data=DB::table('chamicals')
       		->join('suppliers','suppliers.sup_id','chamicals.sup_id')
       		->select('chamicals.*','suppliers.sup_name')
       		->wherebetween('created_at',array($start_date,$end_date))
       		->get();
       		 $pdf = PDF::loadView('pages.reports.report_chamicals', compact('data'));
	        return $pdf->stream('chamical.pdf');
    }

     //Function for view accessories in house
    public function accessories_reports(Request $request)
    {
        $start_date=$request->start_date;
        $end_date=$request->end_date;
        $acc_name=$request->acc_name;
        // print_r($acc_name);
        // exit();

       if ($acc_name=='all') {
       	$data=DB::table('accessories')
       		->join('suppliers','suppliers.sup_id','accessories.sup_id')
       		->select('accessories.*','suppliers.sup_name')
       		->wherebetween('created_at',array($start_date,$end_date))
       		->get();
       		// echo "<pre>";
       		// print_r($data);
       		// exit();
       		 $pdf = PDF::loadView('pages.reports.report_accessories', compact('data'));
	        return $pdf->stream('accessories.pdf');
       }else
       {
       	$data=DB::table('accessories')
       		->join('suppliers','suppliers.sup_id','accessories.sup_id')
       		->join('acc_names','acc_names.acc_name','accessories.accessories_name')
       		->select('accessories.*','suppliers.sup_name','acc_names.acc_name')
       		->where('acc_name',$acc_name)
       		->wherebetween('recv_date',array($start_date,$end_date))
       		->get();
       		$pdf = PDF::loadView('pages.reports.report_accessories', compact('data'));
	        return $pdf->stream('accessories.pdf');
       }
     
    }
 //Function for view Dockets in house
    public function docket_reports(Request $request)
    {
        $start_date=$request->start_date;
        $end_date=$request->end_date;
       $data=DB::table('dockets')
       		// ->join('suppliers','suppliers.sup_id','accessories.sup_id')
       		// ->select('dockets.*','suppliers.sup_name')
       		->wherebetween('created_at',array($start_date,$end_date))
       		->get();
       		 $pdf = PDF::loadView('pages.reports.report_deckets', compact('data'));
	        return $pdf->stream('New_dockets.pdf');

    }

    //Function for view General items delevery
    public function delevery_general_reports(Request $request)
    {
      $start_date=$request->start_date;
      $end_date=$request->end_date;
      $cat=$request->category;
      $cat_name=DB::table('categories')->where('category_id',$cat)->first();
      if ($cat=='all') {
        $data=DB::table('orderdetails')
            ->join('orders','orderdetails.order_id','orders.id')
            ->join('products','products.prod_code','orderdetails.product_id')
            ->join('employees','employees.emp_id','orderdetails.emp_id')
            ->select('orderdetails.*','orders.order_date','products.prod_name','products.category_id','employees.emp_name')
            ->wherebetween('order_date',array($start_date,$end_date))
            ->get();
            $pdf = PDF::loadView('pages.reports.delevery_reports_general_itmes', compact('data','cat'));
            return $pdf->stream('delevery_general_items.pdf');
      }else
      {
        $data=DB::table('orderdetails')
          ->join('orders','orderdetails.order_id','orders.id')
          ->join('products','products.prod_code','orderdetails.product_id')
          ->join('employees','employees.emp_id','orderdetails.emp_id')
          ->select('orderdetails.*','orders.order_date','products.prod_name','products.category_id','employees.emp_name')
          ->where('category_id',$cat)
          ->wherebetween('order_date',array($start_date,$end_date))
          ->get();
          $pdf = PDF::loadView('pages.reports.delevery_reports_general_itmes', compact('data','cat_name','cat'));
          return $pdf->stream('delevery_general_items.pdf');
      }
    }//end of delevery reports functions


    //Function for delever fabrics 
    public function delevery_fabrics_reports(Request $request)
    {
      $start_date=$request->start_date;
      $end_date=$request->end_date;
      $data=DB::table('fa_orderdetails')
          ->join('fa_orders','fa_orderdetails.order_id','fa_orders.order_id')
          ->join('fabrics','fabrics.style_no','fa_orderdetails.style_no')
         ->join('employees','employees.emp_id','fa_orderdetails.emp_id')
          ->select('fa_orderdetails.*','fa_orders.order_date','fabrics.style_no','fabrics.buyer','fabrics.color','employees.emp_name')
          ->wherebetween('order_date',array($start_date,$end_date))
          ->get();
          $pdf = PDF::loadView('pages.reports.fabrics_delevery_reports', compact('data'));
          return $pdf->stream('delevery_fabrics.pdf');
     
    }//end of fabrics delevery reports functions

    //Function for delever Threads 
    public function delevery_threads_reports(Request $request)
    {
      $start_date=$request->start_date;
      $end_date=$request->end_date;
      $data=DB::table('th_orderdetails')
          ->join('th_orders','th_orderdetails.order_id','th_orders.order_id')
          ->join('threads','threads.style_no','th_orderdetails.style_no')
         ->join('employees','employees.emp_id','th_orderdetails.emp_id')
          ->select('th_orderdetails.*','th_orders.order_date','threads.count_no','threads.buyer','threads.color','employees.emp_name')
          ->wherebetween('order_date',array($start_date,$end_date))
          ->get();
          $pdf = PDF::loadView('pages.reports.threads_delevery_reports', compact('data'));
          return $pdf->stream('delevery_threads.pdf');
     
    }//end of threads delevery reports functions



    //Function for delever chamical 
    public function delevery_chamical_reports(Request $request)
    {
      $start_date=$request->start_date;
      $end_date=$request->end_date;
      $data=DB::table('ch_orderdetails')
          ->join('ch_orders','ch_orderdetails.order_id','ch_orders.order_id')
          ->join('chamicals','chamicals.chamical_id','ch_orderdetails.chamical_id')
         ->join('employees','employees.emp_id','ch_orderdetails.emp_id')
          ->select('ch_orderdetails.*','ch_orders.order_date','chamicals.chamical_name','chamicals.chamical_type','employees.emp_name')
          ->wherebetween('order_date',array($start_date,$end_date))
          ->get();
          $pdf = PDF::loadView('pages.reports.chamical_delevery_reports', compact('data'));
          return $pdf->stream('delevery_chamicals.pdf');
     
    }//end of chamical delevery reports functions



    //Function for view Accessories items delevery
    public function delevery_accessories_reports(Request $request)
    {
      $start_date=$request->start_date;
      $end_date=$request->end_date;
      $acc=$request->acc_name;
      $acc_name=DB::table('acc_names')->where('acc_name',$acc)->first();
      if ($acc=='all') {
        $data=DB::table('ac_orderdetails')
            ->join('ac_orders','ac_orderdetails.order_id','ac_orders.order_id')
            ->join('accessories','accessories.accessories_id','ac_orderdetails.accessories_id')
           ->join('employees','employees.emp_id','ac_orderdetails.emp_id')
            ->select('ac_orderdetails.*','ac_orders.order_date','accessories.accessories_name','accessories.buyer','accessories.style_no','employees.emp_name')
            ->wherebetween('order_date',array($start_date,$end_date))
            ->get();
          // echo "<pre>";
          // print_r($acc);
          // print_r($acc_name);
          // print_r($data);
          // exit();
            $pdf = PDF::loadView('pages.reports.accessories_delevery_reports', compact('data','acc'));
            return $pdf->stream('delevery_accessories.pdf');
      }else
      {
        $data=DB::table('ac_orderdetails')
          ->join('ac_orders','ac_orderdetails.order_id','ac_orders.order_id')
          ->join('accessories','accessories.accessories_id','ac_orderdetails.accessories_id')
          ->join('employees','employees.emp_id','ac_orderdetails.emp_id')
            ->select('ac_orderdetails.*','ac_orders.order_date','accessories.accessories_name','accessories.buyer','accessories.style_no','employees.emp_name')
          ->where('accessories_name',$acc)
          ->wherebetween('order_date',array($start_date,$end_date))
          ->get();
          //  echo "<pre>";
          // print_r($acc);
          // print_r($acc_name);
          // print_r($data);
          // exit();
          $pdf = PDF::loadView('pages.reports.accessories_delevery_reports', compact('data','acc_name','acc'));
            return $pdf->stream('delevery_accessories.pdf');
      }
    }//end of delevery reports functions

 
}
