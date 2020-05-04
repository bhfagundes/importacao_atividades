<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class CodigoReceita
 * @package App\Models
 * @version February 21, 2020, 7:16 pm UTC
 *
 * @property \App\Models\Cidade idMunicipio
 * @property \Illuminate\Database\Eloquent\Collection atividades
 * @property integer codigo_receita
 * @property string descricao_receita
 * @property integer id_tipo_obrigacao
 * @property integer id_estado
 * @property integer id_municipio
 */
class CodigoReceita extends Model
{

    public $table = 'codigo_receita';
    
    public $timestamps = false;

    protected $connection = 'platform';


    public $fillable = [
        'codigo_receita',
        'descricao_receita',
        'id_tipo_obrigacao',
        'id_estado',
        'id_municipio'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_codigo_receita' => 'integer',
        'codigo_receita' => 'integer',
        'descricao_receita' => 'string',
        'id_tipo_obrigacao' => 'integer',
        'id_estado' => 'integer',
        'id_municipio' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'codigo_receita' => 'required',
        'id_tipo_obrigacao' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idMunicipio()
    {
        return $this->belongsTo(\App\Models\Cidade::class, 'id_municipio');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function atividades()
    {
        return $this->hasMany(\App\Models\Atividade::class, 'id_codigo_receita');
    }
}
