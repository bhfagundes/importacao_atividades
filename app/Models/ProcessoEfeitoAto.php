<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class ProcessoEfeitoAto
 * @package App\Models
 * @version February 21, 2020, 7:55 pm UTC
 *
 * @property \App\Models\EfeitoAto idEfeitoAto
 * @property integer id_processo
 * @property integer id_efeito_ato
 */
class ProcessoEfeitoAto extends Model
{

    public $table = 'processos_efeito_ato';
    
    public $timestamps = false;




    public $fillable = [
        'id_processo',
        'id_efeito_ato'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_processo' => 'integer',
        'id_efeito_ato' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_processo' => 'required',
        'id_efeito_ato' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idEfeitoAto()
    {
        return $this->belongsTo(\App\Models\EfeitoAto::class, 'id_efeito_ato');
    }
}
