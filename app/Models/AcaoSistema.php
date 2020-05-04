<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class AcaoSistema
 * @package App\Models
 * @version February 21, 2020, 7:04 pm UTC
 *
 * @property string acao_sistema
 */
class AcaoSistema extends Model
{

    public $table = 'acao_sistema';
    
    public $timestamps = false;




    public $fillable = [
        'acao_sistema'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_acao_sistema' => 'integer',
        'acao_sistema' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'acao_sistema' => 'required'
    ];

    
}
