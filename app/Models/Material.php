<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Material
 * @package App\Models
 * @version September 13, 2020, 1:43 pm UTC
 *
 * @property string $codigo_uar_tuc
 * @property integer $ativo_eletrico
 * @property string $codigo_patrimonial
 * @property number $percentual_divergencia
 * @property string $indicador_credito_pis_cofins_distribuidora
 * @property string $indicador_credito_pis_cofins_prestadora
 * @property string $indicador_credito_icms
 * @property string $codigo_produto
 * @property integer $origem_produto
 * @property integer $ncm
 * @property integer $tipi
 * @property integer $cean
 * @property string $descricao_tecnica
 * @property string|\Carbon\Carbon $timestamp_recepcao_sisup
 * @property string|\Carbon\Carbon $timestamp_devolucao_systax
 * @property string $data_recebimento
 * @property string $desc_ncm_definitiva
 * @property string $desc_ncm_original
 * @property string $desc_ncm_sugerida
 * @property string $duvida_tecnica
 * @property integer $ean_saneada
 * @property integer $ex_tipi_sugerida
 * @property integer $ex_tipi_definitiva
 * @property string $fundamentacao
 * @property integer $ncm_definitiva
 * @property integer $ncm_sugerida
 * @property string $motivo_reprovacao_ncm
 * @property integer $id_status_material
 * @property string|\Carbon\Carbon $data_saneamento
 * @property string|\Carbon\Carbon $data_atualizacao
 */
class Material extends Model
{

    public $table = 'material';

    public $timestamps = false;


    public $connection = "platform";

    public $fillable = [
        'codigo_uar_tuc',
        'ativo_eletrico',
        'codigo_patrimonial',
        'percentual_divergencia',
        'indicador_credito_pis_cofins_distribuidora',
        'indicador_credito_pis_cofins_prestadora',
        'indicador_credito_icms',
        'codigo_produto',
        'origem_produto',
        'ncm',
        'tipi',
        'cean',
        'descricao_tecnica',
        'timestamp_recepcao_sisup',
        'timestamp_devolucao_systax',
        'data_recebimento',
        'desc_ncm_definitiva',
        'desc_ncm_original',
        'desc_ncm_sugerida',
        'duvida_tecnica',
        'ean_saneada',
        'ex_tipi_sugerida',
        'ex_tipi_definitiva',
        'fundamentacao',
        'ncm_definitiva',
        'ncm_sugerida',
        'motivo_reprovacao_ncm',
        'id_status_material',
        'data_saneamento',
        'data_atualizacao'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id_material' => 'integer',
        'codigo_uar_tuc' => 'string',
        'ativo_eletrico' => 'integer',
        'codigo_patrimonial' => 'string',
        'percentual_divergencia' => 'float',
        'indicador_credito_pis_cofins_distribuidora' => 'string',
        'indicador_credito_pis_cofins_prestadora' => 'string',
        'indicador_credito_icms' => 'string',
        'codigo_produto' => 'string',
        'origem_produto' => 'integer',
        'ncm' => 'integer',
        'tipi' => 'integer',
        'cean' => 'integer',
        'descricao_tecnica' => 'string',
        'timestamp_recepcao_sisup' => 'datetime',
        'timestamp_devolucao_systax' => 'datetime',
        'data_recebimento' => 'date',
        'desc_ncm_definitiva' => 'string',
        'desc_ncm_original' => 'string',
        'desc_ncm_sugerida' => 'string',
        'duvida_tecnica' => 'string',
        'ean_saneada' => 'integer',
        'ex_tipi_sugerida' => 'integer',
        'ex_tipi_definitiva' => 'integer',
        'fundamentacao' => 'string',
        'ncm_definitiva' => 'integer',
        'ncm_sugerida' => 'integer',
        'motivo_reprovacao_ncm' => 'string',
        'id_status_material' => 'integer',
        'data_saneamento' => 'datetime',
        'data_atualizacao' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];


}
