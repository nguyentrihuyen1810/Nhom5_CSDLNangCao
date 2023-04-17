<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $collection = 'order';

    protected $fillable = [
        'id', 
        'subtotal'
    ];

    public function Customers()
    {
        return $this->embedsOne(Customers::class);
    }
}
