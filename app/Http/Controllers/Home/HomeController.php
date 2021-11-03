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
    /*session()->flush();*/
    $sliders = Sliders::all();
    $categories = Categories::all();
    $products = Products::where('regime','public')->get();
    $carts = session()->get('cart');
    return view('home',[
      'sliders' => $sliders,
      'categories' => $categories,
      'products' => $products,
      'carts' => $carts
    ]);
  }
}
