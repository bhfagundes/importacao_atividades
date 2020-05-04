<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Fornecedor
 * @package App\Models
 * @version February 21, 2020, 7:40 pm UTC
 *
 * @property \App\Models\Filial idEmpresa
 * @property \App\Models\Filial idPrincipal
 * @property integer id_principal
 * @property integer id_empresa
 */
class Fornecedor extends Model
{

    public $table = 'fornecedor';
    
    public $timestamps = false;




    public $fillable = [
        'id_principal',
        'id_empresa'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_principal' => 'integer',
        'id_empresa' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_principal' => 'required',
        'id_empresa' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idEmpresa()
    {
        return $this->belongsTo(\App\Models\Filial::class, 'id_empresa');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idPrincipal()
    {
        return $this->belongsTo(\App\Models\Filial::class, 'id_principal');
    }
}
