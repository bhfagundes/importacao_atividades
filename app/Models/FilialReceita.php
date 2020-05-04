<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class FilialReceita
 * @package App\Models
 * @version February 21, 2020, 7:39 pm UTC
 *
 * @property \App\Models\Filial idFilial
 * @property integer id_filial
 * @property string situacao
 * @property string|\Carbon\Carbon dt_situacao
 * @property string motivo
 */
class FilialReceita extends Model
{

    public $table = 'filial_receita';
    
    public $timestamps = false;




    public $fillable = [
        'id_filial',
        'situacao',
        'dt_situacao',
        'motivo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_filial' => 'integer',
        'situacao' => 'string',
        'dt_situacao' => 'datetime',
        'motivo' => 'string'
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
    public function idFilial()
    {
        return $this->belongsTo(\App\Models\Filial::class, 'id_filial');
    }
}
