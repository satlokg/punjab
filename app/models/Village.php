<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
	protected $fillable = [

        'village_name','district_id','block_id'

    ];
     public $timestamps = false;
    public function products()
    {
        return $this->hasOne(Product::class);
    }
    public function block()
    {
        return $this->belongsTo(Block::class);
    }
}
