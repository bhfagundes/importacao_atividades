<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Assunto
 * @package App\Models
 * @version February 21, 2020, 7:08 pm UTC
 *
 * @property \App\Models\AreaTematica idAreaTematica
 * @property string assunto
 * @property string numero_iob
 * @property integer id_area_tematica
 */
class Assunto extends Model
{

    public $table = 'assunto';
    
    public $timestamps = false;




    public $fillable = [
        'assunto',
        'numero_iob',
        'id_area_tematica'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_assunto' => 'integer',
        'assunto' => 'string',
        'numero_iob' => 'string',
        'id_area_tematica' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'assunto' => 'required',
        'numero_iob' => 'required',
        'id_area_tematica' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idAreaTematica()
    {
        return $this->belongsTo(\App\Models\AreaTematica::class, 'id_area_tematica');
    }
}
