<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'Make' => $faker->randomElement($array=array('Toyota','Honda','ford')),
        'Model'=> $faker->address,
        'Year'=> $faker->year,
    ];
});
