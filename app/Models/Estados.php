<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Estados
 * @package App\Models
 * @version February 21, 2020, 6:42 pm UTC
 *
 * @property \App\Models\Pai idPais
 * @property \Illuminate\Database\Eloquent\Collection cidades
 * @property string nome
 * @property string sigla
 * @property integer id_pais
 */
class Estados extends Model
{

    public $table = 'estados';
    
    public $timestamps = false;




    public $fillable = [
        'nome',
        'sigla',
        'id_pais'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nome' => 'string',
        'sigla' => 'string',
        'id_pais' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nome' => 'required',
        'sigla' => 'required',
        'id_pais' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idPais()
    {
        return $this->belongsTo(\App\Models\Pai::class, 'id_pais');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function cidades()
    {
        return $this->hasMany(\App\Models\Cidade::class, 'id_estado');
    }
}
