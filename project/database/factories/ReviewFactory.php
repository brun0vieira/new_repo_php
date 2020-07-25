<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Review;
use Faker\Generator as Faker;

$factory->define(Review::class, function (Faker $faker) {
    return [
        // por enquanto fica assim
        'idMovie' => rand(1,50),
        'idUser' => rand(1,50),
        'rating' => rand(1,5),
        'review' => $faker->text,
    ];
});
