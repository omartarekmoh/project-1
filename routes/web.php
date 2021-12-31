<?php

use App\Models\Item;
use App\Models\CartItem;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ShoppingCartController;

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

Route::get('/', [ItemController::class, 'index'])->name('index');
Route::post('/item/{id}', [ItemController::class, 'store'])->name('store')->middleware('auth');
Route::post('/delete/{id}', [ShoppingCartController::class, 'delete'])->name('delete')->middleware('auth');
Route::get('/cart', [ShoppingCartController::class, 'index'])->name('cart')->middleware('auth');

Route::get('/account', function () {
    return view('account');
})->name('account')->middleware('auth');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
