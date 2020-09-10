<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class PerfilContratacao
 * @package App\Models
 * @version September 4, 2020, 1:18 pm UTC
 *
 * @property string $codigo
 * @property string $descricao
 */
class PerfilContratacao extends Model
{

    public $table = 'perfil_contratacao';
    
    public $timestamps = false;


    public $connection = "mysql";

    public $fillable = [
        'codigo',
        'descricao'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_perfil_contratacao' => 'integer',
        'codigo' => 'string',
        'descricao' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
