<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Classe::class, function (Faker $faker) {
    return [
        'code' => $faker->ean8,
        'nom' => $faker->unique()->name
    ];
});
