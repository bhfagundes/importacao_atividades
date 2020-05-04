<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Banco
 * @package App\Models
 * @version February 21, 2020, 7:12 pm UTC
 *
 * @property string codigo
 * @property string nome
 * @property string site
 */
class Banco extends Model
{

    public $table = 'banco';
    
    public $timestamps = false;




    public $fillable = [
        'codigo',
        'nome',
        'site'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'codigo' => 'string',
        'nome' => 'string',
        'site' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'codigo' => 'required',
        'nome' => 'required'
    ];

    
}
