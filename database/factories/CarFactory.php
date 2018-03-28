<?php

use Faker\Generator as Faker;

$factory->define(App\Cars::class, function (Faker $faker) {
    return [
        'Make' => $faker->randomElement($array=array('Toyota','Honda','ford')),
        'Model'=> $faker->address,
        'Year'=> $faker->year,
    ];
});
