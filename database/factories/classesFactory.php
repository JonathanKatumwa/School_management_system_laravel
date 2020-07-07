<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\classes;
use Faker\Generator as Faker;

$factory->define(classes::class, function (Faker $faker) {

    return [
        'class_Name' => $faker->word,
        'class_Code' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
