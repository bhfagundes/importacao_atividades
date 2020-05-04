<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class TipoAtividade
 * @package App\Models
 * @version February 21, 2020, 8:00 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection atividades
 * @property string descricao
 */
class TipoAtividade extends Model
{

    public $table = 'tipo_atividade';
    
    public $timestamps = false;

    protected $connection = 'platform';


    public $fillable = [
        'descricao'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_tipo_atividade' => 'integer',
        'descricao' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'descricao' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function atividades()
    {
        return $this->hasMany(\App\Models\Atividade::class, 'id_tipo_atividade');
    }
}
