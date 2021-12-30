<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShoppingCartController extends Controller
{
    function index () {
        $cart_items = CartItem::where('user_id', Auth::user()->id)->get();
        return view('shopping-cart', compact('cart_items'));
    }

    function delete ($id) {
        $item = CartItem::find($id);
        $item->delete();
        return redirect()->back();
    }
}
