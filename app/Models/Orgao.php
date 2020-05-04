<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Orgao
 * @package App\Models
 * @version February 21, 2020, 7:48 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection atos
 * @property string orgao
 */
class Orgao extends Model
{

    public $table = 'orgao';
    
    public $timestamps = false;




    public $fillable = [
        'orgao'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_orgao' => 'integer',
        'orgao' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'orgao' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function atos()
    {
        return $this->belongsToMany(\App\Models\Ato::class, 'ato_orgao');
    }
}
