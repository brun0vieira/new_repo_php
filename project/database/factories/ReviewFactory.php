<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Review;
use Faker\Generator as Faker;

$factory->define(Review::class, function (Faker $faker) {
    return [
        // random Movie Id being 50 the no. of movies
        // random User Id being 50 the no. of users
        // the max rand_no shouldn't be hardcoded. It should be a const. saved in .env. (change that later)
        'idMovie' => rand(1,50),
        'idUser' => rand(1,50),
        'rating' => rand(1,5),
        'review' => $faker->text,
    ];
});
