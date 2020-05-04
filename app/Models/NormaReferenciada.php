<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class NormaReferenciada
 * @package App\Models
 * @version February 21, 2020, 7:45 pm UTC
 *
 * @property \App\Models\Ato idAto
 * @property integer id_ato
 * @property string descricao
 * @property string link_norma
 */
class NormaReferenciada extends Model
{

    public $table = 'norma_referenciada';
    
    public $timestamps = false;




    public $fillable = [
        'id_ato',
        'descricao',
        'link_norma'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_norma_referenciada' => 'integer',
        'id_ato' => 'integer',
        'descricao' => 'string',
        'link_norma' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_ato' => 'required',
        'descricao' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idAto()
    {
        return $this->belongsTo(\App\Models\Ato::class, 'id_ato');
    }
}
