<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodItemSubcategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'item_category_id',
    ];

    public function item_category()
    {
        return $this->belongsTo(FoodItemCategory::class);
    }

    public function food_items()
    {
        return $this->hasMany(FoodItem::class);
    }
}
