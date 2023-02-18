<?php

namespace Database\Seeders;

use App\Models\FoodItemCategory;
use Illuminate\Database\Seeder;

class FoodItemCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $images = [
            'images/packfood_img.png',
            'images/foodstuff-img.png',
            'images/fruits-img.png'
        ];
        // Create a list of categories
        $categories = [
            [
                'name' => 'Soup & Stew Ingredients',
                'image_path' => $images[rand(0, 2)]?? null
            ],
            [
                'name' => 'Food Stuff',
                'image_path' => $images[rand(0, 2)]?? null
            ],
            [
                'name' => 'Meet, Poultry & Seafood',
                'image_path' => $images[rand(0, 2)]?? null
            ],
            [
                'name' => 'Packaged Food',
                'image_path' => $images[rand(0, 2)]?? null
            ],
        ];

        // Loop through the list and create category models for each
        foreach ($categories as $category) {
            FoodItemCategory::create($category);
        }
    }
}
