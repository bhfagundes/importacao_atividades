<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Convite
 * @package App\Models
 * @version February 21, 2020, 7:21 pm UTC
 *
 * @property string empresa
 * @property string cnpj
 * @property string nome
 * @property string email
 * @property string|\Carbon\Carbon dt_convite
 * @property string|\Carbon\Carbon dt_aprovado
 * @property string token
 * @property integer id_empresa
 * @property string ativo
 */
class Convite extends Model
{

    public $table = 'convite';
    
    public $timestamps = false;




    public $fillable = [
        'empresa',
        'cnpj',
        'nome',
        'email',
        'dt_convite',
        'dt_aprovado',
        'token',
        'id_empresa',
        'ativo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'empresa' => 'string',
        'cnpj' => 'string',
        'nome' => 'string',
        'email' => 'string',
        'dt_convite' => 'datetime',
        'dt_aprovado' => 'datetime',
        'token' => 'string',
        'id_empresa' => 'integer',
        'ativo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'empresa' => 'required',
        'cnpj' => 'required',
        'nome' => 'required',
        'email' => 'required',
        'dt_convite' => 'required',
        'token' => 'required',
        'id_empresa' => 'required',
        'ativo' => 'required'
    ];

    
}
