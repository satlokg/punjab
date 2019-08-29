<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Order extends Model
{
    protected $fillable=[
    	'user_id', 'address_id', 'total','status'
    ];

    public function product()
    {
        return $this->belongsToMany(Product::class, 'order_product');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }

     public function address()
    {
        return $this->belongsTo('App\models\Address');
    }
    public function products()
	{
	    return $this->belongsToMany(Product::class, 'order_product')
	    	->withPivot('id','quantity','status')
            ->wherePivot('shg_id',Auth::guard('shg')->user()->id)
	    	->withTimestamps();
	}

     public function pendingproducts()
    {
        return $this->belongsToMany(Product::class, 'order_product')
            ->withPivot('id','quantity','status')
            ->wherePivot('status',0)
            ->wherePivot('shg_id',Auth::guard('shg')->user()->id)
            ->withTimestamps();
    }

    public function acceptproducts()
    {
        return $this->belongsToMany('App\models\Product')
            ->withPivot('id','quantity','status')
            ->wherePivot('status',1)
            ->wherePivot('shg_id',Auth::guard('shg')->user()->id)
            ->withTimestamps();
    }

    public function deliveredproducts()
    {
        return $this->belongsToMany('App\models\Product')
            ->withPivot('id','quantity','status')
            ->wherePivot('status',3)
            ->wherePivot('shg_id',Auth::guard('shg')->user()->id)
            ->withTimestamps();
    }

    public function dispatchproducts()
    {
        return $this->belongsToMany('App\models\Product')
            ->withPivot('id','quantity','status')
            ->wherePivot('status',2)
            ->wherePivot('shg_id',Auth::guard('shg')->user()->id)
            ->withTimestamps();
    }

    public function canceledproducts()
    {
        return $this->belongsToMany('App\models\Product')
            ->withPivot('id','quantity','status')
            ->wherePivot('status',4)
            ->wherePivot('shg_id',Auth::guard('shg')->user()->id)
            ->withTimestamps();
    }

    public function todaysproducts()
    {
        return $this->belongsToMany('App\models\Product')
            ->withPivot('id','quantity','status')
            ->wherePivot('shg_id',Auth::guard('shg')->user()->id)
            ->whereDay('order_product.created_at', '=', date('M'))
            ->withTimestamps();
    }
}
