<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductCatalog extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'image',
        'description',
        'price',
        'vendor_id',
        'category_id'
    ],
    $hidden=["created_at","updated_at"];

    public function vendor():BelongsTo{
        return $this->belongsTo(Vendor::class, "vendor_id", "id");
    }

    public function category():BelongsTo{
        return $this->belongsTo(CategoryProduct::class, "category_id", "id");
    }
}
