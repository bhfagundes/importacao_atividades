<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\MaoObraServico;
use Faker\Generator as Faker;

$factory->define(MaoObraServico::class, function (Faker $faker) {

    return [
        'mao_obra' => $faker->word,
        'descrica_mao_obra' => $faker->word
    ];
});
