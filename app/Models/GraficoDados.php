<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class GraficoDados
 * @package App\Models
 * @version February 21, 2020, 7:41 pm UTC
 *
 * @property \App\Models\Filial idPrincipal
 * @property integer id_grafico
 * @property number valor1
 * @property string texto1
 * @property string|\Carbon\Carbon data
 * @property string status
 * @property string cor
 * @property number valor2
 * @property string texto2
 * @property integer id_principal
 */
class GraficoDados extends Model
{

    public $table = 'grafico_dados';
    
    public $timestamps = false;




    public $fillable = [
        'id_grafico',
        'valor1',
        'texto1',
        'data',
        'status',
        'cor',
        'valor2',
        'texto2',
        'id_principal'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_grafico' => 'integer',
        'valor1' => 'float',
        'texto1' => 'string',
        'data' => 'datetime',
        'status' => 'string',
        'cor' => 'string',
        'valor2' => 'float',
        'texto2' => 'string',
        'id_principal' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_grafico' => 'required',
        'id_principal' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idPrincipal()
    {
        return $this->belongsTo(\App\Models\Filial::class, 'id_principal');
    }
}
