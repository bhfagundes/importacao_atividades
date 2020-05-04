<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class OrigemObrigacao
 * @package App\Models
 * @version February 21, 2020, 7:49 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection obrigacaos
 * @property string origem
 */
class OrigemObrigacao extends Model
{

    public $table = 'origem_obrigacao';
    
    public $timestamps = false;




    public $fillable = [
        'origem'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_origem_obrigacao' => 'integer',
        'origem' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'origem' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function obrigacaos()
    {
        return $this->hasMany(\App\Models\Obrigacao::class, 'id_origem_obrigacao');
    }
}
