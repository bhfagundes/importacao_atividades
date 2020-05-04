<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class DocumentosObrigatorios
 * @package App\Models
 * @version February 21, 2020, 7:27 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection documentos
 * @property string nome
 * @property integer id_tipo
 */
class DocumentosObrigatorios extends Model
{

    public $table = 'documentos_obrigatorios';
    
    public $timestamps = false;




    public $fillable = [
        'nome',
        'id_tipo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nome' => 'string',
        'id_tipo' => 'integer'
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
    public function documentos()
    {
        return $this->hasMany(\App\Models\Documento::class, 'id_obrigatorio');
    }
}
