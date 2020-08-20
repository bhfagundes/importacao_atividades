<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Evidencia
 * @package App\Models
 * @version July 29, 2020, 2:27 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $atividades
 * @property \Illuminate\Database\Eloquent\Collection $dataAtividades
 * @property integer $codigo
 * @property string $evidencia
 */
class Evidencia extends Model
{

    public $table = 'evidencia';
    
    public $timestamps = false;


    public $connection = "mysql";

    public $fillable = [
        'codigo',
        'evidencia'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_evidencia' => 'integer',
        'codigo' => 'integer',
        'evidencia' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'codigo' => 'required',
        'evidencia' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function atividades()
    {
        return $this->belongsToMany(\App\Models\Atividade::class, 'atividade_evidencia');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function dataAtividades()
    {
        return $this->belongsToMany(\App\Models\DataAtividade::class, 'data_atividade_evidencia');
    }
}
