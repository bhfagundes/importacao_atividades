<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Grafico
 * @package App\Models
 * @version February 21, 2020, 7:42 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection graficoDados
 * @property string nome
 * @property string titulo
 * @property integer id_tipo_grafico
 */
class Grafico extends Model
{

    public $table = 'graficos';
    
    public $timestamps = false;




    public $fillable = [
        'nome',
        'titulo',
        'id_tipo_grafico'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nome' => 'string',
        'titulo' => 'string',
        'id_tipo_grafico' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_tipo_grafico' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function graficoDados()
    {
        return $this->hasMany(\App\Models\GraficoDado::class, 'id_grafico');
    }
}
