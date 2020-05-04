<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class FeriadoFilial
 * @package App\Models
 * @version February 21, 2020, 7:36 pm UTC
 *
 * @property \App\Models\Feriado idFeriado
 * @property integer id_feriado
 * @property integer id_filial
 */
class FeriadoFilial extends Model
{

    public $table = 'feriado_filial';
    
    public $timestamps = false;




    public $fillable = [
        'id_feriado',
        'id_filial'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_feriado' => 'integer',
        'id_filial' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_feriado' => 'required',
        'id_filial' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idFeriado()
    {
        return $this->belongsTo(\App\Models\Feriado::class, 'id_feriado');
    }
}
