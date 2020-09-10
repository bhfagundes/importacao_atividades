<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ContratacaoServico;
use Faker\Generator as Faker;

$factory->define(ContratacaoServico::class, function (Faker $faker) {

    return [
        'id_servico' => $faker->randomDigitNotNull,
        'cnae_origem' => $faker->word,
        'cnae_destino' => $faker->word,
        'id_cidade_origem' => $faker->randomDigitNotNull,
        'id_estado_origem' => $faker->randomDigitNotNull,
        'id_cidade_destino' => $faker->randomDigitNotNull,
        'id_estado_destino' => $faker->randomDigitNotNull,
        'id_cidade_fato_gerador' => $faker->randomDigitNotNull,
        'generico_1' => $faker->text,
        'chave_banco' => $faker->word,
        'id_item_nota' => $faker->randomDigitNotNull,
        'valor_servico' => $faker->word,
        'valor_desconto_incondicional' => $faker->word,
        'valor_desconto_condicional' => $faker->word,
        'valor_deducoes' => $faker->word,
        'generico_2' => $faker->word,
        'valor_abatido_inss' => $faker->word,
        'tipo_nota' => $faker->randomDigitNotNull,
        ' timestamp_recepcao_sigvc' => $faker->date('Y-m-d H:i:s'),
        'timestamp_devolucao_systax' => $faker->date('Y-m-d H:i:s'),
        'svc' => $faker->randomDigitNotNull,
        'id_perfil_remetente' => $faker->randomDigitNotNull,
        'id_perfil_destinatario' => $faker->randomDigitNotNull,
        'id_filial' => $faker->randomDigitNotNull,
        'id_fornecedor' => $faker->randomDigitNotNull,
        'natureza_operacao' => $faker->randomDigitNotNull
    ];
});
