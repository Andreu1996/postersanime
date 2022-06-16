<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    // indicamos el nombre de la tabla con la que estamos trabajando
    protected $table = 'products';

    public function category()
        {
            // esto indica a que relacion pertenece este modelo
            return $this->belongsTo(ProductCategory::class)->where('active', 1);
        }

    public function price()
        {
            return $this->hasMany(Price::class, 'product_id')->where('valid', 1)->where('active', 1);
        }
}