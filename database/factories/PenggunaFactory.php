<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Pengguna::class, function (Faker $faker) {
    return [
        'created_at' => $faker->created_at,
    ];
});
