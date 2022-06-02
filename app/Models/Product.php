<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    protected $table = 'ProductCategories';

    public function category()
    {
        return $this->belongsTo(ProductCategory::class,);
    }
}