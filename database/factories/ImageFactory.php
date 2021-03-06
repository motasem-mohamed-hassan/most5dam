<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Image;
use Faker\Generator as Faker;

$factory->define(Image::class, function (Faker $faker) {
    return [
        'product_id' => function () {
            return factory(App\Product::class)->create()->id;
        },
        'url'   => '2021030611520312270.jpg',
    ];
});
