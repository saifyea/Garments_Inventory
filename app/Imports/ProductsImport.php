<?php

namespace App\Imports;

use App\Product;
use Maatwebsite\Excel\Concerns\ToModel;

class ProductsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Product([
            'prod_code'=>$row[0],
            'prod_name'=>$row[1],
            'prod_qty'=>$row[2],
            'prod_notify'=>$row[3],
            'category_id'=>$row[4],
            'sub_cat_id'=>$row[5],
            'sup_id'=>$row[6],
            'prod_store_area'=>$row[7],
            'prod_route'=>$row[8],
            'brand'=>$row[9],
            'chalan_no'=>$row[10],
            'prod_desc'=>$row[11],
            'model_no'=>$row[12],
            'prod_photo'=>$row[13],
            'created_at'=>$row[14]

        ]);
    }
}
