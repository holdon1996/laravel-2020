<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'product_code' => $faker->unique(true)->creditCardNumber,
        'description' => $faker->sentence
    ];
});
