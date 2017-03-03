<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    protected $fillable = [
        'contact_no', 'name', 'address', 'sell_id',
    ];
}
