<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'item_category_id',
        'item_subcategory_id',
        'slots',
        'quantity',
        'image',
        'recommended',
        'expiry_date',
        'unique'
    ];

    protected $appends = ['time_left'];

    public function item_category()
    {
        return $this->belongsTo(FoodItemCategory::class);
    }

    public function item_subcategory()
    {
        return $this->belongsTo(FoodItemSubcategory::class);
    }

    public function order_items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    
    public function getTimeLeftAttribute()
    {
        $date_diff = \Carbon\Carbon::now()->diff($this->expiry_date);
        
        $days = $date_diff->d;
        $days = $days < 10? "0$days" : $days;

        $hrs  = $date_diff->h;
        $hrs = $hrs < 10? "0$hrs" : $hrs;

        $mins = $date_diff->i;
        $mins = $mins < 10? "0$mins" : $mins;
       
        return "$days:$hrs:$mins";
    }
}
