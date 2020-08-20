<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class AtividadeEvidencia
 * @package App\Models
 * @version July 29, 2020, 2:19 am UTC
 *
 * @property \App\Models\Atividade $idAtividade
 * @property \App\Models\Evidencium $idEvidencia
 * @property integer $id_atividade
 * @property integer $id_evidencia
 * @property boolean $mandatoria
 * @property boolean $conclusao_auto
 */
class AtividadeEvidencia extends Model
{

    public $table = 'atividade_evidencia';
    
    public $timestamps = false;


    public $connection = "mysql";

    public $fillable = [
        'id_atividade',
        'id_evidencia',
        'mandatoria',
        'conclusao_auto'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_atividade' => 'integer',
        'id_evidencia' => 'integer',
        'mandatoria' => 'boolean',
        'conclusao_auto' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_atividade' => 'required',
        'id_evidencia' => 'required',
        'mandatoria' => 'required',
        'conclusao_auto' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idAtividade()
    {
        return $this->belongsTo(\App\Models\Atividade::class, 'id_atividade');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idEvidencia()
    {
        return $this->belongsTo(\App\Models\Evidencium::class, 'id_evidencia');
    }
}
