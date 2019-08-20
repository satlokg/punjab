<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;



class Shg extends Authenticatable
{
       protected $fillable = [

        'name', 'contact', 'password',

    ];

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
