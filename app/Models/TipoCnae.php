<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class TipoCnae
 * @package App\Models
 * @version February 21, 2020, 8:01 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection empresaCnaes
 * @property string nome
 */
class TipoCnae extends Model
{

    public $table = 'tipo_cnae';
    
    public $timestamps = false;




    public $fillable = [
        'nome'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nome' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nome' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function empresaCnaes()
    {
        return $this->hasMany(\App\Models\EmpresaCnae::class, 'id_tipo');
    }
}
