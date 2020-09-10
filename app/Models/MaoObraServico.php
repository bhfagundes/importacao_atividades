<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class MaoObraServico
 * @package App\Models
 * @version August 26, 2020, 8:08 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $servicos
 * @property string $mao_obra
 * @property string $descrica_mao_obra
 */
class MaoObraServico extends Model
{

    public $table = 'mao_obra_servico';
    
    public $timestamps = false;


    public $connection = "mysql";

    public $fillable = [
        'mao_obra',
        'descrica_mao_obra'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_mao_obra_servico' => 'integer',
        'mao_obra' => 'string',
        'descrica_mao_obra' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'mao_obra' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function servicos()
    {
        return $this->hasMany(\App\Models\Servico::class, 'id_mao_obra');
    }
}
