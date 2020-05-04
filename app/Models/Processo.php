<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Processo
 * @package App\Models
 * @version February 21, 2020, 7:51 pm UTC
 *
 * @property integer id_processo
 * @property integer id_efeito_ato
 */
class Processo extends Model
{

    public $table = 'processo';
    
    public $timestamps = false;




    public $fillable = [
        'id_processo',
        'id_efeito_ato'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_processo' => 'integer',
        'id_efeito_ato' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_processo' => 'required',
        'id_efeito_ato' => 'required'
    ];

    
}
