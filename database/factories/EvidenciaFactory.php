<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Evidencia;
use Faker\Generator as Faker;

$factory->define(Evidencia::class, function (Faker $faker) {

    return [
        'codigo' => $faker->randomDigitNotNull,
        'evidencia' => $faker->word
    ];
});
