<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submit extends Model
{
    protected $fillable = [
        'title', 'status', 'type', 'price', 'area', 'bedroom', 'bathroom',
        'image', 'address', 'city', 'state', 'zip_code', 'description',
    ];
}
