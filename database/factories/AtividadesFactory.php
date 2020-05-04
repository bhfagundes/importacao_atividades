<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Atividades;
use Faker\Generator as Faker;

$factory->define(Atividades::class, function (Faker $faker) {

    return [
        'id_tipo_atividade' => $faker->randomDigitNotNull,
        'id_obrigacao' => $faker->randomDigitNotNull,
        'id_codigo_receita' => $faker->randomDigitNotNull,
        'ordem' => $faker->randomDigitNotNull,
        'is_critica' => $faker->randomDigitNotNull,
        'data' => $faker->word,
        'regra_dia_util' => $faker->randomDigitNotNull,
        'usuario_responsavel' => $faker->randomDigitNotNull,
        'tipo_dia' => $faker->randomDigitNotNull,
        'quantidade_dias' => $faker->randomDigitNotNull,
        'id_status_atividade_api' => $faker->randomDigitNotNull,
        'mandatoria' => $faker->word,
        'conclusao_auto' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'id_filial' => $faker->randomDigitNotNull,
        'contagem_dia' => $faker->randomDigitNotNull
    ];
});
