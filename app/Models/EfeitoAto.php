<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class EfeitoAto
 * @package App\Models
 * @version February 21, 2020, 7:31 pm UTC
 *
 * @property \App\Models\Ato idAto
 * @property integer id_ato
 * @property string codigo_efeito
 * @property string descricao_efeito
 * @property string data_referencia
 * @property string data_publicacao
 * @property string data_vigencia_inicio
 * @property string data_vigencia_fim
 * @property string data_atualizacao_ato
 * @property integer id_status
 * @property integer usuario
 * @property string link_acesso
 * @property integer id_impacto
 * @property string processos
 * @property string workflows
 * @property integer id_tipo_efeito
 * @property string api
 * @property string data_leitura_ato
 * @property string acao_efeito
 * @property integer id_impacto_cliente
 * @property integer ciencia
 * @property string artigo_clausula
 * @property string data_ciencia
 * @property string data_aprovacao
 */
class EfeitoAto extends Model
{

    public $table = 'efeito_ato';
    
    public $timestamps = false;




    public $fillable = [
        'id_ato',
        'codigo_efeito',
        'descricao_efeito',
        'data_referencia',
        'data_publicacao',
        'data_vigencia_inicio',
        'data_vigencia_fim',
        'data_atualizacao_ato',
        'id_status',
        'usuario',
        'link_acesso',
        'id_impacto',
        'processos',
        'workflows',
        'id_tipo_efeito',
        'api',
        'data_leitura_ato',
        'acao_efeito',
        'id_impacto_cliente',
        'ciencia',
        'artigo_clausula',
        'data_ciencia',
        'data_aprovacao'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_efeito_ato' => 'integer',
        'id_ato' => 'integer',
        'codigo_efeito' => 'string',
        'descricao_efeito' => 'string',
        'data_referencia' => 'date',
        'data_publicacao' => 'date',
        'data_vigencia_inicio' => 'date',
        'data_vigencia_fim' => 'date',
        'data_atualizacao_ato' => 'date',
        'id_status' => 'integer',
        'usuario' => 'integer',
        'link_acesso' => 'string',
        'id_impacto' => 'integer',
        'processos' => 'string',
        'workflows' => 'string',
        'id_tipo_efeito' => 'integer',
        'api' => 'string',
        'data_leitura_ato' => 'date',
        'acao_efeito' => 'string',
        'id_impacto_cliente' => 'integer',
        'ciencia' => 'integer',
        'artigo_clausula' => 'string',
        'data_ciencia' => 'date',
        'data_aprovacao' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_ato' => 'required',
        'data_leitura_ato' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idAto()
    {
        return $this->belongsTo(\App\Models\Ato::class, 'id_ato');
    }
}
