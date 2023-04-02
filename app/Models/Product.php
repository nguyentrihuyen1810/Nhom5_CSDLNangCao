<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Product extends Model
{
    protected $collection = 'products';
    protected $fillable = [
        'id', 
        'name', 
        'price', 
        'image', 
        'description', 
        'quantity', 
        'category_id'
    ];

}
