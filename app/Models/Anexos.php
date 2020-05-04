<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Anexos
 * @package App\Models
 * @version February 21, 2020, 7:06 pm UTC
 *
 * @property string nome
 * @property string arquivo
 * @property string extensao
 * @property string img
 * @property string dt_validade
 * @property integer id_filial
 * @property string|\Carbon\Carbon dt_cadastro
 */
class Anexos extends Model
{

    public $table = 'anexos';
    
    public $timestamps = false;




    public $fillable = [
        'nome',
        'arquivo',
        'extensao',
        'img',
        'dt_validade',
        'id_filial',
        'dt_cadastro'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nome' => 'string',
        'arquivo' => 'string',
        'extensao' => 'string',
        'img' => 'string',
        'dt_validade' => 'date',
        'id_filial' => 'integer',
        'dt_cadastro' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nome' => 'required'
    ];

    
}
