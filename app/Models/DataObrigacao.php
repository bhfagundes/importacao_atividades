<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class DataObrigacao
 * @package App\Models
 * @version February 21, 2020, 7:25 pm UTC
 *
 * @property \App\Models\CodigoReceitum idCodigoReceita
 * @property \App\Models\Ato idAto
 * @property integer id_obrigacao
 * @property integer id_periodo_obrigacao
 * @property string data_vencimento
 * @property integer qtde_dias_vencimento
 * @property integer mes_vencimento
 * @property integer regra_dia_nao_util
 * @property integer tipo_dia
 * @property integer dia_vencimento
 * @property integer id_tipo_obrigacao
 * @property integer id_codigo_receita
 * @property integer ult_dia_mes
 * @property integer id_ato
 * @property integer cod_aux_ato
 */
class DataObrigacao extends Model
{

    public $table = 'data_obrigacao';
    
    public $timestamps = false;

    protected $connection = 'platform';


    public $fillable = [
        'id_obrigacao',
        'id_periodo_obrigacao',
        'data_vencimento',
        'qtde_dias_vencimento',
        'mes_vencimento',
        'regra_dia_nao_util',
        'tipo_dia',
        'dia_vencimento',
        'id_tipo_obrigacao',
        'id_codigo_receita',
        'ult_dia_mes',
        'id_ato',
        'cod_aux_ato'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_data_obrigacao' => 'integer',
        'id_obrigacao' => 'integer',
        'id_periodo_obrigacao' => 'integer',
        'data_vencimento' => 'date',
        'qtde_dias_vencimento' => 'integer',
        'mes_vencimento' => 'integer',
        'regra_dia_nao_util' => 'integer',
        'tipo_dia' => 'integer',
        'dia_vencimento' => 'integer',
        'id_tipo_obrigacao' => 'integer',
        'id_codigo_receita' => 'integer',
        'ult_dia_mes' => 'integer',
        'id_ato' => 'integer',
        'cod_aux_ato' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_obrigacao' => 'required',
        'id_periodo_obrigacao' => 'required',
        'id_tipo_obrigacao' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idCodigoReceita()
    {
        return $this->belongsTo(\App\Models\CodigoReceitum::class, 'id_codigo_receita');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idAto()
    {
        return $this->belongsTo(\App\Models\Ato::class, 'id_ato');
    }
}
