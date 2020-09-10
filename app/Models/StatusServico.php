<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class StatusServico
 * @package App\Models
 * @version August 26, 2020, 8:10 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $servicos
 * @property string $descricao
 */
class StatusServico extends Model
{

    public $table = 'status_servico';
    
    public $timestamps = false;


    public $connection = "mysql";

    public $fillable = [
        'descricao'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_status_servico' => 'integer',
        'descricao' => 'string'
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
    public function servicos()
    {
        return $this->hasMany(\App\Models\Servico::class, 'id_status_servico');
    }
}
