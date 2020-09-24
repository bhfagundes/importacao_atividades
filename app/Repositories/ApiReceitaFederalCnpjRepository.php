<?php

namespace App\Repositories;

use App\Models\ApiReceitaFederalCnpj;
use App\Repositories\BaseRepository;

/**
 * Class ApiReceitaFederalCnpjRepository
 * @package App\Repositories
 * @version September 12, 2020, 1:46 am UTC
*/

class ApiReceitaFederalCnpjRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'cnpj',
        'inscricao_estadual',
        'codigo_ibge',
        'email',
        'data_abertura',
        'situacao_cadastral',
        'codigo_situacao_cadastral',
        'data_situacao_cadastral',
        'motivo_situacao_cadastral',
        'numero_consulta',
        'consulta',
        'numero_inscricao',
        'tipo_empresa',
        'nome_empresarial',
        'titulo_estabelecimento',
        'porte',
        'codigo_descricao_atividades',
        'codigo_descricao_atividade_secundaria',
        'codigo_descricao_nat_juridica',
        'logradouro',
        'numero',
        'complemento',
        'cep',
        'bairro',
        'municipio',
        'uf',
        'telefone',
        'ente_federativo_responsavel',
        'status',
        'situacao_especial',
        'data_situacao_especial',
        'cnpj_qsa',
        'nome_empresarial_qsa',
        'capital_social_qsa',
        'nome_empresarial_qualificacao_qsa',
        'status_transacao',
        'ind_bloqueio',
        'tipo_forn_cliente',
        'inscricao_municipal',
        'created_at'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ApiReceitaFederalCnpj::class;
    }
}
