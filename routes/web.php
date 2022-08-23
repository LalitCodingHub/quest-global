<?php

use App\Http\Controllers\AddproductController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\UserController;
use App\Models\Addproduct;
use Illuminate\Support\Facades\Route;

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


Route::get('/',[HomeController::class,'index']);

Route::get('login',function(){
    return view('user.login');
})->name('user.login');

Route::get('register',function(){
    return view('user.register');
})->name('user.register');

Route::post('register', [UserController::class,'store'])->name('user.store');

Route::post('/login', [LoginController::class,'login'])->name('user.login');
Route::get('/profile',[UserController::class,'profile'])->name('user.profile');
Route::get('/logout',[LogoutController::class,'logout'])->name('user.logout');
Route::get('/user/dashboard',[UserController::class,'index'])->name('user.dashboard');

Route::get('/productdetail/{id}',[AddproductController::class,'productDetail'])->name('showproductdetails');

Route::get('/add-to-cart',[CartController::class,'addtocart'])->name('addToCart');
Route::post('/add-to-cart',[CartController::class,'addproducttocart']);

Route::group(['prefix'=>'admin'] ,function(){
    Route::get('/',[DashboardController::class,'index']);
    Route::get('users', [UserController::class,'users_list'])->name('user.list'); //fetching all users in admin dashboard
    Route::get('users/{id}', [UserController::class,'destroy'])->name('user.delete');
    Route::get('/addproduct',[AddproductController::class,'index'])->name('add.products');
    Route::post('/addproduct',[AddproductController::class,'store'])->name('product.store');
});

