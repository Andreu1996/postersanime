<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    protected $guarded = [];

    protected $table = 'product_categories';

    public function products()
    {
        // esto es una relacion de uno a muchos, por lo que indicamos el modelo que queremos relacionar
        return $this->hasMany(Product::class, 'category_id')->where('active', 1);
    }
}