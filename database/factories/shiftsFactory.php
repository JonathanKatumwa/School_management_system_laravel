<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\shifts;
use Faker\Generator as Faker;

$factory->define(shifts::class, function (Faker $faker) {

    return [
        'shift' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
