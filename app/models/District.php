<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;



class District extends Authenticatable
{
    protected $fillable = [

        'name','password',

    ];
}
