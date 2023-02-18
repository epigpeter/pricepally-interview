<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'HomeController@index');
Route::get('/food-items/{filter?}', 'FoodItemController@get_items')->name('food.items');
