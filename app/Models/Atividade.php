<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Atividade
 * @package App\Models
 * @version February 21, 2020, 7:08 pm UTC
 *
 * @property \App\Models\CodigoReceitum idCodigoReceita
 * @property integer id_tipo_atividade
 * @property integer id_obrigacao
 * @property integer id_codigo_receita
 * @property integer ordem
 * @property integer is_critica
 * @property string data
 * @property integer regra_dia_util
 * @property integer usuario_responsavel
 * @property integer id_grupo_atividade
 * @property integer tipo_dia
 * @property integer quantidade_dias
 * @property integer id_status_atividade_api
 */
class Atividade extends Model
{

    public $table = 'atividade';
    
    public $timestamps = false;

    protected $connection = 'platform';


    public $fillable = [
        'id_tipo_atividade',
        'id_obrigacao',
        'id_codigo_receita',
        'ordem',
        'is_critica',
        'data',
        'regra_dia_util',
        'usuario_responsavel',
        'id_grupo_atividade',
        'tipo_dia',
        'quantidade_dias',
        'id_filial',
        'contagem_dia',
        'id_status_atividade_api'
    ];
    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */

     
    protected $casts = [
        'id_atividade' => 'integer',
        'id_tipo_atividade' => 'integer',
        'id_obrigacao' => 'integer',
        'id_codigo_receita' => 'integer',
        'ordem' => 'integer',
        'is_critica' => 'integer',
        'data' => 'date',
        'regra_dia_util' => 'integer',
        'usuario_responsavel' => 'integer',
        'id_grupo_atividade' => 'integer',
        'tipo_dia' => 'integer',
        'quantidade_dias' => 'integer',
        'id_filial' => 'integer',
        'contagem_dia' => 'integer',
        'id_status_atividade_api' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_tipo_atividade' => 'required',
        'id_obrigacao' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idCodigoReceita()
    {
        return $this->belongsTo(\App\Models\CodigoReceitum::class, 'id_codigo_receita');
    }
}
