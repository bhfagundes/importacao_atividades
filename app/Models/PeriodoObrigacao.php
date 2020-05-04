<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class PeriodoObrigacao
 * @package App\Models
 * @version February 21, 2020, 7:50 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection dataObrigacaos
 * @property string periodo_apuracao
 * @property integer intervalo_inicio
 * @property integer intervalo_fim
 * @property integer regra_mes
 */
class PeriodoObrigacao extends Model
{

    public $table = 'periodo_obrigacao';
    
    public $timestamps = false;




    public $fillable = [
        'periodo_apuracao',
        'intervalo_inicio',
        'intervalo_fim',
        'regra_mes'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_periodo_obrigacao' => 'integer',
        'periodo_apuracao' => 'string',
        'intervalo_inicio' => 'integer',
        'intervalo_fim' => 'integer',
        'regra_mes' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'periodo_apuracao' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function dataObrigacaos()
    {
        return $this->hasMany(\App\Models\DataObrigacao::class, 'id_periodo_obrigacao');
    }
}
