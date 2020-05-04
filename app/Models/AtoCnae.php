<?php

namespace App\Models;

use Eloquent as Model;


/**
 * Class AtoCnae
 * @package App\Models
 * @version February 21, 2020, 6:17 pm UTC
 *
 * @property integer id_ato
 * @property integer id_cnae
 */
class AtoCnae extends Model
{
    protected $connection = 'platform'; 
    public $table = 'ato_cnae';
   



    public $fillable = [
        'id_ato',
        'id_cnae'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_ato' => 'integer',
        'id_cnae' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_ato' => 'required',
        'id_cnae' => 'required'
    ];

    
}
