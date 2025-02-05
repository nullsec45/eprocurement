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
        'description',
        'price',
        'vendor_id'
    ];

    public function vendor():BelongsTo{
        return $this->belongsTo(Vendor::class, "vendor_id", "id");
    }
}
