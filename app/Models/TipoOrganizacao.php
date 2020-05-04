<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class TipoOrganizacao
 * @package App\Models
 * @version February 21, 2020, 8:04 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection filials
 * @property string nome
 */
class TipoOrganizacao extends Model
{

    public $table = 'tipo_organizacao';
    
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
    public function filials()
    {
        return $this->hasMany(\App\Models\Filial::class, 'id_tipo_organizacao');
    }
}
