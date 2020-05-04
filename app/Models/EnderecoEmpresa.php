<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class EnderecoEmpresa
 * @package App\Models
 * @version February 21, 2020, 7:35 pm UTC
 *
 * @property \App\Models\Cidade idCidade
 * @property integer id_empresa
 * @property integer id_tipo
 * @property integer id_estado
 * @property integer id_cidade
 * @property string cidade
 * @property string cep
 * @property string logradouro
 * @property string numero
 * @property string complemento
 * @property string bairro
 */
class EnderecoEmpresa extends Model
{

    public $table = 'endereco_empresa';
    
    public $timestamps = false;




    public $fillable = [
        'id_empresa',
        'id_tipo',
        'id_estado',
        'id_cidade',
        'cidade',
        'cep',
        'logradouro',
        'numero',
        'complemento',
        'bairro'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_empresa' => 'integer',
        'id_tipo' => 'integer',
        'id_estado' => 'integer',
        'id_cidade' => 'integer',
        'cidade' => 'string',
        'cep' => 'string',
        'logradouro' => 'string',
        'numero' => 'string',
        'complemento' => 'string',
        'bairro' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_empresa' => 'required',
        'id_tipo' => 'required',
        'id_estado' => 'required',
        'cep' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idCidade()
    {
        return $this->belongsTo(\App\Models\Cidade::class, 'id_cidade');
    }
}
