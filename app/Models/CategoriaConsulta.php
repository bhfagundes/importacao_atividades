<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class CategoriaConsulta
 * @package App\Models
 * @version February 21, 2020, 7:13 pm UTC
 *
 * @property \App\Models\Consultum idConsulta
 * @property integer id_categoria
 * @property integer id_consulta
 * @property integer id_status
 * @property integer id_obrigatoriedade
 * @property integer id_principal
 */
class CategoriaConsulta extends Model
{

    public $table = 'categoria_consulta';
    
    public $timestamps = false;




    public $fillable = [
        'id_categoria',
        'id_consulta',
        'id_status',
        'id_obrigatoriedade',
        'id_principal'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_categoria' => 'integer',
        'id_consulta' => 'integer',
        'id_status' => 'integer',
        'id_obrigatoriedade' => 'integer',
        'id_principal' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idConsulta()
    {
        return $this->belongsTo(\App\Models\Consultum::class, 'id_consulta');
    }
}
