<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\academics;
use Faker\Generator as Faker;

$factory->define(academics::class, function (Faker $faker) {

    return [
        'academic_Year' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
