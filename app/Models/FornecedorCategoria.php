<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class FornecedorCategoria
 * @package App\Models
 * @version February 21, 2020, 7:41 pm UTC
 *
 * @property \App\Models\Filial idEmpresa
 * @property integer id_empresa
 * @property integer id_categoria
 */
class FornecedorCategoria extends Model
{

    public $table = 'fornecedor_categoria';
    
    public $timestamps = false;




    public $fillable = [
        'id_empresa',
        'id_categoria'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_empresa' => 'integer',
        'id_categoria' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_empresa' => 'required',
        'id_categoria' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idEmpresa()
    {
        return $this->belongsTo(\App\Models\Filial::class, 'id_empresa');
    }
}
