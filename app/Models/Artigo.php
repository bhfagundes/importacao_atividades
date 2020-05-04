<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Artigo
 * @package App\Models
 * @version February 21, 2020, 7:08 pm UTC
 *
 * @property \App\Models\Ato idAto
 * @property string cod_artigo
 * @property string paragrafo_artigo
 * @property string inciso_artigo
 * @property string alinea_artigo
 * @property string item_artigo
 * @property string anexos_artigo
 * @property integer id_ato
 */
class Artigo extends Model
{

    public $table = 'artigo';
    
    public $timestamps = false;




    public $fillable = [
        'cod_artigo',
        'paragrafo_artigo',
        'inciso_artigo',
        'alinea_artigo',
        'item_artigo',
        'anexos_artigo',
        'id_ato'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_artigo' => 'integer',
        'cod_artigo' => 'string',
        'paragrafo_artigo' => 'string',
        'inciso_artigo' => 'string',
        'alinea_artigo' => 'string',
        'item_artigo' => 'string',
        'anexos_artigo' => 'string',
        'id_ato' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'paragrafo_artigo' => 'required',
        'inciso_artigo' => 'required',
        'alinea_artigo' => 'required',
        'id_ato' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idAto()
    {
        return $this->belongsTo(\App\Models\Ato::class, 'id_ato');
    }
}
