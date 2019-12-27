<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Shop;

$factory->define(Shop::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName('male'|'female') . 'Shop',
    ];
});
