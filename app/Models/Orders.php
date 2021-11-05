<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $fillable = [
      'code','product','price','quality','total','status','customers_id'
    ];
    public function customer()
    {
      return $this->belongsTo(Customers::class);
    }
}
