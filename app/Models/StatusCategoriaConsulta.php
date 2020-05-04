<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class StatusCategoriaConsulta
 * @package App\Models
 * @version February 21, 2020, 7:59 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection categoriaConsulta
 * @property string nome
 * @property string class
 */
class StatusCategoriaConsulta extends Model
{

    public $table = 'status_categoria_consulta';
    
    public $timestamps = false;




    public $fillable = [
        'nome',
        'class'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nome' => 'string',
        'class' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nome' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function categoriaConsulta()
    {
        return $this->hasMany(\App\Models\CategoriaConsultum::class, 'id_status');
    }
}
