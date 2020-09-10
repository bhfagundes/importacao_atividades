<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Servico;
use Faker\Generator as Faker;

$factory->define(Servico::class, function (Faker $faker) {

    return [
        'id_status_servico' => $faker->randomDigitNotNull,
        'ativo' => $faker->word,
        'id_mao_obra_servico' => $faker->randomDigitNotNull,
        'id_classe_servico' => $faker->randomDigitNotNull,
        'id_subclasse_servico' => $faker->randomDigitNotNull,
        'flag_credito_distribuidora' => $faker->word,
        'flag_credito_prestadora' => $faker->word,
        'id_lc_116' => $faker->randomDigitNotNull,
        'flag_entrada_saida' => $faker->word,
        'id_cidade' => $faker->randomDigitNotNull,
        'id_lc_116_systax' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'id_usuario' => $faker->randomDigitNotNull,
        'duvida_tecnica' => $faker->word,
        'duvida_tecncia' => $faker->word,
        'id_lc_116_definitivo' => $faker->randomDigitNotNull,
        'retorno_duvida_tecnica' => $faker->word,
        'id_servico_rfb' => $faker->randomDigitNotNull,
        'aliquota_ir' => $faker->word,
        'aliquota_inss' => $faker->word,
        'aliquota_pis' => $faker->word,
        'aliquota_cofins' => $faker->word,
        'aliquota_csll' => $faker->word,
        'aliquota_cprb' => $faker->word,
        'percentual_reducao_inss' => $faker->word,
        'indicador_pis' => $faker->word,
        'indicador_cofins' => $faker->word,
        'indicador_iss' => $faker->word,
        'alquota_iss' => $faker->word,
        'codigo_servico_municipio' => $faker->word
    ];
});
