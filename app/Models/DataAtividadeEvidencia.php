<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class DataAtividadeEvidencia
 * @package App\Models
 * @version July 29, 2020, 2:35 am UTC
 *
 * @property \App\Models\DataAtividade $idDataAtividadeEvidencia
 * @property \App\Models\Evidencium $idEvidencia
 * @property integer $id_data_atividade
 * @property integer $id_evidencia
 * @property string $url_anexo
 * @property integer $valor
 * @property string $comentario
 * @property boolean $integracao
 */
class DataAtividadeEvidencia extends Model
{

    public $table = 'data_atividade_evidencia';
    
    public $timestamps = false;


    public $connection = "mysql";

    public $fillable = [
        'id_data_atividade',
        'id_evidencia',
        'url_anexo',
        'valor',
        'comentario',
        'integracao'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_data_atividade_evidencia' => 'integer',
        'id_data_atividade' => 'integer',
        'id_evidencia' => 'integer',
        'url_anexo' => 'string',
        'valor' => 'integer',
        'comentario' => 'string',
        'integracao' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_data_atividade' => 'required',
        'id_evidencia' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idDataAtividadeEvidencia()
    {
        return $this->belongsTo(\App\Models\DataAtividade::class, 'id_data_atividade_evidencia');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idEvidencia()
    {
        return $this->belongsTo(\App\Models\Evidencium::class, 'id_evidencia');
    }
}
