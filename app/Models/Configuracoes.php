<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Configuracoes
 * @package App\Models
 * @version February 21, 2020, 7:17 pm UTC
 *
 * @property integer id_empresa
 * @property string campo
 * @property string valor
 */
class Configuracoes extends Model
{

    public $table = 'configuracoes';
    
    public $timestamps = false;




    public $fillable = [
        'id_empresa',
        'campo',
        'valor'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_empresa' => 'integer',
        'campo' => 'string',
        'valor' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_empresa' => 'required'
    ];

    
}
