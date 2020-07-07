<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\faculties;
use Faker\Generator as Faker;

$factory->define(faculties::class, function (Faker $faker) {

    return [
        'faculty_Name' => $faker->word,
        'faculty_Code' => $faker->word,
        'faculty_Description' => $faker->text,
        'faculty_Status' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
