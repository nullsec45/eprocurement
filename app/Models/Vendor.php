<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vendor extends Model
{
    use HasFactory;
    
    protected $fillable=[
        'name',
        'email',
        'phone',
        'is_approved'
    ];

    public function products():HasMany{
        return $this->hasMany(ProductCatalog::class,'vendor_id','id');
    }
}
