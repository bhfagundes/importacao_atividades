<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\StatusServico;
use Faker\Generator as Faker;

$factory->define(StatusServico::class, function (Faker $faker) {

    return [
        'descricao' => $faker->word
    ];
});
