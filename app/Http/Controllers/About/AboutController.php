<?php

namespace App\Http\Controllers\About;

use App\Http\Controllers\Controller;
use App\Models\Categories;

class AboutController extends Controller
{
    public function about()
    {
      $categories = Categories::all();
      return view('pages.about',[
        'categories' => $categories
      ]);
    }
}
