<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;



class Shg extends Authenticatable
{
       protected $fillable = [

        'name', 'contact', 'password',

    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
    public function order_product()
    {
        return $this->hasMany(OrderProduct::class);
    }

    public function order_product_month()
    {
        return $this->hasMany(OrderProduct::class);
    }
}
