<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class AtoTributo
 * @package App\Models
 * @version February 21, 2020, 7:12 pm UTC
 *
 * @property \App\Models\Ato idAto
 * @property integer id_ato
 * @property integer id_tributo
 */
class AtoTributo extends Model
{

    public $table = 'ato_tributo';
    
    public $timestamps = false;




    public $fillable = [
        'id_ato',
        'id_tributo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_ato' => 'integer',
        'id_tributo' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_ato' => 'required',
        'id_tributo' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idAto()
    {
        return $this->belongsTo(\App\Models\Ato::class, 'id_ato');
    }
}
