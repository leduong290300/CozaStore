<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $fillable = [
      'name','size','color','inventory','price','code','image','description_short','description_long','regime','categories_id'
    ];
    public function productOfCategory()
    {
      return $this->belongsTo(Categories::class);
    }
}
