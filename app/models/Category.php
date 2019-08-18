<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
   protected $fillable=[
   	'name','pic','desc'
   ];
   public function sub_categories()
    {
        return $this->hasMany(SubCategory::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
