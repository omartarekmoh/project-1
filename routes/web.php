<?php

use App\Models\Item;
use App\Models\CartItem;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    $items = Item::all();
    return view('index', compact('items'));
})->name('index');


Route::post('/store/{id}', function ($id) {
    $user = Auth::user()->id;
    $CartItem = new CartItem();
    $CartItem->item_id = $id;
    $CartItem->user_id = $user;
    $CartItem->save();

    return redirect()->back();
})->name('store')->middleware('auth');


Route::post('/delete/{id}', function ($id) {
    $item = CartItem::find($id);
    $item->delete();
    return redirect()->back();
})->name('delete')->middleware('auth');



Route::get('/cart', function () {
    $cart_items = CartItem::where('user_id', Auth::user()->id)->get();
    return view('shopping-cart')->with('items', $cart_items);
})->name('cart')->middleware('auth');


Route::get('/account', function () {
    return view('account');
})->name('account')->middleware('auth');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
