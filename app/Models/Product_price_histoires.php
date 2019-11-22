<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product_price_histoires extends Model
{
    protected $table='product_price_histories';
    public function productRelationship(){
        return $this->belongsTo('App\Models\Product','product_id','id');
    }
}
