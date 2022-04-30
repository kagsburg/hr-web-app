<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Departments;
use Faker\Generator as Faker;

$factory->define(Departments::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'createdby' => $faker->word,
        'updatedby' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
