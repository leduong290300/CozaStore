<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    /*TODO: Lấy sản phẩm theo id categories*/
    public function getProducts()
    {
      return $this->hasMany(Products::class);
    }
}
