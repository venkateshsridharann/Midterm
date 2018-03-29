<?php

use Faker\Generator as Faker;

$factory->define(App\Cars::class, function (Faker $faker) {
    return [
        'Make' => $faker->randomElement($array=array('Honda','Toyota','Ford')),
        'Model'=> $faker->name,
        'Year'=> $faker->year,
    ];
});
