<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class ObrigacaoReceita
 * @package App\Models
 * @version February 21, 2020, 7:47 pm UTC
 *
 * @property \App\Models\CodigoReceitum idCodigoReceita
 * @property \App\Models\Obrigacao idObrigacao
 * @property integer id_obrigacao
 * @property integer id_codigo_receita
 */
class ObrigacaoReceita extends Model
{

    public $table = 'obrigacao_receita';
    
    public $timestamps = false;




    public $fillable = [
        'id_obrigacao',
        'id_codigo_receita'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_obrigacao' => 'integer',
        'id_codigo_receita' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_obrigacao' => 'required',
        'id_codigo_receita' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idCodigoReceita()
    {
        return $this->belongsTo(\App\Models\CodigoReceitum::class, 'id_codigo_receita');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idObrigacao()
    {
        return $this->belongsTo(\App\Models\Obrigacao::class, 'id_obrigacao');
    }
}
