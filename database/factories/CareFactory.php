<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Care;
use Faker\Generator as Faker;

$factory->define(Care::class, function (Faker $faker) {

    return [
        'pat_name' => $faker->word,
        'pat_number' => $faker->randomDigitNotNull,
        'age' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
