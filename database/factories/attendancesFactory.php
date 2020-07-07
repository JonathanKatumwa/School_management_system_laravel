<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\attendances;
use Faker\Generator as Faker;

$factory->define(attendances::class, function (Faker $faker) {

    return [
        'student_Id' => $faker->randomDigitNotNull,
        'class_Id' => $faker->randomDigitNotNull,
        'subject_Id' => $faker->randomDigitNotNull,
        'teacher_Id' => $faker->randomDigitNotNull,
        'attendance_Status' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
