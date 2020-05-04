<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class TipoAto
 * @package App\Models
 * @version February 21, 2020, 8:00 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection atos
 * @property string tipo_ato
 */
class TipoAto extends Model
{

    public $table = 'tipo_ato';
    
    public $timestamps = false;




    public $fillable = [
        'tipo_ato'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_tipo_ato' => 'integer',
        'tipo_ato' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'tipo_ato' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function atos()
    {
        return $this->hasMany(\App\Models\Ato::class, 'id_tipo_ato');
    }
}
