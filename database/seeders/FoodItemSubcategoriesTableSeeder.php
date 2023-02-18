<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FoodItemSubcategory;

class FoodItemSubcategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create a list of categories
        $categories = [
            [
                'name' => 'Grains',
                'item_category_id' => 1
            ],
            [
                'name' => 'Tubers & Root',
                'item_category_id' => 2
            ],
        ];

        // Loop through the list and create category models for each
        foreach ($categories as $category) {
            FoodItemSubcategory::create($category);
        }
    }
}
