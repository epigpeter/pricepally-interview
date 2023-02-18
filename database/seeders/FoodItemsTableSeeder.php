<?php

namespace Database\Seeders;

use App\Models\FoodItem;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FoodItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Generate 50 food items
        for ($i = 1; $i <= 50; $i++) {
            $item = new FoodItem();
            $item->name = $faker->word();
            $item->description = $faker->sentence();
            $item->price = $faker->randomFloat(2, 1, 50);
            $item->item_category_id = $faker->numberBetween(1, 4);
            $item->item_subcategory_id = $faker->numberBetween(1, 2);
            $item->recommended = $faker->boolean();
            $item->slots = $faker->numberBetween(0, 5);
            $item->expiry_date = Carbon::now()->addDays(rand(1, 30));
            $item->quantity = $faker->numberBetween(5, 100);

            $img_count = $faker->numberBetween(1, 5);
            $item->image_path = "assets/images/Product-img{$img_count}.jpg";
            
            $item->save();
        }
    }
}
