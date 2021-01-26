<?php

namespace App\Exports;

use App\Product;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProductsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Product::select('prod_code', 'prod_name', 'prod_qty','prod_notify','category_id','sub_cat_id','sup_id','prod_store_area','prod_route','brand','chalan_no','prod_desc','model_no','prod_photo','created_at')->get();
    }

    public function export()
    {
    	return Excel::download(new ProductsExport, 'Products.xlsx');
    }
}
