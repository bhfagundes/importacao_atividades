<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Documentos
 * @package App\Models
 * @version February 21, 2020, 7:26 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection agrupamentoDocumentos
 * @property string nome
 * @property string|\Carbon\Carbon dt_cadastro
 * @property string arquivo
 * @property string extensao
 * @property string img
 * @property integer id_filial
 * @property string dt_validade
 * @property integer id_status
 * @property integer id_tipo
 * @property integer id_obrigatorio
 */
class Documentos extends Model
{

    public $table = 'documentos';
    
    public $timestamps = false;




    public $fillable = [
        'nome',
        'dt_cadastro',
        'arquivo',
        'extensao',
        'img',
        'id_filial',
        'dt_validade',
        'id_status',
        'id_tipo',
        'id_obrigatorio'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nome' => 'string',
        'dt_cadastro' => 'datetime',
        'arquivo' => 'string',
        'extensao' => 'string',
        'img' => 'string',
        'id_filial' => 'integer',
        'dt_validade' => 'date',
        'id_status' => 'integer',
        'id_tipo' => 'integer',
        'id_obrigatorio' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nome' => 'required',
        'dt_cadastro' => 'required',
        'arquivo' => 'required',
        'extensao' => 'required',
        'img' => 'required',
        'id_filial' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function agrupamentoDocumentos()
    {
        return $this->hasMany(\App\Models\AgrupamentoDocumento::class, 'id_documento');
    }
}
