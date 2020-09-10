<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class SublasseServico
 * @package App\Models
 * @version August 26, 2020, 8:11 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $servicos
 * @property string $subclasse
 * @property string $descrica_subclasse
 */
class SublasseServico extends Model
{

    public $table = 'subclasse_servico';
    
    public $timestamps = false;


    public $connection = "mysql";

    public $fillable = [
        'subclasse',
        'descrica_subclasse'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_subclasse_servico' => 'integer',
        'subclasse' => 'string',
        'descrica_subclasse' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'subclasse' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function servicos()
    {
        return $this->hasMany(\App\Models\Servico::class, 'id_subclasse');
    }
}
