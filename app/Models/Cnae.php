<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Cnae
 * @package App\Models
 * @version February 21, 2020, 7:16 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection atos
 * @property string secao
 * @property integer divisao
 * @property string grupo
 * @property string classe
 * @property string excecao
 * @property string denominacao
 */
class Cnae extends Model
{

    public $table = 'cnae';
    
    public $timestamps = false;




    public $fillable = [
        'secao',
        'divisao',
        'grupo',
        'classe',
        'excecao',
        'denominacao'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_cnae' => 'integer',
        'secao' => 'string',
        'divisao' => 'integer',
        'grupo' => 'string',
        'classe' => 'string',
        'excecao' => 'string',
        'denominacao' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function atos()
    {
        return $this->belongsToMany(\App\Models\Ato::class, 'ato_cnae');
    }
}
