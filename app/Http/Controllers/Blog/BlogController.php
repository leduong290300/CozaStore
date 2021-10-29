<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use App\Models\Categories;

class BlogController extends Controller
{
    public function blog()
    {
      $categories = Categories::all();
      return view('pages.blog',[
        'categories' => $categories
      ]);
    }
}
