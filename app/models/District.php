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
}
