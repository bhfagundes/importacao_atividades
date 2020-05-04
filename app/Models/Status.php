<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Status
 * @package App\Models
 * @version February 21, 2020, 7:57 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection efeitoAtos
 * @property string status
 */
class Status extends Model
{

    public $table = 'status';
    
    public $timestamps = false;




    public $fillable = [
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_status' => 'integer',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'status' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function efeitoAtos()
    {
        return $this->hasMany(\App\Models\EfeitoAto::class, 'id_status');
    }
}
