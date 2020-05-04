<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Impacto
 * @package App\Models
 * @version February 21, 2020, 7:44 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection efeitoAtos
 * @property \Illuminate\Database\Eloquent\Collection efeitoAto1s
 * @property string impacto
 */
class Impacto extends Model
{

    public $table = 'impacto';
    
    public $timestamps = false;




    public $fillable = [
        'impacto'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_impacto' => 'integer',
        'impacto' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'impacto' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function efeitoAtos()
    {
        return $this->hasMany(\App\Models\EfeitoAto::class, 'id_impacto');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function efeitoAto1s()
    {
        return $this->hasMany(\App\Models\EfeitoAto::class, 'id_impacto_cliente');
    }
}
