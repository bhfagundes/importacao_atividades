<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Ato
 * @package App\Models
 * @version February 21, 2020, 8:04 pm UTC
 *
 * @property \App\Models\AreaTematica idAreaTematica
 * @property \App\Models\Fonte idFonte
 * @property \App\Models\TipoAto idTipoAto
 * @property \Illuminate\Database\Eloquent\Collection artigos
 * @property \Illuminate\Database\Eloquent\Collection cidades
 * @property \Illuminate\Database\Eloquent\Collection cnaes
 * @property \Illuminate\Database\Eloquent\Collection estados
 * @property \Illuminate\Database\Eloquent\Collection orgaos
 * @property \Illuminate\Database\Eloquent\Collection segmentos
 * @property \Illuminate\Database\Eloquent\Collection tributos
 * @property \Illuminate\Database\Eloquent\Collection dataObrigacaos
 * @property \Illuminate\Database\Eloquent\Collection efeitoAtos
 * @property \Illuminate\Database\Eloquent\Collection normaReferenciadas
 * @property \Illuminate\Database\Eloquent\Collection obrigacaos
 * @property \Illuminate\Database\Eloquent\Collection obrigacaoAtoProcessos
 * @property string cod_ato
 * @property string descricao
 * @property integer id_fonte
 * @property integer id_tipo_ato
 * @property string data_referencia
 * @property string data_publicacao
 * @property string data_leitura_ato
 * @property string data_vigencia_inicio
 * @property string data_vigencia_fim
 * @property string link_acesso
 * @property integer id_area_tematica
 * @property string|\Carbon\Carbon data_insercao
 * @property integer cod_aux
 * @property string abrev_ato
 * @property string clausula_ato
 * @property string resumo_ato
 * @property string link_oficial
 */
class Ato extends Model
{

    public $table = 'ato';
    
    public $timestamps = false;




    public $fillable = [
        'cod_ato',
        'descricao',
        'id_fonte',
        'id_tipo_ato',
        'data_referencia',
        'data_publicacao',
        'data_leitura_ato',
        'data_vigencia_inicio',
        'data_vigencia_fim',
        'link_acesso',
        'id_area_tematica',
        'data_insercao',
        'cod_aux',
        'abrev_ato',
        'clausula_ato',
        'resumo_ato',
        'link_oficial'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_ato' => 'integer',
        'cod_ato' => 'string',
        'descricao' => 'string',
        'id_fonte' => 'integer',
        'id_tipo_ato' => 'integer',
        'data_referencia' => 'date',
        'data_publicacao' => 'date',
        'data_leitura_ato' => 'date',
        'data_vigencia_inicio' => 'date',
        'data_vigencia_fim' => 'date',
        'link_acesso' => 'string',
        'id_area_tematica' => 'integer',
        'data_insercao' => 'datetime',
        'cod_aux' => 'integer',
        'abrev_ato' => 'string',
        'clausula_ato' => 'string',
        'resumo_ato' => 'string',
        'link_oficial' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'descricao' => 'required',
        'data_publicacao' => 'required',
        'data_leitura_ato' => 'required',
        'link_acesso' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idAreaTematica()
    {
        return $this->belongsTo(\App\Models\AreaTematica::class, 'id_area_tematica');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idFonte()
    {
        return $this->belongsTo(\App\Models\Fonte::class, 'id_fonte');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idTipoAto()
    {
        return $this->belongsTo(\App\Models\TipoAto::class, 'id_tipo_ato');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function artigos()
    {
        return $this->hasMany(\App\Models\Artigo::class, 'id_ato');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function cidades()
    {
        return $this->belongsToMany(\App\Models\Cidade::class, 'ato_cidades');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function cnaes()
    {
        return $this->belongsToMany(\App\Models\Cnae::class, 'ato_cnae');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function estados()
    {
        return $this->belongsToMany(\App\Models\Estado::class, 'ato_estados');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function orgaos()
    {
        return $this->belongsToMany(\App\Models\Orgao::class, 'ato_orgao');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function segmentos()
    {
        return $this->belongsToMany(\App\Models\Segmento::class, 'ato_segmento');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function tributos()
    {
        return $this->belongsToMany(\App\Models\Tributo::class, 'ato_tributo');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function dataObrigacaos()
    {
        return $this->hasMany(\App\Models\DataObrigacao::class, 'id_ato');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function efeitoAtos()
    {
        return $this->hasMany(\App\Models\EfeitoAto::class, 'id_ato');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function normaReferenciadas()
    {
        return $this->hasMany(\App\Models\NormaReferenciada::class, 'id_ato');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function obrigacaos()
    {
        return $this->hasMany(\App\Models\Obrigacao::class, 'id_ato');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function obrigacaoAtoProcessos()
    {
        return $this->hasMany(\App\Models\ObrigacaoAtoProcesso::class, 'id_ato');
    }
}
