<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class GrupoAtividade
 * @package App\Models
 * @version February 21, 2020, 7:43 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection atividades
 * @property integer id_obrigacao
 */
class GrupoAtividade extends Model
{

    public $table = 'grupo_atividade';
    
    public $timestamps = false;




    public $fillable = [
        'id_obrigacao'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_grupo_atividade' => 'integer',
        'id_obrigacao' => 'integer'
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
    public function atividades()
    {
        return $this->hasMany(\App\Models\Atividade::class, 'id_grupo_atividade');
    }
}
