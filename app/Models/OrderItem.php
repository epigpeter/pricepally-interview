<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'menu_item_id',
        'order_id',
        'quantity',
        'slot',
    ];

    public function food_item()
    {
        return $this->belongsTo(FoodItem::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
