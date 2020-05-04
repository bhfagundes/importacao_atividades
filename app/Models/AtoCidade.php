<?php

namespace App\Models;

use Eloquent as Model;


/**
 * Class AtoCidade
 * @package App\Models
 * @version February 21, 2020, 6:16 pm UTC
 *
 * @property integer id_ato
 * @property integer id_cidade
 */
class AtoCidade extends Model
{
   
    public $table = 'ato_cidades';
    protected $connection = 'platform'; 



    public $fillable = [
        'id_ato',
        'id_cidade'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_ato' => 'integer',
        'id_cidade' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_ato' => 'required',
        'id_cidade' => 'required'
    ];

    
}
