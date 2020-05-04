<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Obrigatoriedade
 * @package App\Models
 * @version February 21, 2020, 7:47 pm UTC
 *
 * @property string nome
 * @property string class
 */
class Obrigatoriedade extends Model
{

    public $table = 'obrigatoriedade';
    
    public $timestamps = false;




    public $fillable = [
        'nome',
        'class'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nome' => 'string',
        'class' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
