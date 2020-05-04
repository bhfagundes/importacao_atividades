<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Fonte
 * @package App\Models
 * @version February 21, 2020, 7:40 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection atos
 * @property string fonte
 */
class Fonte extends Model
{

    public $table = 'fonte';
    
    public $timestamps = false;




    public $fillable = [
        'fonte'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_fonte' => 'integer',
        'fonte' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'fonte' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function atos()
    {
        return $this->hasMany(\App\Models\Ato::class, 'id_fonte');
    }
}
