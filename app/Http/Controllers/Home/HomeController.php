<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Products;
use App\Models\Sliders;

class HomeController extends Controller
{
    /*TODO: Show slider,categories,products*/
  public function show()
  {
    return view('home');
  }
}
