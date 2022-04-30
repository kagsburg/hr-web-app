<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Disciplainary;
use Faker\Generator as Faker;

$factory->define(Disciplainary::class, function (Faker $faker) {

    return [
        'emp_pin' => $faker->word,
        'status_id' => $faker->word,
        'NumberReceived' => $faker->randomDigitNotNull,
        'suspensionstartdate' => $faker->word,
        'suspensionenddate' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
