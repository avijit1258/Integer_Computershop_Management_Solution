<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $fillable = [
        'date', 'vendor_id', 'product_id', 'sale_price', 'purchase_price', 'warrenty','quantity',
    ];
}
