<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class EmpresaCnae
 * @package App\Models
 * @version February 21, 2020, 7:32 pm UTC
 *
 * @property string numero
 * @property string descricao
 * @property integer id_tipo
 */
class EmpresaCnae extends Model
{

    public $table = 'empresa_cnae';
    
    public $timestamps = false;




    public $fillable = [
        'numero',
        'descricao',
        'id_tipo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'numero' => 'string',
        'descricao' => 'string',
        'id_tipo' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'numero' => 'required',
        'id_tipo' => 'required'
    ];

    
}
