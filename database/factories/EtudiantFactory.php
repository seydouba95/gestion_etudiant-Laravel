<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Etudiant::class, function (Faker $faker) {
    return [
        'prenom' => $faker->firstName,
        'nom' => $faker->lastName  ,
        'email' => $faker->unique()->safeEmail,
        'tel' => $faker->phoneNumber,
        'dateNaiss' => $faker->date ,
        'classe_id'=> function(){
            return App\Models\Classe::all()->random();
        }
    ];
});
