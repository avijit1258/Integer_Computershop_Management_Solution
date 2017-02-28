<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCatagory extends Model
{
    protected $fillable = [
        'name', 'catagory_id',
    ];
}
