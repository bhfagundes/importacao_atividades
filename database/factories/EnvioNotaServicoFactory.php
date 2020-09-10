<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\EnvioNotaServico;
use Faker\Generator as Faker;

$factory->define(EnvioNotaServico::class, function (Faker $faker) {

    return [
        'path_arquivo' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'enviado' => $faker->word,
        'identificador_nota' => $faker->word
    ];
});
