<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Cruzamentos;
use Faker\Generator as Faker;

$factory->define(Cruzamentos::class, function (Faker $faker) {

    return [
        'estabelecimento' => $faker->word,
        'uf' => $faker->word,
        'escrituracao' => $faker->word,
        'periodo_inicial' => $faker->word,
        'periodo_final' => $faker->word,
        'cruzamentos' => $faker->word,
        'alertas' => $faker->randomDigitNotNull,
        'erros' => $faker->randomDigitNotNull,
        'status' => $faker->word,
        'link_download' => $faker->word
    ];
});
