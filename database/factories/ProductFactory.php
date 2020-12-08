<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->text(15),
        'description' => $faker->paragraph,
        'image' => 'https://loremflickr.com/320/240/dish?random='.$faker->numberBetween(0,500),
        'stock' => $faker->numberBetween(0,1000),
        'price' => $faker->numberBetween(20,200),
        'category_id' => $faker->numberBetween(1,3),
    ];
});
