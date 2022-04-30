<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Contracts;
use Faker\Generator as Faker;

$factory->define(Contracts::class, function (Faker $faker) {

    return [
        'status_id' => $faker->word,
        'emp_id' => $faker->word,
        'period' => $faker->randomDigitNotNull,
        'startingDate' => $faker->word,
        'endingDate' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
