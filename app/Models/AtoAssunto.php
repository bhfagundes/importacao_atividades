<?php

namespace App\Models;

use Eloquent as Model;


/**
 * Class AtoAssunto
 * @package App\Models
 * @version February 21, 2020, 6:14 pm UTC
 *
 * @property \App\Models\Assunto idAssunto
 * @property \App\Models\Ato idAto
 * @property integer id_ato
 * @property integer id_assunto
 */
class AtoAssunto extends Model
{
    

    public $table = 'ato_assunto';
    
    protected $connection = 'platform'; 



    public $fillable = [
        'id_ato',
        'id_assunto'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_ato' => 'integer',
        'id_assunto' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_ato' => 'required',
        'id_assunto' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idAssunto()
    {
        return $this->belongsTo(\App\Models\Assunto::class, 'id_assunto');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idAto()
    {
        return $this->belongsTo(\App\Models\Ato::class, 'id_ato');
    }
}
