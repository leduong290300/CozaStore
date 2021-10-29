<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Products;

class ShopController extends Controller
{
    /*TODO: Show all products of shop*/
    public function shop()
    {
      $categories = Categories::all();
      $products = Products::where('regime','public')->get();
      return view('pages.shop',[
        'products' => $products,
        'categories' => $categories
      ]);
    }

    /*TODO: Show product with id category*/
    public function show($id) {
      $categories = Categories::all();
      $products = Categories::findOrFail($id)->getProducts;
      return view('pages.shop',[
        'products' => $products,
        'categories' => $categories
      ]);
    }
}
