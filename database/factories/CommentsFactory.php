<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Comment;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'text' => $faker->realText(180),
        'user_id' => $faker->numberBetween($min = 1, $max = 15),
        'shop_id' => $faker->numberBetween($min = 1, $max = 15)
    ];
});
