<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('food_items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('price', 8, 2);
            $table->unsignedTinyInteger('slots')->default(1);
            $table->boolean('in_season')->default(false);
            $table->string('quantity');
            $table->string('image_path')->nullable();
            $table->unsignedBigInteger('item_category_id');
            $table->unsignedBigInteger('item_subcategory_id')->nullable();
            $table->text('description');
            $table->timestamps();

            $table->foreign('item_category_id')->references('id')->on('food_item_categories')->onDelete('cascade');
            $table->foreign('item_subcategory_id')->references('id')->on('food_item_subcategories')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('food_items');
    }
};
