<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Cart extends Model
{
    protected $collection = 'cart';

    protected $fillable = ['_id', 'code', 'customer_id', 'product_id', 'quantity', 'total'];

//    public function product()
//    {
//        return $this->hasOne(Products::class);
//    }
//
//    public function customer()
//    {
//        return $this->hasOne(Customer::class);
//    }

    public function product()
    {
        return $this->belongsTo(Products::class, 'product_id');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

}
