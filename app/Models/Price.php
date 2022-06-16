<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $guarded = [];
    
    public function tax()
        {
            // esto indica a que relacion pertenece este modelo
            return $this->belongsTo(Tax::class)->where('active', 1)->where('valid', 1);
        }

    public function product()
        {
            return $this->belongsTo(Product::class)->where('active', 1);
        }

}






