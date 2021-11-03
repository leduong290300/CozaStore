<?php

namespace App\Http\Controllers\OrderCart;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;
use App\Models\Products;
class OrderCartController extends Controller
{
    public function index()
    {
      $categories = Categories::all();
      $carts = session()->get('cart');
      return view('pages.shopping_cart',[
        'categories' => $categories,
        'carts' => $carts
      ]);
    }

    public function store(Request $request)
    {
      $id = $request->id;
      $product = Products::findOrFail($id);
      $cart = session()->get('cart');
      if (isset($cart[$id])){
        $cart[$id]['quanlity'] += (int)$request->quanlity;
        $cart[$id]['size'] = $cart[$id]['size'].' , '.$request->size ;
        $cart[$id]['color'] = $cart[$id]['color'].' , '.$request->color ;
      } else {
        $cart[$id] = [
          'name' => $product->name,
          'price' => $product->price,
          'size' => $request->size,
          'color' => $request->color,
          'quanlity' => (int)$request->quanlity,
          'image' => $product->image
        ];
      }
      session()->put('cart',$cart);
      return response()->json(['cart' => $cart]);
    }

    public function update(Request $request,$id)
    {
      $cart = session()->get('cart');
      if($id && $request->quanlity) {
        $cart[$id]['quanlity'] += $request->quanlity;
        session()->put('cart',$cart);
      }
      return response()->json(['cart' => $cart]);
    }

    public function destroy($id)
    {
      $cart = session()->get('cart');
      if (isset($cart[$id])) {
        unset($cart[$id]);
        session()->put('cart',$cart);
      }
      return response()->json(['cart' => $cart]);
    }
}
