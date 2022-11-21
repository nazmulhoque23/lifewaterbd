<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Dahsboard\CategoryController;
use App\Http\Controllers\Dahsboard\ProductController;
use App\Http\Controllers\Dahsboard\BrandController;
use App\Http\Controllers\Dahsboard\UserDashboardController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/{id}',[App\Http\Controllers\HomeController::class, 'show'])->name('productview');

Route::get('/products/cart', [App\Http\Controllers\HomeController::class, 'cart'])->name('cartview');
Route::get('/products/add-to-cart/{id}', [App\Http\Controllers\HomeController::class, 'addToCart'])->name('addtocart');
Route::patch('/products/update-cart', [App\Http\Controllers\HomeController::class, 'update'])->name('updatecart');
Route::delete('/products/delete-from-cart', [App\Http\Controllers\HomeController::class, 'remove'])->name('removeitem');

Route::get('/products/order/{id}', [App\Http\Controllers\HomeController::class, 'order'])->name('cartview2');
Route::get('/products/order-list',[App\Http\Controllers\HomeController::class, 'orderList'])->name('orderList');
Route::get('/products/order-store', [App\Http\Controllers\HomeController::class, 'storeOrder'])->name('storeorder');
//Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'handleAdmin'])->name('admin.route');//->middleware('admin');
Route::get('/login', [App\Http\Controllers\AuthController::class, 'index'])->name('login');
Route::post('/login', [App\Http\Controllers\AuthController::class, 'store']);
Route::post('/logout', [App\Http\Controllers\AuthController::class, 'destroy'])->name('logout');

Route::get('/register', [App\Http\Controllers\RegistrationController::class, 'index'])->name('register');
Route::post('/register', [App\Http\Controllers\RegistrationController::class, 'store']);

Route::get('/admin/home', [App\Http\Controllers\Dahsboard\HomeController::class, 'index'])->name('admin.index')->middleware('admin');

//Dashboard
//Route::get('/admin/categories', [CategoryController::class, 'index'])->name('dashboard.categories.index');
//Route::post('/store', [App\Http\Controllers\Dahsboard\CategoryController::class, 'store']);

Route::resource('/admin/categories', CategoryController::class)->middleware('admin');
Route::resource('/admin/brands', BrandController::class)->middleware('admin');
Route::resource('/admin/products', ProductController::class)->middleware('admin');
Route::resource('/admin/users', UserDashboardController::class)->middleware('admin');

/*Route::get('/admin/products',[ProductController::class, 'index'])->name('products.index')->middleware('admin');
Route::post('/admin/products',[ProductController::class, 'store'])->name('products.store')->middleware('admin');
Route::put('/admin/products/{product}',[ProductController::class, 'update'])->name('products.update');
Route::delete('/admin/products/{id}',[ProductController::class, 'destroy'])->name('products.destroy');*/
//Route::post('/admin/categories', 'App\Http\Controllers\Dahsboard\CategoryController@store');