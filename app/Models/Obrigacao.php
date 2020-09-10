<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Obrigacao
 * @package App\Models
 * @version February 21, 2020, 7:46 pm UTC
 *
 * @property \App\Models\CicloObrigacao idCicloObrigacao
 * @property \App\Models\DocumentoObrigacao idDocumentoObrigacao
 * @property \App\Models\Ato idAto
 * @property \App\Models\CodigoReceitum idCodReceita
 * @property \Illuminate\Database\Eloquent\Collection atividades
 * @property \Illuminate\Database\Eloquent\Collection dataObrigacaos
 * @property \Illuminate\Database\Eloquent\Collection grupoAtividades
 * @property integer id_tipo_processo
 * @property integer usuario
 * @property integer id_origem_obrigacao
 * @property integer id_tipo_obrigacao
 * @property integer id_ciclo_obrigacao
 * @property integer id_documento_obrigacao
 * @property string especificidade
 * @property string link_obrigacao
 * @property string data_publicacao
 * @property string data_vigencia_inicio
 * @property string data_vigencia_fim
 * @property boolean exibe_calendario
 * @property integer id_ato
 * @property integer cod_aux_ato
 * @property integer id_cod_receita
 * @property integer idx_ordem
 * @property integer codigo_receita
 */
class Obrigacao extends Model
{

    public $table = 'obrigacao';

    public $timestamps = false;
    protected $connection = 'platform';



    public $fillable = [
        'id_tipo_processo',
        'usuario',
        'id_origem_obrigacao',
        'id_tipo_obrigacao',
        'id_ciclo_obrigacao',
        'id_documento_obrigacao',
        'especificidade',
        'link_obrigacao',
        'data_publicacao',
        'data_vigencia_inicio',
        'data_vigencia_fim',
        'exibe_calendario',
        'id_ato',
        'cod_aux_ato',
        'id_cod_receita',
        'idx_ordem',
        'codigo_receita',
        'id_tabela'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_obrigacao' => 'integer',
        'id_tipo_processo' => 'integer',
        'usuario' => 'integer',
        'id_origem_obrigacao' => 'integer',
        'id_tipo_obrigacao' => 'integer',
        'id_ciclo_obrigacao' => 'integer',
        'id_documento_obrigacao' => 'integer',
        'especificidade' => 'string',
        'link_obrigacao' => 'string',
        'data_publicacao' => 'date',
        'data_vigencia_inicio' => 'date',
        'data_vigencia_fim' => 'date',
        'exibe_calendario' => 'boolean',
        'id_ato' => 'integer',
        'cod_aux_ato' => 'integer',
        'id_cod_receita' => 'integer',
        'idx_ordem' => 'integer',
        'codigo_receita' => 'integer',
        'id_tabela'=>'integer'
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
    public function idCicloObrigacao()
    {
        return $this->belongsTo(\App\Models\CicloObrigacao::class, 'id_ciclo_obrigacao');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idDocumentoObrigacao()
    {
        return $this->belongsTo(\App\Models\DocumentoObrigacao::class, 'id_documento_obrigacao');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idAto()
    {
        return $this->belongsTo(\App\Models\Ato::class, 'id_ato');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idCodReceita()
    {
        return $this->belongsTo(\App\Models\CodigoReceitum::class, 'id_cod_receita');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function atividades()
    {
        return $this->hasMany(\App\Models\Atividade::class, 'id_obrigacao');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function dataObrigacaos()
    {
        return $this->hasMany(\App\Models\DataObrigacao::class, 'id_obrigacao');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function grupoAtividades()
    {
        return $this->hasMany(\App\Models\GrupoAtividade::class, 'id_obrigacao');
    }
}
