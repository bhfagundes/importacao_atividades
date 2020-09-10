<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ClasseServico;
use Faker\Generator as Faker;

$factory->define(ClasseServico::class, function (Faker $faker) {

    return [
        'classe' => $faker->word
    ];
});
