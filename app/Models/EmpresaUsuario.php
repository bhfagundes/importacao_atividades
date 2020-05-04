<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class EmpresaUsuario
 * @package App\Models
 * @version February 21, 2020, 7:34 pm UTC
 *
 * @property integer id_usuario
 * @property integer id_empresa
 * @property integer id_tipo
 */
class EmpresaUsuario extends Model
{

    public $table = 'empresa_usuarios';
    
    public $timestamps = false;




    public $fillable = [
        'id_usuario',
        'id_empresa',
        'id_tipo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_usuario' => 'integer',
        'id_empresa' => 'integer',
        'id_tipo' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_usuario' => 'required',
        'id_empresa' => 'required',
        'id_tipo' => 'required'
    ];

    
}
