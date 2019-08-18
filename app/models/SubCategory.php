<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $fillable=[
   	'name','pic','desc'
   ];

   public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
