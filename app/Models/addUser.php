<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addUser extends Model
{
    protected $connection = 'mongodb';
    protected $collection = 'customer';
    protected $fillable=[
        'id',
        'name',
        'email',
        'password',
        'phone',
      ];
}
