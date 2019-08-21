<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable=[
    	'first_name', 'last_name', 'company_name', 'country', 'street',	'suit',	'city',	'state', 'zip',	'phone', 'email', 'type'
    ];
}
