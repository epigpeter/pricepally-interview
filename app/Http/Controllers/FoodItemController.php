<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FoodItem;

class FoodItemController extends Controller
{
    public function get_items(Request $request, $filter = 'all')
    {
        $perPage = 20;
        $skip = $request->input('skip', 0);
        $item_model = FoodItem::skip($skip)->take($perPage);

        $view_type = '';
        $total = 0;

        switch(strtoupper($filter)) {
            case 'ALL':
                $view_type = 'shop';
                $total = FoodItem::count();
                break;
            case 'RECOMMENDED':
                $view_type = 'recommended';
                $item_model = $item_model->where('recommended', true);
                $total = FoodItem::where('recommended', true)->count();
                break;
            case 'UNIQUE':
                $view_type = 'pally';
                $item_model = $item_model->where('unique', true);
                $total = FoodItem::where('unique', true)->count();
                break;
            default:
                $view_type = 'shop';
        }
        
        $items = $item_model->get();
        $lastPage = $items->count() < $perPage;

        $html = view("shared.$view_type-food-items", ['items' => $items])->render();
        
        return response()->json([
            'html' => $html,
            'last_page' => $lastPage,
            'total' => $total
        ]);
    }
}
