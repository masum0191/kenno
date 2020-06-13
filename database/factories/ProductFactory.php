<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'title' => $faker->word(),
        'category_id' => \App\Category::inRandomOrder()->first()->id,
        'description' => $faker->paragraph,
        'is_featured' => rand(1, 5),
        'price' => rand(100, 1000),
        'rating' => rand(3, 7),
        'image_url' => $faker->image('public/assets/images',400,300, null, false),

    ];
});
