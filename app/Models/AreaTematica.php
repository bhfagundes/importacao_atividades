<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class AreaTematica
 * @package App\Models
 * @version February 21, 2020, 7:07 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection assuntos
 * @property \Illuminate\Database\Eloquent\Collection atos
 * @property string area_tematica
 */
class AreaTematica extends Model
{

    public $table = 'area_tematica';
    
    public $timestamps = false;




    public $fillable = [
        'area_tematica'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_area_tematica' => 'integer',
        'area_tematica' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'area_tematica' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function assuntos()
    {
        return $this->hasMany(\App\Models\Assunto::class, 'id_area_tematica');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function atos()
    {
        return $this->hasMany(\App\Models\Ato::class, 'id_area_tematica');
    }
}
