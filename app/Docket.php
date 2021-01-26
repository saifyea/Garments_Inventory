<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docket extends Model
{
    protected $fillable = [
        'docket_no','style_no','buyer','po_no','items','order_qty','ship_date','fabric_type','pocketing','fuisng','wash','thread','elastic','button','zipper','price_sticker','poly_sticker','size_sticker','barcode_sticker','other_stickers','main_label',
'care_label','size_label','size_label','decor_label','other_lebels','hook_bar','rivets','patch','tags','cartoon_sticker',
'others_items'

    ];
}
