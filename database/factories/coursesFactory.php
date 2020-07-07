<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\courses;
use Faker\Generator as Faker;

$factory->define(courses::class, function (Faker $faker) {

    return [
        'course_Name' => $faker->word,
        'course_Code' => $faker->word,
        'description' => $faker->text,
        'status' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
