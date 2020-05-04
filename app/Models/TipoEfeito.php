<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class TipoEfeito
 * @package App\Models
 * @version February 21, 2020, 8:01 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection efeitoAtos
 * @property string tipo_efeito
 */
class TipoEfeito extends Model
{

    public $table = 'tipo_efeito';
    
    public $timestamps = false;




    public $fillable = [
        'tipo_efeito'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_tipo_efeito' => 'integer',
        'tipo_efeito' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function efeitoAtos()
    {
        return $this->hasMany(\App\Models\EfeitoAto::class, 'id_tipo_efeito');
    }
}
