<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\SublasseServico;
use Faker\Generator as Faker;

$factory->define(SublasseServico::class, function (Faker $faker) {

    return [
        'subclasse' => $faker->word,
        'descrica_subclasse' => $faker->word
    ];
});
