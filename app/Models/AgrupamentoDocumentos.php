<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class AgrupamentoDocumentos
 * @package App\Models
 * @version February 21, 2020, 7:05 pm UTC
 *
 * @property \App\Models\Agrupamento idAgrupamento
 * @property integer id_agrupamento
 * @property integer id_documento
 */
class AgrupamentoDocumentos extends Model
{

    public $table = 'agrupamento_documentos';
    
    public $timestamps = false;




    public $fillable = [
        'id_agrupamento',
        'id_documento'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_agrupamento' => 'integer',
        'id_documento' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_agrupamento' => 'required',
        'id_documento' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idAgrupamento()
    {
        return $this->belongsTo(\App\Models\Agrupamento::class, 'id_agrupamento');
    }
}
