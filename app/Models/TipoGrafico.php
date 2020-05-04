<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class TipoGrafico
 * @package App\Models
 * @version February 21, 2020, 8:03 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection graficos
 * @property string nome
 */
class TipoGrafico extends Model
{

    public $table = 'tipo_grafico';
    
    public $timestamps = false;




    public $fillable = [
        'nome'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nome' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function graficos()
    {
        return $this->hasMany(\App\Models\Grafico::class, 'id_tipo_grafico');
    }
}
