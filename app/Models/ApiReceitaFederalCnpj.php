<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class ApiReceitaFederalCnpj
 * @package App\Models
 * @version September 12, 2020, 1:46 am UTC
 *
 * @property string $cnpj
 * @property string $inscricao_estadual
 * @property string $codigo_ibge
 * @property string $email
 * @property string $data_abertura
 * @property string $situacao_cadastral
 * @property integer $codigo_situacao_cadastral
 * @property string $data_situacao_cadastral
 * @property string $motivo_situacao_cadastral
 * @property integer $numero_consulta
 * @property string|\Carbon\Carbon $consulta
 * @property string $numero_inscricao
 * @property string $tipo_empresa
 * @property string $nome_empresarial
 * @property string $titulo_estabelecimento
 * @property string $porte
 * @property string $codigo_descricao_atividades
 * @property string $codigo_descricao_atividade_secundaria
 * @property string $codigo_descricao_nat_juridica
 * @property string $logradouro
 * @property integer $numero
 * @property string $complemento
 * @property string $cep
 * @property string $bairro
 * @property string $municipio
 * @property string $uf
 * @property string $telefone
 * @property string $ente_federativo_responsavel
 * @property integer $status
 * @property string $situacao_especial
 * @property string $data_situacao_especial
 * @property string $cnpj_qsa
 * @property string $nome_empresarial_qsa
 * @property string $capital_social_qsa
 * @property string $nome_empresarial_qualificacao_qsa
 * @property integer $status_transacao
 * @property integer $ind_bloqueio
 * @property integer $tipo_forn_cliente
 * @property string $inscricao_municipal
 * @property string|\Carbon\Carbon $created_at
 */
class ApiReceitaFederalCnpj extends Model
{

    public $table = 'api_receita_federal_cnpj';

    public $timestamps = false;


    public $connection = "mysql";

    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'cnpj' => 'string',
        'inscricao_estadual' => 'string',
        'codigo_ibge' => 'string',
        'email' => 'string',
        'data_abertura' => 'date',
        'situacao_cadastral' => 'string',
        'codigo_situacao_cadastral' => 'integer',
        'data_situacao_cadastral' => 'date',
        'motivo_situacao_cadastral' => 'string',
        'numero_consulta' => 'integer',
        'consulta' => 'datetime',
        'numero_inscricao' => 'string',
        'tipo_empresa' => 'string',
        'nome_empresarial' => 'string',
        'titulo_estabelecimento' => 'string',
        'porte' => 'string',
        'codigo_descricao_atividades' => 'string',
        'codigo_descricao_atividade_secundaria' => 'string',
        'codigo_descricao_nat_juridica' => 'string',
        'logradouro' => 'string',
        'numero' => 'integer',
        'complemento' => 'string',
        'cep' => 'string',
        'bairro' => 'string',
        'municipio' => 'string',
        'uf' => 'string',
        'telefone' => 'string',
        'ente_federativo_responsavel' => 'string',
        'status' => 'integer',
        'situacao_especial' => 'string',
        'data_situacao_especial' => 'date',
        'cnpj_qsa' => 'string',
        'nome_empresarial_qsa' => 'string',
        'capital_social_qsa' => 'string',
        'nome_empresarial_qualificacao_qsa' => 'string',
        'status_transacao' => 'integer',
        'ind_bloqueio' => 'integer',
        'tipo_forn_cliente' => 'integer',
        'inscricao_municipal' => 'string',
        'created_at' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];


}
