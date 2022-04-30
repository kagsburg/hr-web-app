<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\insurancecompensation;
use Faker\Generator as Faker;

$factory->define(insurancecompensation::class, function (Faker $faker) {

    return [
        'DateofIncident' => $faker->word,
        'Reason of Claim' => $faker->word,
        'LocationofIncident' => $faker->word,
        'DateofCompensation' => $faker->word,
        'emp_pin' => $faker->word,
        'createdby' => $faker->word,
        'updatedby' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
