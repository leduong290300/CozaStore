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
/*TODO: Login User Controller*/
use App\Http\Controllers\LoginUser\LoginUserController;
/*TODO: Register User Controller*/
use App\Http\Controllers\RegisterUser\RegisterUserController;
/*TODO: Forgot User Controller*/
use App\Http\Controllers\ForgotUser\ForgotUserController;
/*TODO: Slider Resource Controller*/
use App\Http\Controllers\Sliders\SlidersController;
/*TODO: Category Resource Controller*/
use App\Http\Controllers\Category\CategoryController;
/*TODO: Product Resource Controller*/
use App\Http\Controllers\Product\ProductController;
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
/*TODO: Login User Controller*/
Route::get('/login',[LoginUserController::class,'login'])->name('showFormLoginUser');
Route::post('/login',[LoginUserController::class,'loginSubmit'])->name('submitFormLoginUser');
Route::get('/logout',[LoginUserController::class,'logoutSubmit'])->name('submitLogoutUser');
/*TODO: Register User Controller*/
Route::get('/register',[RegisterUserController::class,'register'])->name('showFormRegisterUser');
Route::post('/register',[RegisterUserController::class,'registerSubmit'])->name('submitFormRegisterUser');
/*TODO: Forgot User Controller*/
Route::get('/forgot_password',[ForgotUserController::class,'forgot'])->name('showFormForgotPasswordUser');
/*TODO: Slider Resource Controller*/
Route::resource('slider',SlidersController::class);
/*TODO: Category Resource Controller*/
Route::resource('category',CategoryController::class);
/*TODO: Product Resource Controller*/
Route::resource('product',ProductController::class);
