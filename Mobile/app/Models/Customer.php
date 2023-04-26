<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Customer extends Model
{
    protected $collection = 'customer';

    protected $fillable = ['_id', 'code', 'fullname', 'username', 'password', 'address', 'phone', 'email'];


    public function cart()
    {
        return $this->hasOne(Cart::class);
    }
}
