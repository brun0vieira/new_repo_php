<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Movie;
use Faker\Generator as Faker;

$factory->define(Movie::class, function (Faker $faker) {
    return [
        'movie' => $faker -> streetAddress,
        // faker generates fake data. however it doesn't generate movie titles.
        // in order to simplify my work, I'll just generate street addresses as movie titles.
        // it isnt relevant at this point to have actually movie titles.
    ];
});
