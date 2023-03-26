<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Product extends Eloquent
{
//    protected $connection = 'web';
    protected $collection = 'product';

    protected $fillable = [
        'id', 'name', 'price', 'image', 'description', 'quantity', 'category_id'
    ];
}
