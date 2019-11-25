<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table    = 'properties';
    protected $fillable = [
        'name', 
        'code', 
        'property_type_id', 
        'property_status_id', 
        'zone_id', 
        'shape_id', 
        'rent_price', 
        'sale_price', 
        'list_price', 
        'sold_price', 
        'created_by', 
        'updated_by'
    ];

    public function zone()
    {
        return $this->hasOne('App\Models\Zone', 'id', 'zone_id');
    }
    public function shape()
    {
        return $this->hasOne('App\Models\Shape', 'id', 'shape_id');
    }
    public function propertyType()
    {
        return $this->hasOne('App\Models\PropertyType', 'id', 'property_type_id');
    }
    public function propertyStatus()
    {
        return $this->hasOne('App\Models\PropertyStatus', 'id', 'property_status_id');
    }
    public function propertyPriceHistory()
    {
        return $this->belongsTo('App\Models\PropertyPriceHistory', 'id', 'property_id');
    }
    public function getCodeAttribute()
    {
        return str_pad($this->id, 4, "0", STR_PAD_LEFT);
    }
}
