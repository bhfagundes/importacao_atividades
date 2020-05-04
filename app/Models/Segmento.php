<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Segmento
 * @package App\Models
 * @version February 21, 2020, 7:56 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection atos
 * @property \Illuminate\Database\Eloquent\Collection filials
 * @property \Illuminate\Database\Eloquent\Collection filial1s
 * @property string nome
 * @property string descricao
 */
class Segmento extends Model
{

    public $table = 'segmento';
    
    public $timestamps = false;




    public $fillable = [
        'nome',
        'descricao'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nome' => 'string',
        'descricao' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function atos()
    {
        return $this->belongsToMany(\App\Models\Ato::class, 'ato_segmento');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function filials()
    {
        return $this->hasMany(\App\Models\Filial::class, 'id_segmento');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function filial1s()
    {
        return $this->belongsToMany(\App\Models\Filial::class, 'filial_segmento');
    }
}
