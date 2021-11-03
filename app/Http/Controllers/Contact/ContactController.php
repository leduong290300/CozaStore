<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Models\Categories;

class ContactController extends Controller
{
    public function contact()
    {
      $categories = Categories::all();
      $carts = session()->get('cart');
      return view('pages.contact',[
        'categories' => $categories,
        'carts' => $carts
      ]);
    }
}
