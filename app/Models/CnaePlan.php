<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class CnaePlan
 * @package App\Models
 * @version February 21, 2020, 7:16 pm UTC
 *
 * @property string Secao
 * @property string Divisao
 * @property string Grupo
 * @property string Classe
 * @property string Excecao
 * @property string Denominacao
 */
class CnaePlan extends Model
{

    public $table = 'cnae_plan';
    
    public $timestamps = false;




    public $fillable = [
        'Secao',
        'Divisao',
        'Grupo',
        'Classe',
        'Excecao',
        'Denominacao'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'Secao' => 'string',
        'Divisao' => 'string',
        'Grupo' => 'string',
        'Classe' => 'string',
        'Excecao' => 'string',
        'Denominacao' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
