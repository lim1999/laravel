<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyPriceHistory extends Model
{
    protected $table    = 'property_price_histories';
    protected $fillable = [
        'property_id',  
        'rent_price', 
        'sale_price', 
        'list_price', 
        'sold_price', 
        'created_by', 
        'updated_by'
    ];
    public function contacts()
    {
        return $this->hasMany('App\Models\Property', 'property_id');
        // return $this->hasMany('App\Comment', 'foreign_key', 'local_key');
    }
}
