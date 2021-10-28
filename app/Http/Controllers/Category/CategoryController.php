<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\CategoryRequest;
use App\Models\Categories;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Categories::all();
        return view('pages.category.category_index',[
          'categories' => $categories
        ]);
    }

    public function create()
    {
        return view('pages.category.category_create');
    }

    public function store(CategoryRequest $request)
    {
      $data = $request->validated();
      $nameCategory = time().'_'.$data['category']->getClientOriginalName();
      $sliders = new Categories();
      try {
        $sliders->create([
          'name' => $data['title'],
          'description' => $data['description'],
          'image' => $nameCategory
        ]);
        $data['category']->storeAs('public/upload/categories',$nameCategory);
        $success = 'Add category successfully';
        return redirect()
          ->route('category.index')
          ->with('success',$success);
      } catch (\Exception $e) {
        \Log::error($e);
        $error = 'Add category failed';
        return back()->with('error',$error);
      }

    }

    public function show($id)
    {
      $products = Categories::findOrFail($id)->getProducts;
      return view('pages.category.category_details',[
        'products' => $products
      ]);
    }

    public function edit($id)
    {
      $category = Categories::find($id);
      return view('pages.category.category_edit',[
        'category' => $category
      ]);
    }


    public function update(CategoryRequest $request, $id)
    {
      $data = $request->validated();
      $category = Categories::findOrFail($id);
      $categoryImgOld = Storage::files('public/upload/categories',$category->image);
      $categoryImgNew = time().'_'.$data['category']->getClientOriginalName();
      try {
        $category->update([
          'name' => $data['title'],
          'description' => $data['description'],
          'image' => $categoryImgNew
        ]);
        $success = 'Update category successfully!';
        $data['category']->storeAs('public/upload/categories', $categoryImgNew);
        Storage::delete($categoryImgOld);
        return redirect()
          ->route('category.index')
          ->with('success',$success);
      } catch (\Exception $e) {
        \Log::error($e);
        $error = 'Update category failed';
        return back()->with('error',$error);
      }
    }


    public function destroy($id)
    {
        $category = Categories::findOrFail($id);
        try {
          $category->delete();
          if(Storage::exists('public/upload/categories/'.$category->image)) {
            Storage::delete('public/upload/categories/'.$category->image);
          }
          $success = 'Delete category successfully';
          return redirect()
            ->route('category.index')
            ->with('success', $success);
        } catch (\Exception $e) {
          \Log::error($e);
          $error = 'Delete category failed';
          return back()->with('error', $error);
        }
    }
}
