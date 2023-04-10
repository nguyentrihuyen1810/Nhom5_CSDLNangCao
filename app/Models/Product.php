<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Product extends Eloquent
{
    use HasFactory;

    protected $collection = 'products';

    protected $fillable = [
        'id',
        'name',
        'image',
        'price',
        'description',
        'quantity',
        'category_id'
    ];
}
