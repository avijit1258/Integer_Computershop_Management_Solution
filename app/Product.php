<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'model', 'sub_catagory_id', 'brand_id', 'details', 'specification',
    ];
}
