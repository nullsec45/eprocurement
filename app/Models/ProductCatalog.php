<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCatalog extends Model
{
    protected $fillable=[
        'name',
        'description',
        'price',
        'vendor_id'
    ];
}
