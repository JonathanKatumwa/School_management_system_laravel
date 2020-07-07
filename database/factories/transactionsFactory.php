<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\transactions;
use Faker\Generator as Faker;

$factory->define(transactions::class, function (Faker $faker) {

    return [
        'student_Id' => $faker->randomDigitNotNull,
        'fee_Id' => $faker->randomDigitNotNull,
        'user_Id' => $faker->randomDigitNotNull,
        'paid' => $faker->randomDigitNotNull,
        'transaction_Date' => $faker->word,
        'remark' => $faker->text,
        'description' => $faker->text,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
