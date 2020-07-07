<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\class_schedulings;
use Faker\Generator as Faker;

$factory->define(class_schedulings::class, function (Faker $faker) {

    return [
        'course_Id' => $faker->randomDigitNotNull,
        'level_Id' => $faker->randomDigitNotNull,
        'shift_Id' => $faker->randomDigitNotNull,
        'classroom_Id' => $faker->randomDigitNotNull,
        'batch_Id' => $faker->randomDigitNotNull,
        'day_Id' => $faker->randomDigitNotNull,
        'time_Id' => $faker->randomDigitNotNull,
        'teacher_Id' => $faker->randomDigitNotNull,
        'start_Time' => $faker->word,
        'end_Time' => $faker->word,
        'status' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
