<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class FilialCategoria
 * @package App\Models
 * @version February 21, 2020, 7:38 pm UTC
 *
 * @property \App\Models\CategoriaGeral idCategoria
 * @property \App\Models\Filial idFilial
 * @property integer id_filial
 * @property integer id_categoria
 */
class FilialCategoria extends Model
{

    public $table = 'filial_categoria';
    
    public $timestamps = false;




    public $fillable = [
        'id_filial',
        'id_categoria'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_filial' => 'integer',
        'id_categoria' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_filial' => 'required',
        'id_categoria' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idCategoria()
    {
        return $this->belongsTo(\App\Models\CategoriaGeral::class, 'id_categoria');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idFilial()
    {
        return $this->belongsTo(\App\Models\Filial::class, 'id_filial');
    }
}
