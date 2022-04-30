<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Divisions;
use Faker\Generator as Faker;

$factory->define(Divisions::class, function (Faker $faker) {

    return [
        'Divisionname' => $faker->word,
        'Position' => $faker->word,
        'Department_id' => $faker->word,
        'createdby' => $faker->word,
        'updatedby' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
