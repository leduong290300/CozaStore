<?php

use Illuminate\Support\Facades\Route;
/*TODO: Home Controller*/
use App\Http\Controllers\Home\HomeController;
/*TODO: Shop Controller*/
use App\Http\Controllers\Shop\ShopController;
/*TODO: Blog Controller*/
use App\Http\Controllers\Blog\BlogController;
/*TODO: About Controller*/
use App\Http\Controllers\About\AboutController;
/*TODO: Contact Controller*/
use App\Http\Controllers\Contact\ContactController;
/*TODO: Dashboard Controller*/
use App\Http\Controllers\Dashboard\DashboardController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*TODO: Home Controller*/
Route::get('/',[HomeController::class,'show'])->name('home');
/*TODO: Shop Controller*/
Route::get('/shop',[ShopController::class,'shop'])->name('shop');
/*TODO: Blog Controller*/
Route::get('/blog',[BlogController::class,'blog'])->name('blog');
/*TODO: About Controller*/
Route::get('/about',[AboutController::class,'about'])->name('about');
/*TODO: Contact Controller*/
Route::get('/contact',[ContactController::class,'contact'])->name('contact');

/*TODO: Dashboard Controller*/
Route::get('/dashboard',[DashboardController::class,'dashboard']);