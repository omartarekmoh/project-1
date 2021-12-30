<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CartItemResource;
use App\Models\CartItem;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShoppingCartController extends Controller
{
    use ApiResponseTrait;

    function index(Request $request)
    {
        $user = User::find($request->id);
        if (!$user) {
            return $this->apiResponse(null, 'Wrong Data Entered', 404);
        }
        return $this->apiResponse(CartItemResource::collection($user->cartItems), 'ok', 200);
    }

    function delete(Request $request)
    {
        $user = User::find($request->id);
        if ($user->cartItems->where('id', $request->cart_item)->isEmpty()) {
            return $this->apiResponse(null, 'Wrong Data Entered', 404);
        }
        foreach ($user->cartItems->where('id', $request->cart_item) as $item) {
            $item->delete();
        }
        return $this->apiResponse(null, 'Cart Item Is Deleted Successfully', 200);

    }
}
