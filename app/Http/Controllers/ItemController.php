<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\CartItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('index', compact('items'));
    }

    function store ($id) {
        $user = Auth::user()->id;

        CartItem::create([
            'item_id' => $id,
            'user_id' => $user
        ]);

        return redirect()->back();
    }
}
