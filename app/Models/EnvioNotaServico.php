<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class EnvioNotaServico
 * @package App\Models
 * @version September 10, 2020, 3:59 pm UTC
 *
 * @property string $path_arquivo
 * @property string|\Carbon\Carbon $created_at
 * @property string|\Carbon\Carbon $updated_at
 * @property string $enviado
 * @property string $identificador_nota
 */
class EnvioNotaServico extends Model
{

    public $table = 'envio_nota_servico';

    public $timestamps = false;


    public $connection = "mysql";

    public $fillable = [
        'path_arquivo',
        'estabelecimento',
        'created_at',
        'updated_at',
        'enviado',
        'identificador_nota'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_envio_nota_servico' => 'integer',
        'path_arquivo' => 'string',
        'estabelecimento' => 'string',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'enviado' => 'string',
        'identificador_nota' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];


}
