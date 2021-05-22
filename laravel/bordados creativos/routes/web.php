<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\userscontroller;
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

//Route::get('/', function () {
//return view('index');
//});

Route::get('/index', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/trabajos', function () {
    return view('trabajos');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact');
});


// https://webmobtuts.com/backend-development/creating-a-shopping-cart-with-laravel/
Route::get('/', 'App\Http\Controllers\ProductsController@index');
Route::get('/cart', 'App\Http\Controllers\ProductsController@cart');
Route::get('/add-to-cart/{id}', 'App\Http\Controllers\ProductsController@addToCart');

Route::patch('update-cart', 'App\Http\Controllers\ProductsController@update');
Route::delete('remove-from-cart', 'App\Http\Controllers\ProductsController@remove');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
