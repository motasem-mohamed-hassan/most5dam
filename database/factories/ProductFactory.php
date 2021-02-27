<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'user_id'   => '1',
        'brand_id'  => '1',
        'category_id'   => '1',
        'model'     => 'كيا 1',
        'manufactureYear'   => '1960',
        'wheelType' => 'رباعي',
        'transmissionType' => 'عادي',
        'kilometers'    => '214',
        'engineCapacity'    => '32',
        'fuelType'  => 'بنزين',
        'city'  => 'مكة',
        'description' => 'منتج جيد وصف',
        'price'     => '100000',
        'status'    =>  1,
    ];
});
