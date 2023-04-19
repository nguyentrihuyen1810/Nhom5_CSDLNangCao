<?php

namespace App\Models;
use Jenssegers\Mongodb\Eloquent\Model;

class Category extends Model
{
    protected $collection = 'category';
    protected $fillable = ['_id', 'name'];

    public function product()
    {
        return $this->hasOne(Products::class);
    }
}
