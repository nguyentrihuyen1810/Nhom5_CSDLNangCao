<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
}

// class Post extends Model
// {
//    protected $collection = 'posts';
//    protected $connection = 'mongodb';

//    protected $filltable = [
//     'id',
//     'fullname',
//     'username',
//     'password',
//     'address',
//     'phone',
//     'email',
//     'role',
//    ]

// }
