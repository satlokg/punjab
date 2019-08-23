<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
	protected $fillable = [

        'block_name','district_id'

    ];
    
    public function products()
    {
        return $this->hasOne(Product::class);
    }
}
