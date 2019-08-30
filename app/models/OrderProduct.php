<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
	protected $table='order_product';
    protected $fillable=[
    	'order_id',	'product_id', 'quantity', 'status','shg_id'
    ];

    public function shg()
	{
	    return $this->belongsTo('App\models\Shg');
	}
}
