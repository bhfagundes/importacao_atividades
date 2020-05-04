<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class StatusAtividade
 * @package App\Models
 * @version February 21, 2020, 7:58 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection dataAtividades
 * @property string status
 * @property string class
 */
class StatusAtividade extends Model
{

    public $table = 'status_atividade';
    
    public $timestamps = false;




    public $fillable = [
        'status',
        'class'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_status_atividade' => 'integer',
        'status' => 'string',
        'class' => 'string'
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
    public function dataAtividades()
    {
        return $this->hasMany(\App\Models\DataAtividade::class, 'id_status_atividade');
    }
}
