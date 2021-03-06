<?php

use Faker\Generator as Faker;

$factory->define(App\Car::class, function (Faker $faker) {
    return [
        'make' => $faker->randomElement(['ford' ,'honda', 'toyota']),
        'model' => $faker->word, //Since there is no Model or Brand
        'year' => $faker->year,
    ];
});
