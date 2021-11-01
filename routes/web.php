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
/*TODO: Login Controller*/
use App\Http\Controllers\Auth\LoginController;
/*TODO: Register Controller*/
use App\Http\Controllers\Auth\RegisterController;
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
Route::get('/shop/{id}',[ShopController::class,'show'])->name('show');
/*TODO: Blog Controller*/
Route::get('/blog',[BlogController::class,'blog'])->name('blog');
/*TODO: About Controller*/
Route::get('/about',[AboutController::class,'about'])->name('about');
/*TODO: Contact Controller*/
Route::get('/contact',[ContactController::class,'contact'])->name('contact');
/*TODO: Dashboard Controller*/
Route::get('/dashboard',[DashboardController::class,'dashboard'])->middleware('admin');
/*TODO: Login User Controller*/
Route::get('/login/customer', [LoginController::class,'showCustomerLoginForm'])->name('customer_login');
Route::post('/login/customer', [LoginController::class,'submitCustomerLoginForm'])->name('customer_login_submit');
/*TODO: Register User Controller*/
Route::get('/register/customer', [RegisterController::class,'showCustomerRegisterForm'])->name('customer_register');
Route::post('/register/customer', [RegisterController::class,'submitRegisterCustomerForm'])->name('customer_register_submit');
/*TODO: Login Admin Controller*/
Route::get('/login/admin', [LoginController::class,'showAdminLoginForm'])->name('admin_login');
Route::post('/login/admin', [LoginController::class,'submitAdminLoginForm'])->name('admin_login_submit');
/*TODO: Register Admin Controller*/
Route::get('/register/admin', [RegisterController::class,'showRegisterAdminForm'])->name('admin_register');
Route::post('/register/admin', [RegisterController::class,'submitRegisterAdminForm'])->name('admin_register_submit');
/*TODO: Forgot User Controller*/
Route::get('/forgot_password',[ForgotUserController::class,'forgot'])->name('showFormForgotPasswordUser');
/*TODO: Slider Resource Controller*/
Route::resource('slider',SlidersController::class);
/*TODO: Category Resource Controller*/
Route::resource('category',CategoryController::class);
/*TODO: Product Resource Controller*/
Route::resource('product',ProductController::class);
