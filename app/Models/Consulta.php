<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Consulta
 * @package App\Models
 * @version February 21, 2020, 7:17 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection categoriaConsulta
 * @property \Illuminate\Database\Eloquent\Collection consultaInputs
 * @property string nome
 * @property string descricao
 * @property string url
 */
class Consulta extends Model
{

    public $table = 'consulta';
    
    public $timestamps = false;




    public $fillable = [
        'nome',
        'descricao',
        'url'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nome' => 'string',
        'descricao' => 'string',
        'url' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function categoriaConsulta()
    {
        return $this->hasMany(\App\Models\CategoriaConsultum::class, 'id_consulta');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function consultaInputs()
    {
        return $this->hasMany(\App\Models\ConsultaInput::class, 'id_consulta');
    }
}
