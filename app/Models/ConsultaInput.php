<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class ConsultaInput
 * @package App\Models
 * @version February 21, 2020, 7:17 pm UTC
 *
 * @property \App\Models\Consultum idConsulta
 * @property integer id_consulta
 * @property integer id_input
 */
class ConsultaInput extends Model
{

    public $table = 'consulta_input';
    
    public $timestamps = false;




    public $fillable = [
        'id_consulta',
        'id_input'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'id_consulta' => 'integer',
        'id_input' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_consulta' => 'required',
        'id_input' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idConsulta()
    {
        return $this->belongsTo(\App\Models\Consultum::class, 'id_consulta');
    }
}
