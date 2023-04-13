<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class products extends Model
{
    protected $collection = 'products';

    protected $fillable = [
        'id', 
        'name', 
        'price', 
        'image', 
        'description', 
        'quantity'
    ];
    public function category()
    {
        return $this->embedsOne(Category::class);
    }
}