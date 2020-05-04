<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class AtoOrgao
 * @package App\Models
 * @version February 21, 2020, 7:11 pm UTC
 *
 * @property \App\Models\Ato idAto
 * @property integer id_ato
 * @property integer id_orgao
 */
class AtoOrgao extends Model
{

    public $table = 'ato_orgao';
    
    public $timestamps = false;




    public $fillable = [
        'id_ato',
        'id_orgao'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_ato' => 'integer',
        'id_orgao' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_ato' => 'required',
        'id_orgao' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idAto()
    {
        return $this->belongsTo(\App\Models\Ato::class, 'id_ato');
    }
}
