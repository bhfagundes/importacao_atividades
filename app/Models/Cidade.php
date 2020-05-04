<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Cidade
 * @package App\Models
 * @version February 21, 2020, 7:15 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection atos
 * @property \Illuminate\Database\Eloquent\Collection codigoReceita
 * @property string nome
 * @property integer id_estado
 */
class Cidade extends Model
{

    public $table = 'cidades';
    
    public $timestamps = false;

    protected $connection = 'platform';


    public $fillable = [
        'nome',
        'id_estado'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nome' => 'string',
        'id_estado' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nome' => 'required',
        'id_estado' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function atos()
    {
        return $this->belongsToMany(\App\Models\Ato::class, 'ato_cidades');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function codigoReceita()
    {
        return $this->hasMany(\App\Models\CodigoReceitum::class, 'id_municipio');
    }
}
