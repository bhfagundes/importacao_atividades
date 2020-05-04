<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class DocumentosTipo
 * @package App\Models
 * @version February 21, 2020, 7:30 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection documentos
 * @property \Illuminate\Database\Eloquent\Collection documentosObrigatorios
 * @property string nome
 */
class DocumentosTipo extends Model
{

    public $table = 'documentos_tipo';
    
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
        'nome' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function documentos()
    {
        return $this->hasMany(\App\Models\Documento::class, 'id_tipo');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function documentosObrigatorios()
    {
        return $this->hasMany(\App\Models\DocumentosObrigatorio::class, 'id_tipo');
    }
}
