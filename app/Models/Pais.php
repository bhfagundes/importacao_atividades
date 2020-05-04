<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Pais
 * @package App\Models
 * @version February 21, 2020, 7:49 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection estados
 * @property \Illuminate\Database\Eloquent\Collection feriados
 * @property string nome
 * @property string sigla
 */
class Pais extends Model
{

    public $table = 'pais';
    
    public $timestamps = false;




    public $fillable = [
        'nome',
        'sigla'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nome' => 'string',
        'sigla' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nome' => 'required',
        'sigla' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function estados()
    {
        return $this->hasMany(\App\Models\Estado::class, 'id_pais');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function feriados()
    {
        return $this->hasMany(\App\Models\Feriado::class, 'id_pais');
    }
}
