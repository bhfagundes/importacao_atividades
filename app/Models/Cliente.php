<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Cliente
 * @package App\Models
 * @version February 21, 2020, 7:15 pm UTC
 *
 * @property integer id_principal
 * @property integer id_empresa
 */
class Cliente extends Model
{

    public $table = 'cliente';
    
    public $timestamps = false;




    public $fillable = [
        'id_principal',
        'id_empresa'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_principal' => 'integer',
        'id_empresa' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_principal' => 'required',
        'id_empresa' => 'required'
    ];

    
}
