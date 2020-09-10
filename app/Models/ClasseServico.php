<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class ClasseServico
 * @package App\Models
 * @version August 26, 2020, 8:11 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $servicos
 * @property string $classe
 */
class ClasseServico extends Model
{

    public $table = 'classe_servico';
    
    public $timestamps = false;


    public $connection = "mysql";

    public $fillable = [
        'classe'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_classe_servico' => 'integer',
        'classe' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'classe' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function servicos()
    {
        return $this->hasMany(\App\Models\Servico::class, 'id_classe');
    }
}
