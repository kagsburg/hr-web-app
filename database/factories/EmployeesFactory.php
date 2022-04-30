<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Employees;
use Faker\Generator as Faker;

$factory->define(Employees::class, function (Faker $faker) {

    return [
        'FirstName' => $faker->word,
        'LastName' => $faker->word,
        'CurrentAddress' => $faker->word,
        'Gender' => $faker->word,
        'DateofJoining' => $faker->word,
        'DateofBirth' => $faker->word,
        'MartialStatus' => $faker->word,
        'LevelofEducation' => $faker->word,
        'createdby' => $faker->word,
        'updatedby' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'Department_id' => $faker->word,
        'Division_id' => $faker->word
    ];
});
