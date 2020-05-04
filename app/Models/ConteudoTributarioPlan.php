<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class ConteudoTributarioPlan
 * @package App\Models
 * @version February 21, 2020, 7:19 pm UTC
 *
 * @property integer ID
 * @property string Fonte
 * @property integer ID_Fonte
 * @property string Orgao
 * @property integer ID_Orgao
 * @property string Area_Tematica
 * @property integer ID_Area_Tematica
 * @property string Assunto
 * @property integer ID_Assunto
 * @property string Tributo
 * @property integer ID_Tributo
 * @property string Estado
 * @property integer id_estado
 * @property string Municipio
 * @property integer ID_CIDADE
 * @property string Segmentos
 * @property integer ID_Segmentos
 * @property string Tipo_Ato
 * @property integer ID_Tipo_Ato
 * @property string Titulo
 * @property string Cod_Ato
 * @property string Artigo_Clausula
 * @property string resumo_ato
 * @property string Data_Referencia
 * @property string Data_Publicacao
 * @property string Data_leitura_ato
 * @property string Data_Vigencia_Inicial
 * @property string Data_Vigencia_Final
 * @property string Link_Acesso
 * @property string link_oficial
 * @property string Impacto_efeito
 * @property integer ID_IMPACTO_EFEITO
 * @property string Modulos
 * @property integer Processos
 * @property string Usuario
 * @property string Homologador
 * @property string Aprovador
 * @property string Workflows
 * @property string Tipo_Efeito
 * @property integer ID_Tipo_Efeito
 * @property string Resumo_efeito
 * @property string API
 * @property string Norma_Referenciada_1
 * @property string Link_norma1
 * @property string Norma_Referenciada_2
 * @property string Link_norma2
 * @property string Norma_Referenciada_3
 * @property string Link_norma3
 * @property string Norma_Referenciada_4
 * @property string Link_norma4
 * @property string Norma_Referenciada_5
 * @property string Link_norma5
 * @property string Norma_Referenciada_6
 * @property string Link_norma6
 * @property string Norma_Referenciada_7
 * @property string Link_norma7
 * @property string Norma_Referenciada_8
 * @property string Link_norma8
 * @property string Norma_Referenciada_9
 * @property string Link_norma9
 * @property string Norma_Referenciada_10
 * @property string Link_norma10
 * @property string Norma_Referenciada_11
 * @property string Link_norma11
 * @property string Norma_Referenciada_12
 * @property string Link_norma12
 * @property string Titulo_tipo_obrigacao
 * @property string id_tipo_obrigacao
 * @property string periodo_obrigacao
 * @property string id_periodo_obrigacao
 * @property string data_vencimento
 * @property string ult_dia_mes
 * @property string dias_vencimento
 * @property string mes_vencimento
 * @property string regra_dia_nao_util
 * @property string tipo_dia
 * @property string ciclo_obrigacao
 * @property string ID_Ciclo_Obrigacao
 * @property string documento_obrigacao
 * @property string id_documento_obrigacao
 * @property string codigo_receita
 * @property string ID_Codigo_receita
 * @property string especificidade
 * @property string link_obrigacao
 * @property string data_publicacao_obg
 * @property string data_vigencia_inicio_obg
 * @property string data_vigencia_fim_obg
 * @property string Data_busca_obg
 * @property string idx_ordem
 */
class ConteudoTributarioPlan extends Model
{

    public $table = 'conteudo_tributario_plan';
    
    public $timestamps = false;




    public $fillable = [
        'ID',
        'Fonte',
        'ID_Fonte',
        'Orgao',
        'ID_Orgao',
        'Area_Tematica',
        'ID_Area_Tematica',
        'Assunto',
        'ID_Assunto',
        'Tributo',
        'ID_Tributo',
        'Estado',
        'id_estado',
        'Municipio',
        'ID_CIDADE',
        'Segmentos',
        'ID_Segmentos',
        'Tipo_Ato',
        'ID_Tipo_Ato',
        'Titulo',
        'Cod_Ato',
        'Artigo_Clausula',
        'resumo_ato',
        'Data_Referencia',
        'Data_Publicacao',
        'Data_leitura_ato',
        'Data_Vigencia_Inicial',
        'Data_Vigencia_Final',
        'Link_Acesso',
        'link_oficial',
        'Impacto_efeito',
        'ID_IMPACTO_EFEITO',
        'Modulos',
        'Processos',
        'Usuario',
        'Homologador',
        'Aprovador',
        'Workflows',
        'Tipo_Efeito',
        'ID_Tipo_Efeito',
        'Resumo_efeito',
        'API',
        'Norma_Referenciada_1',
        'Link_norma1',
        'Norma_Referenciada_2',
        'Link_norma2',
        'Norma_Referenciada_3',
        'Link_norma3',
        'Norma_Referenciada_4',
        'Link_norma4',
        'Norma_Referenciada_5',
        'Link_norma5',
        'Norma_Referenciada_6',
        'Link_norma6',
        'Norma_Referenciada_7',
        'Link_norma7',
        'Norma_Referenciada_8',
        'Link_norma8',
        'Norma_Referenciada_9',
        'Link_norma9',
        'Norma_Referenciada_10',
        'Link_norma10',
        'Norma_Referenciada_11',
        'Link_norma11',
        'Norma_Referenciada_12',
        'Link_norma12',
        'Titulo_tipo_obrigacao',
        'id_tipo_obrigacao',
        'periodo_obrigacao',
        'id_periodo_obrigacao',
        'data_vencimento',
        'ult_dia_mes',
        'dias_vencimento',
        'mes_vencimento',
        'regra_dia_nao_util',
        'tipo_dia',
        'ciclo_obrigacao',
        'ID_Ciclo_Obrigacao',
        'documento_obrigacao',
        'id_documento_obrigacao',
        'codigo_receita',
        'ID_Codigo_receita',
        'especificidade',
        'link_obrigacao',
        'data_publicacao_obg',
        'data_vigencia_inicio_obg',
        'data_vigencia_fim_obg',
        'Data_busca_obg',
        'idx_ordem'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'ID' => 'integer',
        'Fonte' => 'string',
        'ID_Fonte' => 'integer',
        'Orgao' => 'string',
        'ID_Orgao' => 'integer',
        'Area_Tematica' => 'string',
        'ID_Area_Tematica' => 'integer',
        'Assunto' => 'string',
        'ID_Assunto' => 'integer',
        'Tributo' => 'string',
        'ID_Tributo' => 'integer',
        'Estado' => 'string',
        'id_estado' => 'integer',
        'Municipio' => 'string',
        'ID_CIDADE' => 'integer',
        'Segmentos' => 'string',
        'ID_Segmentos' => 'integer',
        'Tipo_Ato' => 'string',
        'ID_Tipo_Ato' => 'integer',
        'Titulo' => 'string',
        'Cod_Ato' => 'string',
        'Artigo_Clausula' => 'string',
        'resumo_ato' => 'string',
        'Data_Referencia' => 'string',
        'Data_Publicacao' => 'string',
        'Data_leitura_ato' => 'string',
        'Data_Vigencia_Inicial' => 'string',
        'Data_Vigencia_Final' => 'string',
        'Link_Acesso' => 'string',
        'link_oficial' => 'string',
        'Impacto_efeito' => 'string',
        'ID_IMPACTO_EFEITO' => 'integer',
        'Modulos' => 'string',
        'Processos' => 'integer',
        'Usuario' => 'string',
        'Homologador' => 'string',
        'Aprovador' => 'string',
        'Workflows' => 'string',
        'Tipo_Efeito' => 'string',
        'ID_Tipo_Efeito' => 'integer',
        'Resumo_efeito' => 'string',
        'API' => 'string',
        'Norma_Referenciada_1' => 'string',
        'Link_norma1' => 'string',
        'Norma_Referenciada_2' => 'string',
        'Link_norma2' => 'string',
        'Norma_Referenciada_3' => 'string',
        'Link_norma3' => 'string',
        'Norma_Referenciada_4' => 'string',
        'Link_norma4' => 'string',
        'Norma_Referenciada_5' => 'string',
        'Link_norma5' => 'string',
        'Norma_Referenciada_6' => 'string',
        'Link_norma6' => 'string',
        'Norma_Referenciada_7' => 'string',
        'Link_norma7' => 'string',
        'Norma_Referenciada_8' => 'string',
        'Link_norma8' => 'string',
        'Norma_Referenciada_9' => 'string',
        'Link_norma9' => 'string',
        'Norma_Referenciada_10' => 'string',
        'Link_norma10' => 'string',
        'Norma_Referenciada_11' => 'string',
        'Link_norma11' => 'string',
        'Norma_Referenciada_12' => 'string',
        'Link_norma12' => 'string',
        'Titulo_tipo_obrigacao' => 'string',
        'id_tipo_obrigacao' => 'string',
        'periodo_obrigacao' => 'string',
        'id_periodo_obrigacao' => 'string',
        'data_vencimento' => 'string',
        'ult_dia_mes' => 'string',
        'dias_vencimento' => 'string',
        'mes_vencimento' => 'string',
        'regra_dia_nao_util' => 'string',
        'tipo_dia' => 'string',
        'ciclo_obrigacao' => 'string',
        'ID_Ciclo_Obrigacao' => 'string',
        'documento_obrigacao' => 'string',
        'id_documento_obrigacao' => 'string',
        'codigo_receita' => 'string',
        'ID_Codigo_receita' => 'string',
        'especificidade' => 'string',
        'link_obrigacao' => 'string',
        'data_publicacao_obg' => 'string',
        'data_vigencia_inicio_obg' => 'string',
        'data_vigencia_fim_obg' => 'string',
        'Data_busca_obg' => 'string',
        'idx_ordem' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
