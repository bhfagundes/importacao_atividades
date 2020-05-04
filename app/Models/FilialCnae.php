<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class FilialCnae
 * @package App\Models
 * @version February 21, 2020, 7:38 pm UTC
 *
 * @property \App\Models\Cnae idCnae
 * @property \App\Models\Filial idFilial
 * @property integer id_filial
 * @property integer id_cnae
 */
class FilialCnae extends Model
{

    public $table = 'filial_cnae';
    
    public $timestamps = false;




    public $fillable = [
        'id_filial',
        'id_cnae'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_filial' => 'integer',
        'id_cnae' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_filial' => 'required',
        'id_cnae' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idCnae()
    {
        return $this->belongsTo(\App\Models\Cnae::class, 'id_cnae');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idFilial()
    {
        return $this->belongsTo(\App\Models\Filial::class, 'id_filial');
    }
}
