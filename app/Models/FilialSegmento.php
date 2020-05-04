<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class FilialSegmento
 * @package App\Models
 * @version February 21, 2020, 7:40 pm UTC
 *
 * @property \App\Models\Filial idFilial
 * @property integer id_filial
 * @property integer id_segmento
 */
class FilialSegmento extends Model
{

    public $table = 'filial_segmento';
    
    public $timestamps = false;




    public $fillable = [
        'id_filial',
        'id_segmento'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_filial' => 'integer',
        'id_segmento' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'id_filial' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idFilial()
    {
        return $this->belongsTo(\App\Models\Filial::class, 'id_filial');
    }
}
