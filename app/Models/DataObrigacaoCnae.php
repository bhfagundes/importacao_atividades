<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class DataObrigacaoCnae
 * @package App\Models
 * @version February 21, 2020, 7:25 pm UTC
 *
 * @property \App\Models\Cnae idCnae
 * @property \App\Models\DataObrigacao idDataObrigacao
 * @property integer id_data_obrigacao
 * @property integer id_cnae
 */
class DataObrigacaoCnae extends Model
{

    public $table = 'data_obrigacao_cnae';
    
    public $timestamps = false;




    public $fillable = [
        'id_data_obrigacao',
        'id_cnae'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_data_obrigacao' => 'integer',
        'id_cnae' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_data_obrigacao' => 'required',
        'id_cnae' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idCnae()
    {
        return $this->belongsTo(\App\Models\Cnae::class, 'id_cnae');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idDataObrigacao()
    {
        return $this->belongsTo(\App\Models\DataObrigacao::class, 'id_data_obrigacao');
    }
}
