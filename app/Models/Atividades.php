<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Atividades
 * @package App\Models
 * @version May 4, 2020, 11:21 pm UTC
 *
 * @property \App\Models\Obrigacao $idObrigacao
 * @property \App\Models\StatusAtividadeApi $idStatusAtividadeApi
 * @property \App\Models\TipoAtividade $idTipoAtividade
 * @property \Illuminate\Database\Eloquent\Collection $evidencia
 * @property \Illuminate\Database\Eloquent\Collection $dataAtividades
 * @property integer $id_tipo_atividade
 * @property integer $id_obrigacao
 * @property integer $id_codigo_receita
 * @property integer $ordem
 * @property integer $is_critica
 * @property string $data
 * @property integer $regra_dia_util
 * @property integer $usuario_responsavel
 * @property integer $tipo_dia
 * @property integer $quantidade_dias
 * @property integer $id_status_atividade_api
 * @property boolean $mandatoria
 * @property boolean $conclusao_auto
 * @property string|\Carbon\Carbon $created_at
 * @property string|\Carbon\Carbon $updated_at
 * @property integer $id_filial
 * @property integer $contagem_dia
 */
class Atividades extends Model
{

    public $table = 'atividade';
    
    public $timestamps = false;

    protected $connection = 'platform';

    protected $primaryKey= 'id_atividade';

    public $fillable = [
        'id_tipo_atividade',
        'id_obrigacao',
        'id_codigo_receita',
        'ordem',
        'is_critica',
        'data',
        'regra_dia_util',
        'usuario_responsavel',
        'tipo_dia',
        'quantidade_dias',
        'id_status_atividade_api',
        'mandatoria',
        'conclusao_auto',
        'created_at',
        'updated_at',
        'id_filial',
        'contagem_dia'
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
        'tipo_dia' => 'integer',
        'quantidade_dias' => 'integer',
        'id_status_atividade_api' => 'integer',
        'mandatoria' => 'boolean',
        'conclusao_auto' => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'id_filial' => 'integer',
        'contagem_dia' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_tipo_atividade' => 'required',
        'id_obrigacao' => 'required',
        'mandatoria' => 'required',
        'conclusao_auto' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idObrigacao()
    {
        return $this->belongsTo(\App\Models\Obrigacao::class, 'id_obrigacao');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idStatusAtividadeApi()
    {
        return $this->belongsTo(\App\Models\StatusAtividadeApi::class, 'id_status_atividade_api');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idTipoAtividade()
    {
        return $this->belongsTo(\App\Models\TipoAtividade::class, 'id_tipo_atividade');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function evidencia()
    {
        return $this->belongsToMany(\App\Models\Evidencium::class, 'atividade_evidencia');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function dataAtividades()
    {
        return $this->hasMany(\App\Models\DataAtividade::class, 'id_atividade');
    }
}
