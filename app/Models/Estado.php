<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Estado
 * @package App\Models
 * @version February 21, 2020, 7:35 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection atos
 * @property \Illuminate\Database\Eloquent\Collection cidades
 * @property \Illuminate\Database\Eloquent\Collection codigoReceita
 * @property \Illuminate\Database\Eloquent\Collection enderecoEmpresas
 * @property string nome
 * @property string sigla
 * @property integer id_pais
 */
class Estado extends Model
{

    public $table = 'estados';
    
    public $timestamps = false;

    protected $connection = 'platform';


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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function atos()
    {
        return $this->belongsToMany(\App\Models\Ato::class, 'ato_estados');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function cidades()
    {
        return $this->hasMany(\App\Models\Cidade::class, 'id_estado');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function codigoReceita()
    {
        return $this->hasMany(\App\Models\CodigoReceitum::class, 'id_estado');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function enderecoEmpresas()
    {
        return $this->hasMany(\App\Models\EnderecoEmpresa::class, 'id_estado');
    }
}
