<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;


class ShopController extends Controller
{
    /*TODO: Show all products*/
    public function shop()
    {
      return view('pages.shop');
    }
}
