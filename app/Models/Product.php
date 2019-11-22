<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected  $table='products';
    protected $fillable=[
        'name',
        'rent_price', 
        'list_price',
        'sale_price',
        'sold_price'
    ];
    public function getCodeAttribute(){
        return str_pad($this->id,4,"0",STR_PAD_LEFT);
    }
    public function productRelationship(){
        return $this->hasMany('App\Models\Product_price_histoires','product_id');
    }
}
