<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class CicloObrigacao
 * @package App\Models
 * @version February 21, 2020, 7:14 pm UTC
 *
 * @property string ciclo
 */
class CicloObrigacao extends Model
{

    public $table = 'ciclo_obrigacao';
    
    public $timestamps = false;




    public $fillable = [
        'ciclo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_ciclo_obrigacao' => 'integer',
        'ciclo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ciclo' => 'required'
    ];

    
}
