<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'food_item_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function food_item()
    {
        return $this->belongsTo(FoodItem::class);
    }
}
