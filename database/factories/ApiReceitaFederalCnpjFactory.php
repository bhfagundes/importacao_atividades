<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\ApiReceitaFederalCnpj;
use Faker\Generator as Faker;

$factory->define(ApiReceitaFederalCnpj::class, function (Faker $faker) {

    return [
        'cnpj' => $faker->word,
        'inscricao_estadual' => $faker->word,
        'codigo_ibge' => $faker->word,
        'email' => $faker->word,
        'data_abertura' => $faker->word,
        'situacao_cadastral' => $faker->word,
        'codigo_situacao_cadastral' => $faker->randomDigitNotNull,
        'data_situacao_cadastral' => $faker->word,
        'motivo_situacao_cadastral' => $faker->word,
        'numero_consulta' => $faker->randomDigitNotNull,
        'consulta' => $faker->date('Y-m-d H:i:s'),
        'numero_inscricao' => $faker->word,
        'tipo_empresa' => $faker->word,
        'nome_empresarial' => $faker->word,
        'titulo_estabelecimento' => $faker->word,
        'porte' => $faker->word,
        'codigo_descricao_atividades' => $faker->word,
        'codigo_descricao_atividade_secundaria' => $faker->word,
        'codigo_descricao_nat_juridica' => $faker->word,
        'logradouro' => $faker->word,
        'numero' => $faker->randomDigitNotNull,
        'complemento' => $faker->word,
        'cep' => $faker->word,
        'bairro' => $faker->word,
        'municipio' => $faker->word,
        'uf' => $faker->word,
        'telefone' => $faker->word,
        'ente_federativo_responsavel' => $faker->word,
        'status' => $faker->word,
        'situacao_especial' => $faker->word,
        'data_situacao_especial' => $faker->word,
        'cnpj_qsa' => $faker->word,
        'nome_empresarial_qsa' => $faker->word,
        'capital_social_qsa' => $faker->word,
        'nome_empresarial_qualificacao_qsa' => $faker->word,
        'status_transacao' => $faker->randomDigitNotNull,
        'ind_bloqueio' => $faker->randomDigitNotNull,
        'tipo_forn_cliente' => $faker->randomDigitNotNull,
        'inscricao_municipal' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s')
    ];
});
