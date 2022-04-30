<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Disciplainary_status;
use Faker\Generator as Faker;

$factory->define(Disciplainary_status::class, function (Faker $faker) {

    return [
        'status' => $faker->word,
        'createdby' => $faker->word,
        'updatedby' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
