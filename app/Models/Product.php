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
        return $this->belongsTo(ProductCategory::class, 'name');
    }
}