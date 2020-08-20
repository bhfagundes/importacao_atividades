<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\AtividadeEvidencia;
use Faker\Generator as Faker;

$factory->define(AtividadeEvidencia::class, function (Faker $faker) {

    return [
        'id_atividade' => $faker->randomDigitNotNull,
        'id_evidencia' => $faker->randomDigitNotNull,
        'mandatoria' => $faker->word,
        'conclusao_auto' => $faker->word
    ];
});
