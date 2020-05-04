<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class DataAtividadeFilial
 * @package App\Models
 * @version March 5, 2020, 11:42 am UTC
 *
 * @property \App\Models\Filial idFilial
 * @property integer id_data_atividade
 * @property integer id_filial
 */
class DataAtividadeFilial extends Model
{

    public $table = 'data_atividade_filial';
    
    public $timestamps = false;


    protected $connection = 'platform';

    public $fillable = [
        'id_data_atividade',
        'id_filial'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_data_atividade' => 'integer',
        'id_filial' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_data_atividade' => 'required',
        'id_filial' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function getDataAtividade()
    {
        return $this->belongsTo(\App\Models\DataAtividade::class, 'id_data_atividade','id_data_atividade');
    }
    public function getFilial()
    {
        return $this->belongsTo(\App\Models\Filial::class, 'id_filial');
    }
}
