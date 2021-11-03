<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Categories;

class BlogController extends Controller
{
    public function blog()
    {
      $categories = Categories::all();
      $carts = session()->get('cart');
      return view('pages.blog',[
        'categories' => $categories,
        'carts' => $carts
      ]);
    }
}
