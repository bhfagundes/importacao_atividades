<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Log
 * @package App\Models
 * @version February 21, 2020, 7:45 pm UTC
 *
 * @property \App\Models\AcaoSistema idAcaoSistema
 * @property integer id_usuario
 * @property integer id_acao_sistema
 * @property integer id_referencia
 * @property string|\Carbon\Carbon data
 */
class Log extends Model
{

    public $table = 'log';
    
    public $timestamps = false;




    public $fillable = [
        'id_usuario',
        'id_acao_sistema',
        'id_referencia',
        'data'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_log' => 'integer',
        'id_usuario' => 'integer',
        'id_acao_sistema' => 'integer',
        'id_referencia' => 'integer',
        'data' => 'datetime'
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
    public function idAcaoSistema()
    {
        return $this->belongsTo(\App\Models\AcaoSistema::class, 'id_acao_sistema');
    }
}
