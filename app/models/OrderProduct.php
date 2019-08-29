<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    protected $fillable=[
    	'order_id',	'product_id', 'quantity', 'status','shg_id'
    ];
}
