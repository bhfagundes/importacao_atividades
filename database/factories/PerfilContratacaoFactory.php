<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\PerfilContratacao;
use Faker\Generator as Faker;

$factory->define(PerfilContratacao::class, function (Faker $faker) {

    return [
        'codigo' => $faker->word,
        'descricao' => $faker->word
    ];
});
