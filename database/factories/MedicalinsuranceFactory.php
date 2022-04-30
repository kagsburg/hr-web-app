<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Medicalinsurance;
use Faker\Generator as Faker;

$factory->define(Medicalinsurance::class, function (Faker $faker) {

    return [
        'emp_pin' => $faker->word,
        'No_of_sibilings' => $faker->randomDigitNotNull,
        'Spouse' => $faker->word,
        'Card_status' => $faker->word,
        'createdby' => $faker->word,
        'updatedby' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
