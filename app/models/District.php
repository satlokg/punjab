<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;



class District extends Authenticatable
{
    protected $fillable = [

        'name','password',

    ];

     public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function shg()
    {
        return $this->hasMany(Shg::class);
    }
    public function order_product()
    {
        return $this->hasMany(OrderProduct::class);
    }
}
