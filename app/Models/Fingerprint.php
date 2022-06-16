<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fingerprint extends Model
{
    protected $guarded = [];

    public function client()
        {
            return $this->belongsTo(client::class);
        }

    public function cart()
        {
            return $this->hasOne(Cart::class, 'fingerprint_id');
        }
}


