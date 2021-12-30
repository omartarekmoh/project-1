<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CartItemResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'cart_id' => $this->id,
            'item_id' => $this->item->id,
            'name' => $this->item->name,
            'price' => $this->item->price,
            'image' => $this->item->image,
            'user' => $this->users->name,
        ];
    }
}
