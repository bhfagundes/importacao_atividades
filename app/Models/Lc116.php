<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Lc116
 * @package App\Models
 * @version August 26, 2020, 8:09 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $servicos
 * @property \Illuminate\Database\Eloquent\Collection $servico1s
 * @property string $codigo
 * @property string $descricao
 */
class Lc116 extends Model
{

    public $table = 'lc_116';
    
    public $timestamps = false;


    public $connection = "mysql";

    public $fillable = [
        'codigo',
        'descricao'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_lc_116' => 'integer',
        'codigo' => 'string',
        'descricao' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'codigo' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function servicos()
    {
        return $this->hasMany(\App\Models\Servico::class, 'id_lc_116');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function servico1s()
    {
        return $this->hasMany(\App\Models\Servico::class, 'id_lc_116_systax');
    }
}
