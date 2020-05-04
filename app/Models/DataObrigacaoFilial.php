<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class DataObrigacaoFilial
 * @package App\Models
 * @version March 5, 2020, 11:15 am UTC
 *
 * @property \App\Models\DataObrigacao idDataObrigacao
 * @property \App\Models\Filial idFilial
 * @property integer id_data_obrigacao
 * @property integer id_filial
 */
class DataObrigacaoFilial extends Model
{

    public $table = 'data_obrigacao_filial';
    
    public $timestamps = false;




    public $fillable = [
        'id_data_obrigacao',
        'id_filial'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_data_obrigacao' => 'integer',
        'id_filial' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_data_obrigacao' => 'required',
        'id_filial' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function getDataObrigacao()
    {
        return $this->belongsTo(\App\Models\DataObrigacao::class, 'id_data_obrigacao','id_data_obrigacao');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function getFilial()
    {
        return $this->belongsTo(\App\Models\Filial::class, 'id_filial');
    }
}
