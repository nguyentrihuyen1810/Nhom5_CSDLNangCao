<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Users extends Model
{
//     protected $connection = 'mongodb';
    protected $table = 'customers';
    protected $fillable=[
        '_id',
        'fullname',
        'username',
        'password',
        'adress',
        'phone',
        'email',
    ];
}
