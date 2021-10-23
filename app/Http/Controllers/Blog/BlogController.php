<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;


class BlogController extends Controller
{
    public function blog()
    {
      return view('pages.blog');
    }
}
