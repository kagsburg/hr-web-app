<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Roles;
use Faker\Generator as Faker;

$factory->define(Roles::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'createdby' => $faker->word,
        'updatedby' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
