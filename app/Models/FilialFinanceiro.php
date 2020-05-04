<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class FilialFinanceiro
 * @package App\Models
 * @version February 21, 2020, 7:39 pm UTC
 *
 * @property \App\Models\Banco idBanco
 * @property \App\Models\Filial idFilial
 * @property integer id_filial
 * @property integer id_banco
 * @property string agencia
 * @property string cc
 */
class FilialFinanceiro extends Model
{

    public $table = 'filial_financeiro';
    
    public $timestamps = false;




    public $fillable = [
        'id_filial',
        'id_banco',
        'agencia',
        'cc'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_filial' => 'integer',
        'id_banco' => 'integer',
        'agencia' => 'string',
        'cc' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idBanco()
    {
        return $this->belongsTo(\App\Models\Banco::class, 'id_banco');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idFilial()
    {
        return $this->belongsTo(\App\Models\Filial::class, 'id_filial');
    }
}
