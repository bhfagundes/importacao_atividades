<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Tributo
 * @package App\Models
 * @version February 21, 2020, 8:04 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection atos
 * @property string tributo
 */
class Tributo extends Model
{

    public $table = 'tributo';
    
    public $timestamps = false;




    public $fillable = [
        'tributo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_tributo' => 'integer',
        'tributo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'tributo' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function atos()
    {
        return $this->belongsToMany(\App\Models\Ato::class, 'ato_tributo');
    }
}
