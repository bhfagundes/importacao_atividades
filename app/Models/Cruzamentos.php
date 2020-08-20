<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Cruzamentos
 * @package App\Models
 * @version August 14, 2020, 12:19 am UTC
 *
 * @property string $estabelecimento
 * @property string $uf
 * @property string $escrituracao
 * @property string $periodo_inicial
 * @property string $periodo_final
 * @property string $cruzamentos
 * @property integer $alertas
 * @property integer $erros
 * @property string $status
 * @property string $link_download
 */
class Cruzamentos extends Model
{

    public $table = 'cruzamentos';
    
    public $timestamps = false;


    public $connection = "mysql";

    public $fillable = [
        'estabelecimento',
        'uf',
        'escrituracao',
        'periodo_inicial',
        'periodo_final',
        'cruzamentos',
        'alertas',
        'erros',
        'status',
        'link_download'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_cruzamentos' => 'integer',
        'estabelecimento' => 'string',
        'uf' => 'string',
        'escrituracao' => 'string',
        'periodo_inicial' => 'date',
        'periodo_final' => 'date',
        'cruzamentos' => 'string',
        'alertas' => 'integer',
        'erros' => 'integer',
        'status' => 'string',
        'link_download' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
