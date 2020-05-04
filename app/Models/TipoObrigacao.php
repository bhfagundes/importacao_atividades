<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class TipoObrigacao
 * @package App\Models
 * @version February 21, 2020, 8:03 pm UTC
 *
 * @property \App\Models\AreaTematica idAreaTematica
 * @property \Illuminate\Database\Eloquent\Collection codigoReceita
 * @property \Illuminate\Database\Eloquent\Collection dataObrigacaos
 * @property \Illuminate\Database\Eloquent\Collection obrigacaos
 * @property string descricao_tipo_obrigacao
 * @property integer id_area_tematica
 * @property string titulo_tipo_obrigacao
 */
class TipoObrigacao extends Model
{

    public $table = 'tipo_obrigacao';
    protected $connection = 'platform';  
    public $timestamps = false;




    public $fillable = [
        'descricao_tipo_obrigacao',
        'id_area_tematica',
        'titulo_tipo_obrigacao'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_tipo_obrigacao' => 'integer',
        'descricao_tipo_obrigacao' => 'string',
        'id_area_tematica' => 'integer',
        'titulo_tipo_obrigacao' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_area_tematica' => 'required',
        'titulo_tipo_obrigacao' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idAreaTematica()
    {
        return $this->belongsTo(\App\Models\AreaTematica::class, 'id_area_tematica');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function codigoReceita()
    {
        return $this->hasMany(\App\Models\CodigoReceitum::class, 'id_tipo_obrigacao');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function dataObrigacaos()
    {
        return $this->hasMany(\App\Models\DataObrigacao::class, 'id_tipo_obrigacao');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function obrigacaos()
    {
        return $this->hasMany(\App\Models\Obrigacao::class, 'id_tipo_obrigacao');
    }
}
