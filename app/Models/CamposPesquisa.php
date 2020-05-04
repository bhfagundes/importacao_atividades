<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class CamposPesquisa
 * @package App\Models
 * @version February 21, 2020, 7:13 pm UTC
 *
 * @property string campo
 * @property string label
 * @property string pagina
 */
class CamposPesquisa extends Model
{

    public $table = 'campos_pesquisa';
    
    public $timestamps = false;




    public $fillable = [
        'campo',
        'label',
        'pagina'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_campos' => 'integer',
        'campo' => 'string',
        'label' => 'string',
        'pagina' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'campo' => 'required',
        'label' => 'required',
        'pagina' => 'required'
    ];

    
}
