<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\class_assignings;
use Faker\Generator as Faker;

$factory->define(class_assignings::class, function (Faker $faker) {

    return [
        'course_Id' => $faker->randomDigitNotNull,
        'level_Id' => $faker->randomDigitNotNull,
        'shift_Id' => $faker->randomDigitNotNull,
        'classroom_Id' => $faker->randomDigitNotNull,
        'batch_Id' => $faker->randomDigitNotNull,
        'day_Id' => $faker->randomDigitNotNull,
        'time_Id' => $faker->randomDigitNotNull,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
