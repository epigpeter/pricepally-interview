<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\FoodItemCategory;
use App\Models\FoodItemSubcategory;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $item_categories = FoodItemCategory::get();
        
        return view('home.index', compact('item_categories'));
    }
}
