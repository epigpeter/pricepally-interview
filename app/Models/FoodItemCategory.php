<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodItemCategory extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];

    public function food_items()
    {
        return $this->hasMany(FoodItem::class);
    }
}
