<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class TipoEmpresaUsuario
 * @package App\Models
 * @version February 21, 2020, 8:02 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection empresaUsuarios
 * @property string nome
 */
class TipoEmpresaUsuario extends Model
{

    public $table = 'tipo_empresa_usuarios';
    
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
        'Id' => 'integer',
        'nome' => 'string'
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
    public function empresaUsuarios()
    {
        return $this->hasMany(\App\Models\EmpresaUsuario::class, 'id_tipo');
    }
}
