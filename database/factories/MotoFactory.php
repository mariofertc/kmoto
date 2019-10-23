<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Moto;
use Faker\Generator as Faker;

$factory->define(Moto::class, function (Faker $faker) {
    return [
        'name' => substr($faker->sentence(2), 0, -1),
        'cylindrical' => $faker->numberBetween(100,1000),
        'description' => $faker->paragraph,
        'passengers' =>$faker->numberBetween(1,4),
        'plate_number' =>$faker->word(6),
        'color' => $faker->word(4),
        'model' =>$faker->word,
        'type' => $faker->word,
        'year' => $faker->year,
        'maximun_weight' => $faker->numberBetween(100,400),
        'value' => $faker->numberBetween(500.00,5000.00),
        'address' => $faker->city,
        'address_location' => substr($faker->sentence(2), 0, -1),
        'id_location_origin' => $faker->randomDigit,
        'id_owner' => $faker->randomDigit,
    ];
});