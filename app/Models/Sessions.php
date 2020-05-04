<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Sessions
 * @package App\Models
 * @version February 21, 2020, 7:57 pm UTC
 *
 * @property string id
 * @property integer user_id
 * @property string ip_address
 * @property string user_agent
 * @property string payload
 * @property integer last_activity
 */
class Sessions extends Model
{

    public $table = 'sessions';
    
    public $timestamps = false;




    public $fillable = [
        'id',
        'user_id',
        'ip_address',
        'user_agent',
        'payload',
        'last_activity'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'string',
        'user_id' => 'integer',
        'ip_address' => 'string',
        'user_agent' => 'string',
        'payload' => 'string',
        'last_activity' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'payload' => 'required',
        'last_activity' => 'required'
    ];

    
}
