<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Extra extends Model
{
	protected $fillable = [
    'product_id','col_name','col_value'
	];

}
