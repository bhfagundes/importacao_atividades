<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class ObrigacaoAtoProcesso
 * @package App\Models
 * @version February 21, 2020, 7:46 pm UTC
 *
 * @property \App\Models\Ato idAto
 * @property \App\Models\Obrigacao idObrigacao
 * @property integer id_ato
 * @property integer id_obrigacao
 * @property integer id_processo
 */
class ObrigacaoAtoProcesso extends Model
{

    public $table = 'obrigacao_ato_processo';
    
    public $timestamps = false;




    public $fillable = [
        'id_ato',
        'id_obrigacao',
        'id_processo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_ato' => 'integer',
        'id_obrigacao' => 'integer',
        'id_processo' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_obrigacao' => 'required',
        'id_processo' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idAto()
    {
        return $this->belongsTo(\App\Models\Ato::class, 'id_ato');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idObrigacao()
    {
        return $this->belongsTo(\App\Models\Obrigacao::class, 'id_obrigacao');
    }
}
