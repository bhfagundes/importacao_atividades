<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class DocumentoObrigacao
 * @package App\Models
 * @version February 21, 2020, 7:26 pm UTC
 *
 * @property string documento
 */
class DocumentoObrigacao extends Model
{

    public $table = 'documento_obrigacao';
    
    public $timestamps = false;




    public $fillable = [
        'documento'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_documento_obrigacao' => 'integer',
        'documento' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'documento' => 'required'
    ];

    
}
