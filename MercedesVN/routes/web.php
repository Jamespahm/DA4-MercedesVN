<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [App\Http\Controllers\HomeController::class,'index']) ->name('index');

Route::get('/productlist', [App\Http\Controllers\HomeController::class,'productlist']) ->name('productlist');


Route::get('/productDetail/{MaXe}', [App\Http\Controllers\HomeController::class,'productDetail']) ->name('productDetail');

Route::get('/news', [App\Http\Controllers\HomeController::class,'news']) ->name('news');

Route::get('/register', [App\Http\Controllers\HomeController::class,'register']) ->name('register');

Route::get('/login', [App\Http\Controllers\HomeController::class,'login']) ->name('login');
Route::post('/login1', [App\Http\Controllers\HomeController::class,'login1']) ->name('login1');

Route::get('/cart', [App\Http\Controllers\CartController::class, 'cart'])->name('cart');

Route::get('/checkout', [App\Http\Controllers\ProductsController::class, 'checkout'])->name('checkout');
Route::post('/checkout', [App\Http\Controllers\ProductsController::class, 'checkout'])->name('checkout');


Route::get('/darshboard', [App\Http\Controllers\AdminController::class,'darshboard']) ->name('darshboard');

// Route::get('cart', [CartController::class, 'cart'])->name('cart');


// Route::get('/products', [ProductController::class, 'productList'])->name('products.list');
// Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
// Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
// Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
// Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
// Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');
