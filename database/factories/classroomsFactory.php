<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\classrooms;
use Faker\Generator as Faker;

$factory->define(classrooms::class, function (Faker $faker) {

    return [
        'classroom_Name' => $faker->word,
        'classroom_code' => $faker->randomDigitNotNull,
        'classroom_Description' => $faker->text,
        'classroom_status' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
