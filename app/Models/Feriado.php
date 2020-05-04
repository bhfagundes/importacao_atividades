<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Feriado
 * @package App\Models
 * @version February 21, 2020, 7:36 pm UTC
 *
 * @property \App\Models\Cidade idCidade
 * @property \App\Models\Estado idEstado
 * @property string nome
 * @property integer tipo
 * @property integer id_pais
 * @property integer id_estado
 * @property integer id_cidade
 */
class Feriado extends Model
{

    public $table = 'feriado';
    
    public $timestamps = false;




    public $fillable = [
        'nome',
        'tipo',
        'id_pais',
        'id_estado',
        'id_cidade'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_feriado' => 'integer',
        'nome' => 'string',
        'tipo' => 'integer',
        'id_pais' => 'integer',
        'id_estado' => 'integer',
        'id_cidade' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'tipo' => 'required',
        'id_pais' => 'required',
        'id_estado' => 'required',
        'id_cidade' => 'required'
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
    public function idEstado()
    {
        return $this->belongsTo(\App\Models\Estado::class, 'id_estado');
    }
}
