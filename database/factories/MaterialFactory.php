<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Material;
use Faker\Generator as Faker;

$factory->define(Material::class, function (Faker $faker) {

    return [
        'codigo_uar_tuc' => $faker->word,
        'ativo_eletrico' => $faker->randomDigitNotNull,
        'codigo_patrimonial' => $faker->word,
        'percentual_divergencia' => $faker->word,
        'indicador_credito_pis_cofins_distribuidora' => $faker->word,
        'indicador_credito_pis_cofins_prestadora' => $faker->word,
        'indicador_credito_icms' => $faker->word,
        'codigo_produto' => $faker->word,
        'origem_produto' => $faker->randomDigitNotNull,
        'ncm' => $faker->randomDigitNotNull,
        'tipi' => $faker->randomDigitNotNull,
        'cean' => $faker->randomDigitNotNull,
        'descricao_tecnica' => $faker->word,
        'timestamp_recepcao_sisup' => $faker->date('Y-m-d H:i:s'),
        'timestamp_devolucao_systax' => $faker->date('Y-m-d H:i:s'),
        'data_recebimento' => $faker->word,
        'desc_ncm_definitiva' => $faker->text,
        'desc_ncm_original' => $faker->text,
        'desc_ncm_sugerida' => $faker->text,
        'duvida_tecnica' => $faker->text,
        'ean_saneada' => $faker->randomDigitNotNull,
        'ex_tipi_sugerida' => $faker->randomDigitNotNull,
        'ex_tipi_definitiva' => $faker->randomDigitNotNull,
        'fundamentacao' => $faker->text,
        'ncm_definitiva' => $faker->randomDigitNotNull,
        'ncm_sugerida' => $faker->randomDigitNotNull,
        'motivo_reprovacao_ncm' => $faker->text,
        'id_status_material' => $faker->randomDigitNotNull,
        'data_saneamento' => $faker->date('Y-m-d H:i:s'),
        'data_atualizacao' => $faker->date('Y-m-d H:i:s')
    ];
});
