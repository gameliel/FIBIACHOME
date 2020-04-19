<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PropertyListing extends Model
{
    protected $fillable = [
        'title', 'property_status', 'property_type', 'property_price', 'property_area', 'bedroom', 'bathroom',
        'image', 'property_address', 'city', 'state', 'zip_code', 'property_description',
    ];
}
