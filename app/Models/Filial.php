<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Filial
 * @package App\Models
 * @version February 21, 2020, 7:37 pm UTC
 *
 * @property \App\Models\CategoriaGeral idCategoria
 * @property \Illuminate\Database\Eloquent\Collection anexos
 * @property \Illuminate\Database\Eloquent\Collection categoriaConsulta
 * @property \Illuminate\Database\Eloquent\Collection categoriaGeral1s
 * @property \Illuminate\Database\Eloquent\Collection clientes
 * @property \Illuminate\Database\Eloquent\Collection cliente2s
 * @property \Illuminate\Database\Eloquent\Collection configuracos
 * @property \Illuminate\Database\Eloquent\Collection documentos
 * @property \Illuminate\Database\Eloquent\Collection efeitoAtos
 * @property \Illuminate\Database\Eloquent\Collection empresaSocios
 * @property \Illuminate\Database\Eloquent\Collection empresaUsuarios
 * @property \Illuminate\Database\Eloquent\Collection enderecoEmpresas
 * @property \Illuminate\Database\Eloquent\Collection feriados
 * @property string razao_social
 * @property string nome_completo
 * @property string nome_fantasia
 * @property string nome_compacto
 * @property string cnpj
 * @property string site
 * @property string insc_municipal
 * @property string insc_estadual
 * @property string duns
 * @property boolean status
 * @property string|\Carbon\Carbon dt_cadastro
 * @property string base
 * @property integer id_principal
 * @property boolean grupo_economico
 * @property boolean holding
 * @property boolean matriz
 * @property integer pai
 * @property string natpj
 * @property string suframa
 * @property integer id_reg_trib
 * @property integer id_empresa_legado
 * @property string dt_inicio_atividade
 * @property integer id_segmento
 * @property integer qtd_funcionarios
 * @property number faturamento
 * @property integer id_tipo_organizacao
 * @property string img_light
 * @property string img_dark
 * @property integer id_categoria
 */
class Filial extends Model
{

    public $table = 'filial';
    
    public $timestamps = false;

    protected $connection = 'platform';


    public $fillable = [
        'razao_social',
        'nome_completo',
        'nome_fantasia',
        'nome_compacto',
        'cnpj',
        'site',
        'insc_municipal',
        'insc_estadual',
        'duns',
        'status',
        'dt_cadastro',
        'base',
        'id_principal',
        'grupo_economico',
        'holding',
        'matriz',
        'pai',
        'natpj',
        'suframa',
        'id_reg_trib',
        'id_empresa_legado',
        'dt_inicio_atividade',
        'id_segmento',
        'qtd_funcionarios',
        'faturamento',
        'id_tipo_organizacao',
        'img_light',
        'img_dark',
        'id_categoria'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'razao_social' => 'string',
        'nome_completo' => 'string',
        'nome_fantasia' => 'string',
        'nome_compacto' => 'string',
        'cnpj' => 'string',
        'site' => 'string',
        'insc_municipal' => 'string',
        'insc_estadual' => 'string',
        'duns' => 'string',
        'status' => 'boolean',
        'dt_cadastro' => 'datetime',
        'base' => 'string',
        'id_principal' => 'integer',
        'grupo_economico' => 'boolean',
        'holding' => 'boolean',
        'matriz' => 'boolean',
        'pai' => 'integer',
        'natpj' => 'string',
        'suframa' => 'string',
        'id_reg_trib' => 'integer',
        'id_empresa_legado' => 'integer',
        'dt_inicio_atividade' => 'date',
        'id_segmento' => 'integer',
        'qtd_funcionarios' => 'integer',
        'faturamento' => 'float',
        'id_tipo_organizacao' => 'integer',
        'img_light' => 'string',
        'img_dark' => 'string',
        'id_categoria' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'cnpj' => 'required',
        'status' => 'required',
        'grupo_economico' => 'required',
        'holding' => 'required',
        'matriz' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idCategoria()
    {
        return $this->belongsTo(\App\Models\CategoriaGeral::class, 'id_categoria');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function anexos()
    {
        return $this->hasMany(\App\Models\Anexo::class, 'id_filial');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function categoriaConsulta()
    {
        return $this->hasMany(\App\Models\CategoriaConsultum::class, 'id_principal');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function categoriaGeral1s()
    {
        return $this->hasMany(\App\Models\CategoriaGeral::class, 'id_principal');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function clientes()
    {
        return $this->hasMany(\App\Models\Cliente::class, 'id_empresa');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function cliente2s()
    {
        return $this->hasMany(\App\Models\Cliente::class, 'id_principal');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function configuracos()
    {
        return $this->hasMany(\App\Models\Configuraco::class, 'id_empresa');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function documentos()
    {
        return $this->hasMany(\App\Models\Documento::class, 'id_filial');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function efeitoAtos()
    {
        return $this->belongsToMany(\App\Models\EfeitoAto::class, 'empresa_efeito_ato');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function empresaSocios()
    {
        return $this->hasMany(\App\Models\EmpresaSocio::class, 'id_empresa');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function empresaUsuarios()
    {
        return $this->hasMany(\App\Models\EmpresaUsuario::class, 'id_empresa');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function enderecoEmpresas()
    {
        return $this->hasMany(\App\Models\EnderecoEmpresa::class, 'id_empresa');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function feriados()
    {
        return $this->belongsToMany(\App\Models\Feriado::class, 'feriado_filial');
    }
}
