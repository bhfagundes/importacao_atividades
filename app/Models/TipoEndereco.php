<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class TipoEndereco
 * @package App\Models
 * @version February 21, 2020, 8:02 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection enderecoEmpresas
 * @property string nome
 */
class TipoEndereco extends Model
{

    public $table = 'tipo_endereco';
    
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
    public function enderecoEmpresas()
    {
        return $this->hasMany(\App\Models\EnderecoEmpresa::class, 'id_tipo');
    }
}
