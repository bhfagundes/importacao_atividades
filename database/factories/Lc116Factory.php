<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Lc116;
use Faker\Generator as Faker;

$factory->define(Lc116::class, function (Faker $faker) {

    return [
        'codigo' => $faker->word,
        'descricao' => $faker->word
    ];
});
