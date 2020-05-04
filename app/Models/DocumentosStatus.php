<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class DocumentosStatus
 * @package App\Models
 * @version February 21, 2020, 7:27 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection documentos
 * @property string nome
 * @property string class
 */
class DocumentosStatus extends Model
{

    public $table = 'documentos_status';
    
    public $timestamps = false;




    public $fillable = [
        'nome',
        'class'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nome' => 'string',
        'class' => 'string'
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
        return $this->hasMany(\App\Models\Documento::class, 'id_status');
    }
}
