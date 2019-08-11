<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   protected $fillable=[
   	
'category',
'pname',
'pdesc',
'pmaterial',
'oname',
'gname',
'contact',
'village_id',
'block_id',
'district_id',
'price',
'status',
'sub_category',
'shg_id'
   ];
}
