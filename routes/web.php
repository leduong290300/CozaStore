<?php

use Illuminate\Support\Facades\Route;

/*Home Controller*/
use App\Http\Controllers\Home\HomeController;

/*Shop Controller*/
use App\Http\Controllers\Shop\ShopController;

/*Blog Controller*/
use App\Http\Controllers\Blog\BlogController;

/*About Controller*/
use App\Http\Controllers\About\AboutController;

/*Contact Controller*/
use App\Http\Controllers\Contact\ContactController;

/*Dashboard Controller*/
use App\Http\Controllers\Dashboard\DashboardController;

/*Login Controller*/
use App\Http\Controllers\Auth\LoginController;

/*Register Controller*/
use App\Http\Controllers\Auth\RegisterController;

/*Forgot User Controller*/
use App\Http\Controllers\ForgotUser\ForgotUserController;

/*Slider Resource Controller*/
use App\Http\Controllers\Sliders\SlidersController;

/*Category Resource Controller*/
use App\Http\Controllers\Category\CategoryController;

/*Product Resource Controller*/
use App\Http\Controllers\Product\ProductController;

/*Order Controller*/
use App\Http\Controllers\OrderCart\OrderCartController;
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

/*Home Controller*/
Route::get('/',[HomeController::class,'show'])->name('home');

/*Shop Controller*/
Route::get('/shop',[ShopController::class,'shop'])->name('shop');
Route::get('/shop/{id}',[ShopController::class,'show'])->name('show');

/*Blog Controller*/
Route::get('/blog',[BlogController::class,'blog'])->name('blog');

/*About Controller*/
Route::get('/about',[AboutController::class,'about'])->name('about');

/*Contact Controller*/
Route::get('/contact',[ContactController::class,'contact'])->name('contact');

/*Dashboard Controller*/
Route::get('/dashboard',[DashboardController::class,'dashboard'])->middleware('admin');

/*Login User Controller*/
Route::get('/login/customer', [LoginController::class,'showCustomerLoginForm'])->name('customer_login');
Route::post('/login/customer', [LoginController::class,'submitCustomerLoginForm'])->name('customer_login_submit');

/*Register User Controller*/
Route::get('/register/customer', [RegisterController::class,'showCustomerRegisterForm'])->name('customer_register');
Route::post('/register/customer', [RegisterController::class,'submitRegisterCustomerForm'])->name('customer_register_submit');

/*Login Admin Controller*/
Route::get('/login/admin', [LoginController::class,'showAdminLoginForm'])->name('admin_login');
Route::post('/login/admin', [LoginController::class,'submitAdminLoginForm'])->name('admin_login_submit');

/*Register Admin Controller*/
Route::get('/register/admin', [RegisterController::class,'showRegisterAdminForm'])->name('admin_register');
Route::post('/register/admin', [RegisterController::class,'submitRegisterAdminForm'])->name('admin_register_submit');

/*Forgot User Controller*/
Route::get('/forgot_password',[ForgotUserController::class,'forgot'])->name('showFormForgotPasswordUser');

/*Slider Resource Controller*/
Route::resource('slider',SlidersController::class);

/*Category Resource Controller*/
Route::resource('category',CategoryController::class);

/*Product Resource Controller*/
Route::resource('product',ProductController::class);

/*Order Resource Controller*/
Route::resource('order',OrderCartController::class);
