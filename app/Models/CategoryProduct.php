<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryProduct extends Model
{
    use HasFactory;
    protected $table='category_product';

    protected $fillable=['category'];

    public function product_catalog(){
        return $this->hasMany(ProductCatalog::class,'category_id','id');
    }
}
