<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class CategoriaGeral
 * @package App\Models
 * @version February 21, 2020, 7:13 pm UTC
 *
 * @property string nome
 * @property integer id_principal
 */
class CategoriaGeral extends Model
{

    public $table = 'categoria_geral';
    
    public $timestamps = false;




    public $fillable = [
        'nome',
        'id_principal'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nome' => 'string',
        'id_principal' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nome' => 'required',
        'id_principal' => 'required'
    ];

    
}
