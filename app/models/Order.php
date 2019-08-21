<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable=[
    	'user_id', 'address_id', 'total','status'
    ];

    public function product()
    {
        return $this->belongsToMany(Product::class, 'order_product');
    }
    public function products()
	{
	    return $this->belongsToMany('App\models\Product')
	    	->withPivot('quantity','status')
	    	->withTimestamps();
	}
}
