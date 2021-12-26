<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;

    public function users() {
        return $this->hasMany(User::class, 'user_id');
    }

    public function items() {
        return $this->hasMany(Item::class,'id', 'item_id');
    }
}
