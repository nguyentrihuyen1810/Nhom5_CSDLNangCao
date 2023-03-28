<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';
    // protected $fillable=[
    //     'id',
    //     'fullname',
    //     'username',
    //     'password',
    //     'adress',
    //     'phone',
    //     'email',
    //   ];
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
