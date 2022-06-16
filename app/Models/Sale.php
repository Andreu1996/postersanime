<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $guarded = [];

    public function carts()
        {
            return $this->hasMany(Cart::class, 'sale_id')->where('active', 1);
        }

    public function payment()
        {
            return $this->belongsTo(PaymentMethod::class, 'payment_method_id')->where('active', 1);
        }

    public function customer()
        {
            return $this->belongsTo(Client::class)->where('active', 1);
        }

}



