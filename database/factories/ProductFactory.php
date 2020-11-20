<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
	$categories = App\Models\Category::pluck('id')->toArray();
    return [
        'title' => Str::random(20),
        'status' => true,
        'sort_order' => $faker->numberBetween($min = 1, $max = 200),
        'category_id' => $faker->randomElement($categories)
    ];
});
