<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->text(15),
        'description' => $faker->paragraph,
        'image' => $faker->imageUrl(640,480,'food'),
        'stock' => $faker->numberBetween(0,1000),
        'price' => $faker->numberBetween(20,200),
        'category_id' => $faker->numberBetween(1,3),
    ];
});
