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

   public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function files()
    {
        return $this->hasMany(File::class);
    }
    public function district()
    {
        return $this->belongsTo(District::class);
    }
    public function block()
    {
        return $this->belongsTo(Block::class);
    }
    public function village()
    {
        return $this->belongsTo(Village::class);
    }
    public function shg()
    {
        return $this->belongsTo(Shg::class);
    }
    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_product');
    }
}
