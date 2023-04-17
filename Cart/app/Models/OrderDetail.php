<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class OrderDetail extends Model
{
    protected $collection = 'orderDetail';

    protected $fillable = [
        'id', 
        'quantity', 
        'total'
    ];

    public function Order()
    {
        return $this->embedsOne(Order::class);
    }
    public function Customers()
    {
        return $this->embedsOne(Customers::class);
    }
    public function product()
    {
        return $this->embedsOne(Product::class);
    }

    // public static function getTotalSalesByProduct()
    // {
    //     $results = OrderDetail::select('product_id', 'product_name', 'product_image')
    //         ->groupBy('product_id')
    //         // ->orderBy('total_sales', 'desc')
    //         ->get();

    //     return $results;
    // }
}
