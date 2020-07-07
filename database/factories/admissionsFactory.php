<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\admissions;
use Faker\Generator as Faker;

$factory->define(admissions::class, function (Faker $faker) {

    return [
        'roll_No' => $faker->word,
        'first_Name' => $faker->word,
        'last_Name' => $faker->word,
        'father_Name' => $faker->word,
        'father_Phone' => $faker->word,
        'mother_Name' => $faker->word,
        'gender' => $faker->word,
        'email' => $faker->word,
        'dob' => $faker->word,
        'phone' => $faker->word,
        'address' => $faker->text,
        'current_Address' => $faker->text,
        'nationality' => $faker->word,
        'passport_No' => $faker->word,
        'status' => $faker->word,
        'dateregistered' => $faker->word,
        'user_Id' => $faker->randomDigitNotNull,
        'class_Id' => $faker->randomDigitNotNull,
        'image' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
