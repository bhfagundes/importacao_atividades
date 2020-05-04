<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Tickets
 * @package App\Models
 * @version October 1, 2019, 4:35 pm UTC
 *
 * @property string NUMBER
 * @property string|\Carbon\Carbon RES_DATE
 * @property string PRIORITY
 * @property string|\Carbon\Carbon CR_DATE
 * @property string|\Carbon\Carbon UP_DATE
 * @property string CONF_ITEM
 * @property string ASSIGN
 * @property string STATUS
 * @property string CL_CODE
 * @property string|\Carbon\Carbon CL_DATE
 */
class Tickets extends Model
{

    public $table = 'tickets';
    protected $primaryKey = "ID";
    public $timestamps = false;
    protected $connection = 'mysql';


    public $fillable = [
        'NUMBER',
        'RES_DATE',
        'PRIORITY',
        'CR_DATE',
        'UP_DATE',
        'CONF_ITEM',
        'ASSIGN',
        'STATUS',
        'CL_CODE',
        'CL_DATE',
        'PRB_CODE'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'NUMBER' => 'string',
        'RES_DATE' => 'datetime',
        'PRIORITY' => 'string',
        'CR_DATE' => 'datetime',
        'UP_DATE' => 'datetime',
        'CONF_ITEM' => 'string',
        'ASSIGN' => 'string',
        'STATUS' => 'string',
        'CL_CODE' => 'string',
        'CL_DATE' => 'datetime',
        'ID' => 'integer',
        'PRB_CODE' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'NUMBER' => 'required',
        'PRIORITY' => 'required',
        'CR_DATE' => 'required',
        'UP_DATE' => 'required',
        'STATUS' => 'required'
    ];

    
}
