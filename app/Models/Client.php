<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $guarded = [];

    public function fingerprint()
        {
            return $this->hasMany(Fingerprint::class, 'customer_id');
        }

    public function cart()
        {
            return $this->hasOne(Cart::class, 'customer_id');
        }

    public function sale()
        {
            return $this->hasMany(Sale::class, 'customer_id');
        }


}



