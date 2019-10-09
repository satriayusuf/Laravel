<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Pengguna::class, function (Faker $faker) {
    return [
        'nama' => $faker->nama,
        'no_telepon' => $faker->no_telepon,
        'email' => $faker->email,
        'alamat' => $faker->alamat,
        'created_at' => $faker->created_at
    ];
});
