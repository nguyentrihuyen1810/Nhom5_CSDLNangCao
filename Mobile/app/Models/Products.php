<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Products extends Model
{
    protected $collection = 'product';

    protected $fillable = ['id', 'name', 'price', 'category_id', 'customer_id'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function cart()
    {
        return $this->hasOne(Cart::class);
    }
}
