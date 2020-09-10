<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class ContratacaoServico
 * @package App\Models
 * @version September 4, 2020, 1:11 pm UTC
 *
 * @property \App\Models\Cidade $idCidadeDestino
 * @property \App\Models\Cidade $idCidadeFatoGerador
 * @property \App\Models\Cidade $idCidadeOrigem
 * @property \App\Models\Servico $idServico
 * @property integer $id_servico
 * @property string $cnae_origem
 * @property string $cnae_destino
 * @property integer $id_cidade_origem
 * @property integer $id_estado_origem
 * @property integer $id_cidade_destino
 * @property integer $id_estado_destino
 * @property integer $id_cidade_fato_gerador
 * @property string $generico_1
 * @property string $chave_banco
 * @property integer $id_item_nota
 * @property string $valor_servico
 * @property string $valor_desconto_incondicional
 * @property string $valor_desconto_condicional
 * @property string $valor_deducoes
 * @property string $generico_2
 * @property string $valor_abatido_inss
 * @property integer $tipo_nota
 * @property string|\Carbon\Carbon $ timestamp_recepcao_sigvc
 * @property string|\Carbon\Carbon $timestamp_devolucao_systax
 * @property integer $svc
 * @property integer $id_perfil_remetente
 * @property integer $id_perfil_destinatario
 * @property integer $id_filial
 * @property integer $id_fornecedor
 * @property integer $natureza_operacao
 */
class ContratacaoServico extends Model
{

    public $table = 'contratacao_servico';
    
    public $timestamps = false;


    public $connection = "mysql";

    public $fillable = [
        'id_servico',
        'cnae_origem',
        'cnae_destino',
        'id_cidade_origem',
        'id_estado_origem',
        'id_cidade_destino',
        'id_estado_destino',
        'id_cidade_fato_gerador',
        'generico_1',
        'chave_banco',
        'id_item_nota',
        'valor_servico',
        'valor_desconto_incondicional',
        'valor_desconto_condicional',
        'valor_deducoes',
        'generico_2',
        'valor_abatido_inss',
        'tipo_nota',
        ' timestamp_recepcao_sigvc',
        'timestamp_devolucao_systax',
        'svc',
        'id_perfil_remetente',
        'id_perfil_destinatario',
        'id_filial',
        'id_fornecedor',
        'natureza_operacao'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_contratacao_servico' => 'integer',
        'id_servico' => 'integer',
        'cnae_origem' => 'string',
        'cnae_destino' => 'string',
        'id_cidade_origem' => 'integer',
        'id_estado_origem' => 'integer',
        'id_cidade_destino' => 'integer',
        'id_estado_destino' => 'integer',
        'id_cidade_fato_gerador' => 'integer',
        'generico_1' => 'string',
        'chave_banco' => 'string',
        'id_item_nota' => 'integer',
        'valor_servico' => 'string',
        'valor_desconto_incondicional' => 'string',
        'valor_desconto_condicional' => 'string',
        'valor_deducoes' => 'string',
        'generico_2' => 'string',
        'valor_abatido_inss' => 'string',
        'tipo_nota' => 'integer',
        ' timestamp_recepcao_sigvc' => 'datetime',
        'timestamp_devolucao_systax' => 'datetime',
        'svc' => 'integer',
        'id_perfil_remetente' => 'integer',
        'id_perfil_destinatario' => 'integer',
        'id_filial' => 'integer',
        'id_fornecedor' => 'integer',
        'natureza_operacao' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idCidadeDestino()
    {
        return $this->belongsTo(\App\Models\Cidade::class, 'id_cidade_destino');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idCidadeFatoGerador()
    {
        return $this->belongsTo(\App\Models\Cidade::class, 'id_cidade_fato_gerador');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idCidadeOrigem()
    {
        return $this->belongsTo(\App\Models\Cidade::class, 'id_cidade_origem');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idServico()
    {
        return $this->belongsTo(\App\Models\Servico::class, 'id_servico');
    }
}
