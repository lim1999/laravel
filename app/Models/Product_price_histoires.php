<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product_price_histoires extends Model
{
    protected $table='product_price_histories';
    public function productRelationship(){
        return $this->belongsTo('App\Models\Product','product_id','id');
    }
    protected $fillable=[
        'name',
        'rent_price', 
        'list_price',
        'sale_price',
        'sold_price',
        'created_by',
        'updated_by'
    ];
    public function getCodeAttribute()
    {
        return str_pad($this->id, 4, "0", STR_PAD_LEFT);
    }
}
