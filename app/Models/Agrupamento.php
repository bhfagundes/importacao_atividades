<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Agrupamento
 * @package App\Models
 * @version February 21, 2020, 7:05 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection agrupamentoDocumentos
 * @property string nome
 */
class Agrupamento extends Model
{

    public $table = 'agrupamento';
    
    public $timestamps = false;




    public $fillable = [
        'nome'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nome' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function agrupamentoDocumentos()
    {
        return $this->hasMany(\App\Models\AgrupamentoDocumento::class, 'id_agrupamento');
    }
}
