<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class DataAtividade
 * @package App\Models
 * @version February 21, 2020, 7:24 pm UTC
 *
 * @property \App\Models\Atividade idAtividade
 * @property integer id_status_atividade
 * @property integer id_atividade
 * @property string data
 * @property integer concluida
 * @property integer id_status_atividade_api
 */
class DataAtividade extends Model
{

    public $table = 'data_atividade';
    
    public $timestamps = false;


    public $connection = 'platform';

    public $fillable = [
        'id_status_atividade',
        'id_atividade',
        'data',
        'concluida',
        'id_status_atividade_api'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_atualizacao_atividade' => 'integer',
        'id_status_atividade' => 'integer',
        'id_atividade' => 'integer',
        'data' => 'date',
        'concluida' => 'integer',
        'id_status_atividade_api' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'data' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idAtividade()
    {
        return $this->belongsTo(\App\Models\Atividade::class, 'id_atividade');
    }
}
