<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\CartItemResource;
use App\Http\Resources\ItemResource;
use App\Models\CartItem;
use App\Models\Item;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ItemController extends Controller
{
    use ApiResponseTrait;

    public function index(): array
    {
        $items = ItemResource::collection(Item::all());
        $msg = ["ok"];
        return $this->apiResponse($items, 'ok', 200);
    }

    public function show($id): array
    {
        $item = Item::find($id);
        if ($item) {
            return $this->apiResponse(new ItemResource($item), 'ok', 200);
        }

        return $this->apiResponse(null, 'This Item Is Not Found', 404);

    }

    function store(Request $request)
    {
        if (!Item::find($request->item_id) || !User::find($request->user_id)) {
            return $this->apiResponse(null, 'Wrong Data Entered', 404);
        }

        $item = CartItem::create([
            'item_id' => $request->item_id,
            'user_id' => $request->user_id
        ]);
        if ($item) {
            return $this->apiResponse(new CartItemResource($item), 'The Item Is Added To Cart', 200);
        } else {
            return $this->apiResponse(null, 'Something Went Wrong', 401);
        }

    }
}
