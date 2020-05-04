<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class StatusAtividadeApi
 * @package App\Models
 * @version February 21, 2020, 7:58 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection atividades
 * @property \Illuminate\Database\Eloquent\Collection dataAtividades
 * @property string descricao_status
 */
class StatusAtividadeApi extends Model
{

    public $table = 'status_atividade_api';
    
    public $timestamps = false;




    public $fillable = [
        'descricao_status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_status_atividade_api' => 'integer',
        'descricao_status' => 'string'
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
    public function atividades()
    {
        return $this->hasMany(\App\Models\Atividade::class, 'id_status_atividade_api');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function dataAtividades()
    {
        return $this->hasMany(\App\Models\DataAtividade::class, 'id_status_atividade_api');
    }
}
