<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class UsuarioFilial
 * @package App\Models
 * @version February 21, 2020, 8:05 pm UTC
 *
 * @property \App\Models\Filial idFilial
 * @property integer id_usuario
 * @property integer id_filial
 */
class UsuarioFilial extends Model
{

    public $table = 'usuario_filial';
    
    public $timestamps = false;




    public $fillable = [
        'id_usuario',
        'id_filial'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_usuario' => 'integer',
        'id_filial' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_usuario' => 'required',
        'id_filial' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idFilial()
    {
        return $this->belongsTo(\App\Models\Filial::class, 'id_filial');
    }
}
