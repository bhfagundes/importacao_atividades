<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Servico
 * @package App\Models
 * @version September 8, 2020, 1:56 pm UTC
 *
 * @property \App\Models\Cidade $idCidade
 * @property \App\Models\ClasseServico $idClasseServico
 * @property \App\Models\Lc116 $idLc116
 * @property \App\Models\Lc116 $idLc116Systax
 * @property \App\Models\MaoObraServico $idMaoObraServico
 * @property \App\Models\SubclasseServico $idSubclasseServico
 * @property integer $id_status_servico
 * @property string $ativo
 * @property integer $id_mao_obra_servico
 * @property integer $id_classe_servico
 * @property integer $id_subclasse_servico
 * @property string $flag_credito_distribuidora
 * @property string $flag_credito_prestadora
 * @property integer $id_lc_116
 * @property string $flag_entrada_saida
 * @property integer $id_cidade
 * @property integer $id_lc_116_systax
 * @property string|\Carbon\Carbon $created_at
 * @property string|\Carbon\Carbon $updated_at
 * @property integer $id_usuario
 * @property string $duvida_tecnica
 * @property string $duvida_tecncia
 * @property integer $id_lc_116_definitivo
 * @property string $retorno_duvida_tecnica
 * @property integer $id_servico_rfb
 * @property string $aliquota_ir
 * @property string $aliquota_inss
 * @property string $aliquota_pis
 * @property string $aliquota_cofins
 * @property string $aliquota_csll
 * @property string $aliquota_cprb
 * @property string $percentual_reducao_inss
 * @property string $indicador_pis
 * @property string $indicador_cofins
 * @property string $indicador_iss
 * @property string $alquota_iss
 * @property string $codigo_servico_municipio
 */
class Servico extends Model
{

    public $table = 'servico';
    
    public $timestamps = false;


    public $connection = "mysql";

    public $fillable = [
        'id_status_servico',
        'ativo',
        'id_mao_obra_servico',
        'id_classe_servico',
        'id_subclasse_servico',
        'flag_credito_distribuidora',
        'flag_credito_prestadora',
        'id_lc_116',
        'flag_entrada_saida',
        'id_cidade',
        'id_lc_116_systax',
        'created_at',
        'updated_at',
        'id_usuario',
        'duvida_tecnica',
        'duvida_tecncia',
        'id_lc_116_definitivo',
        'retorno_duvida_tecnica',
        'id_servico_rfb',
        'aliquota_ir',
        'aliquota_inss',
        'aliquota_pis',
        'aliquota_cofins',
        'aliquota_csll',
        'aliquota_cprb',
        'percentual_reducao_inss',
        'indicador_pis',
        'indicador_cofins',
        'indicador_iss',
        'alquota_iss',
        'codigo_servico_municipio'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_servico' => 'integer',
        'id_status_servico' => 'integer',
        'ativo' => 'string',
        'id_mao_obra_servico' => 'integer',
        'id_classe_servico' => 'integer',
        'id_subclasse_servico' => 'integer',
        'flag_credito_distribuidora' => 'string',
        'flag_credito_prestadora' => 'string',
        'id_lc_116' => 'integer',
        'flag_entrada_saida' => 'string',
        'id_cidade' => 'integer',
        'id_lc_116_systax' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'id_usuario' => 'integer',
        'duvida_tecnica' => 'string',
        'duvida_tecncia' => 'string',
        'id_lc_116_definitivo' => 'integer',
        'retorno_duvida_tecnica' => 'string',
        'id_servico_rfb' => 'integer',
        'aliquota_ir' => 'string',
        'aliquota_inss' => 'string',
        'aliquota_pis' => 'string',
        'aliquota_cofins' => 'string',
        'aliquota_csll' => 'string',
        'aliquota_cprb' => 'string',
        'percentual_reducao_inss' => 'string',
        'indicador_pis' => 'string',
        'indicador_cofins' => 'string',
        'indicador_iss' => 'string',
        'alquota_iss' => 'string',
        'codigo_servico_municipio' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_status_servico' => 'required',
        'id_subclasse_servico' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idCidade()
    {
        return $this->belongsTo(\App\Models\Cidade::class, 'id_cidade');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idClasseServico()
    {
        return $this->belongsTo(\App\Models\ClasseServico::class, 'id_classe_servico');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idLc116()
    {
        return $this->belongsTo(\App\Models\Lc116::class, 'id_lc_116');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idLc116Systax()
    {
        return $this->belongsTo(\App\Models\Lc116::class, 'id_lc_116_systax');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idMaoObraServico()
    {
        return $this->belongsTo(\App\Models\MaoObraServico::class, 'id_mao_obra_servico');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idSubclasseServico()
    {
        return $this->belongsTo(\App\Models\SubclasseServico::class, 'id_subclasse_servico');
    }
}
