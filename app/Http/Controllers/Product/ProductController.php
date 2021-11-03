<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\ProductRequest;
use App\Models\Categories;
use App\Models\Products;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{

    public function index()
    {
        $products = Products::all();
        return view('pages.product.product_index',[
          'products' => $products
        ]);
    }


    public function create()
    {
        $category = Categories::all();
        return view('pages.product.product_create',[
          'category' => $category
        ]);
    }


    public function store(ProductRequest $request)
    {
        $data = $request->validated();
        $product = new Products();
        $productImage = time().'_'.$data['image_product']->getClientOriginalName();
        $convertPrice = (float)$data['price'];
        $convertInventory = (int)$data['inventory'];
        $convertCategory = (int)$data['category'];
        try {
          $product->create([
            'name' => $data['name'],
            'size' => $data['size'],
            'color' => $data['color'],
            'inventory' => $convertInventory,
            'price' => $convertPrice,
            'image' => $productImage,
            'description_short' => $data['description_short'],
            'description_long' => $data['description_long'],
            'regime' => $data['display'],
            'categories_id' => $convertCategory,
          ]);
          $data['image_product']->storeAs('public/upload/products',$productImage);
          $success = 'Add product successfully';
          return redirect()
            ->route('product.index')
            ->with('success',$success);
        } catch (\Exception $e) {
          \Log::error($e);
          $error = 'Add product failed';
          return back()->with('error',$error);
        }
    }

    public function show($id)
    {
      $product = Products::findOrFail($id);
      $categories = Categories::all();
      $carts = session()->get('cart');
      return view('pages.shop_details',[
        'product' => $product,
        'categories' => $categories,
        'carts' => $carts
      ]);
    }

    public function edit($id)
    {
        $product = Products::findOrFail($id);
        $category = Categories::all();
        return view('pages.product.product_edit',[
          'product' => $product,
          'category' => $category
        ]);
    }


    public function update(ProductRequest $request, $id)
    {
      $data = $request->validated();
      $product = Products::findOrFail($id);
      $productImgOld = Storage::files('public/upload/products',$product->image);
      $productImgNew = time().'_'.$data['image_product']->getClientOriginalName();
      $convertPrice = (float)$data['price'];
      $convertInventory = (int)$data['inventory'];
      $convertCategory = (int)$data['category'];
      try {
        $product->update([
          'name' => $data['name'],
          'size' => $data['size'],
          'color' => $data['color'],
          'inventory' => $convertInventory,
          'price' => $convertPrice,
          'image' => $productImgNew,
          'description_short' => $data['description_short'],
          'description_long' => $data['description_long'],
          'regime' => $data['display'],
          'categories_id' => $convertCategory,
        ]);
        $success = 'Update product successfully!';
        $data['image_product']->storeAs('public/upload/products', $productImgNew);
        Storage::delete($productImgOld);
        return redirect()
          ->route('product.index')
          ->with('success',$success);
      } catch (\Exception $e) {
        \Log::error($e);
        $error = 'Update product failed';
        return back()->with('error',$error);
      }
    }


    public function destroy($id)
    {
      $product = Products::findOrFail($id);
      try
      {
        $product->delete();
        if(Storage::exists('public/upload/products/'.$product->image)) {
          Storage::delete('public/upload/products/'.$product->image);
        }
        $success = 'Delete product successfully';
        return redirect()
          ->route('product.index')
          ->with('success', $success);
      } catch (\Exception $e) {
        \Log::error($e);
        $error = 'Delete product failed';
        return back()->with('error', $error);
      }
    }
}
