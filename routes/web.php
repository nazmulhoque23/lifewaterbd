<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
//Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'handleAdmin'])->name('admin.route');//->middleware('admin');

Route::get('/admin/home', [App\Http\Controllers\Dahsboard\HomeController::class, 'index'])->name('admin.index');//->middleware('admin');

//Dashboard
Route::get('/admin/category', [App\Http\Controllers\Dahsboard\CategoryController::class, 'index'])->name('dashboard.category.index');
