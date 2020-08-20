<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\DataAtividadeEvidencia;
use Faker\Generator as Faker;

$factory->define(DataAtividadeEvidencia::class, function (Faker $faker) {

    return [
        'id_data_atividade' => $faker->randomDigitNotNull,
        'id_evidencia' => $faker->randomDigitNotNull,
        'url_anexo' => $faker->word,
        'valor' => $faker->randomDigitNotNull,
        'comentario' => $faker->word,
        'integracao' => $faker->word
    ];
});
