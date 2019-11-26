<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyType extends Model
{
    protected $table    = 'property_types';
    protected $fillable = [
        'name', 
        'created_by', 
        'updated_by'
    ];
    public function property()
    {
        return $this->belongsTo('App\Models\Property', 'property_type_id', 'id');
    }
    public function getCodeAttribute(){
        return str_pad($this->id,4,"0",STR_PAD_LEFT);
    }
}
