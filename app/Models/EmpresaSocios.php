<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class EmpresaSocios
 * @package App\Models
 * @version February 21, 2020, 7:34 pm UTC
 *
 * @property integer id_empresa
 * @property string nome
 * @property string cpf
 * @property integer percentage
 */
class EmpresaSocios extends Model
{

    public $table = 'empresa_socios';
    
    public $timestamps = false;




    public $fillable = [
        'id_empresa',
        'nome',
        'cpf',
        'percentage'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_empresa' => 'integer',
        'nome' => 'string',
        'cpf' => 'string',
        'percentage' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
