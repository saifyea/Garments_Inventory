<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     protected $fillable = [
        'prod_code', 'prod_name', 'prod_qty','prod_notify','category_id','sub_cat_id','sup_id','prod_store_area','prod_route','brand','chalan_no','prod_desc','model_no','created_at','prod_photo','prod_recv','prod_price'
    ];
}
