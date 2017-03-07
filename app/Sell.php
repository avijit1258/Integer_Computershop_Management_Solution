<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sell extends Model
{
     protected $fillable = [
        'date', 'quantity', 'product_id', 'unit_sell_price', 'total_sell_price',
    ];
}
