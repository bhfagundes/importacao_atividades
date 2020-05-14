<?php

namespace app\models;

use eloquent as model;

/**
 * class conteudotributarioplan
 * @package app\models
 * @version february 21, 2020, 7:19 pm utc
 *
 * @property integer id
 * @property string fonte
 * @property integer id_fonte
 * @property string orgao
 * @property integer id_orgao
 * @property string area_tematica
 * @property integer id_area_tematica
 * @property string assunto
 * @property integer id_assunto
 * @property string tributo
 * @property integer id_tributo
 * @property string estado
 * @property integer id_estado
 * @property string municipio
 * @property integer id_cidade
 * @property string segmentos
 * @property integer id_segmentos
 * @property string tipo_ato
 * @property integer id_tipo_ato
 * @property string titulo
 * @property string cod_ato
 * @property string artigo_clausula
 * @property string resumo_ato
 * @property string data_referencia
 * @property string data_publicacao
 * @property string data_leitura_ato
 * @property string data_vigencia_inicial
 * @property string data_vigencia_final
 * @property string link_acesso
 * @property string link_oficial
 * @property string impacto_efeito
 * @property integer id_impacto_efeito
 * @property string modulos
 * @property integer processos
 * @property string usuario
 * @property string homologador
 * @property string aprovador
 * @property string workflows
 * @property string tipo_efeito
 * @property integer id_tipo_efeito
 * @property string resumo_efeito
 * @property string api
 * @property string norma_referenciada_1
 * @property string link_norma1
 * @property string norma_referenciada_2
 * @property string link_norma2
 * @property string norma_referenciada_3
 * @property string link_norma3
 * @property string norma_referenciada_4
 * @property string link_norma4
 * @property string norma_referenciada_5
 * @property string link_norma5
 * @property string norma_referenciada_6
 * @property string link_norma6
 * @property string norma_referenciada_7
 * @property string link_norma7
 * @property string norma_referenciada_8
 * @property string link_norma8
 * @property string norma_referenciada_9
 * @property string link_norma9
 * @property string norma_referenciada_10
 * @property string link_norma10
 * @property string norma_referenciada_11
 * @property string link_norma11
 * @property string norma_referenciada_12
 * @property string link_norma12
 * @property string titulo_tipo_obrigacao
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
 * @property string id_ciclo_obrigacao
 * @property string documento_obrigacao
 * @property string id_documento_obrigacao
 * @property string codigo_receita
 * @property string id_codigo_receita
 * @property string especificidade
 * @property string link_obrigacao
 * @property string data_publicacao_obg
 * @property string data_vigencia_inicio_obg
 * @property string data_vigencia_fim_obg
 * @property string data_busca_obg
 * @property string idx_ordem
 */
class conteudotributarioplan extends model
{

    public $table = 'conteudo_tributario_plan';
    
    public $timestamps = false;

    protected $connection = 'platform';



    public $fillable = [
        'id',
        'fonte',
        'id_fonte',
        'orgao',
        'id_orgao',
        'area_tematica',
        'id_area_tematica',
        'assunto',
        'id_assunto',
        'tributo',
        'id_tributo',
        'estado',
        'id_estado',
        'municipio',
        'id_cidade',
        'segmentos',
        'cnae',
        'id_cnae',
        'id_segmentos',
        'tipo_ato',
        'id_tipo_ato',
        'titulo',
        'cod_ato',
        'artigo_clausula',
        'resumo_ato',
        'data_referencia',
        'data_publicacao',
        'data_leitura_ato',
        'data_vigencia_inicial',
        'data_vigencia_final',
        'link_acesso',
        'link_oficial',
        'impacto_efeito',
        'id_impacto_efeito',
        'modulos',
        'processos',
        'usuario',
        'homologador',
        'aprovador',
        'workflows',
        'tipo_efeito',
        'id_tipo_efeito',
        'resumo_efeito',
        'api',
        'norma_referenciada_1',
        'link_norma1',
        'norma_referenciada_2',
        'link_norma2',
        'norma_referenciada_3',
        'link_norma3',
        'lorma_referenciada_4',
        'link_norma4',
        'norma_referenciada_5',
        'link_norma5',
        'norma_referenciada_6',
        'link_norma6',
        'norma_referenciada_7',
        'link_norma7',
        'norma_referenciada_8',
        'link_norma8',
        'norma_referenciada_9',
        'link_norma9',
        'norma_referenciada_10',
        'link_norma10',
        'norma_referenciada_11',
        'link_norma11',
        'norma_referenciada_12',
        'link_norma12',
        'titulo_tipo_obrigacao',
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
        'id_ciclo_obrigacao',
        'documento_obrigacao',
        'id_documento_obrigacao',
        'codigo_receita',
        'id_codigo_receita',
        'especificidade',
        'link_obrigacao',
        'data_publicacao_obg',
        'data_vigencia_inicio_obg',
        'data_vigencia_fim_obg',
        'data_busca',
        'idx_ordem'
    ];

    /**
     * the attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'fonte' => 'string',
        'id_fonte' => 'integer',
        'orgao' => 'string',
        'id_orgao' => 'integer',
        'area_tematica' => 'string',
        'id_area_tematica' => 'integer',
        'assunto' => 'string',
        'id_assunto' => 'integer',
        'tributo' => 'string',
        'id_tributo' => 'integer',
        'estado' => 'string',
        'id_estado' => 'integer',
        'municipio' => 'string',
        'id_cidade' => 'integer',
        'segmentos' => 'string',
        'id_segmentos' => 'integer',
        'cnae' => 'string',
        'id_cnae' =>'string',
        'tipo_ato' => 'string',
        'id_tipo_ato' => 'integer',
        'titulo' => 'string',
        'cod_ato' => 'string',
        'artigo_clausula' => 'string',
        'resumo_ato' => 'string',
        'data_referencia' => 'date',
        'data_publicacao' => 'date',
        'data_leitura_ato' => 'date',
        'data_vigencia_inicial' => 'date',
        'data_vigencia_final' => 'date',
        'link_acesso' => 'string',
        'link_oficial' => 'string',
        'impacto_efeito' => 'string',
        'id_impacto_efeito' => 'integer',
        'modulos' => 'string',
        'processos' => 'integer',
        'usuario' => 'string',
        'homologador' => 'string',
        'aprovador' => 'string',
        'workflows' => 'string',
        'tipo_efeito' => 'string',
        'id_tipo_efeito' => 'integer',
        'resumo_efeito' => 'string',
        'api' => 'string',
        'norma_referenciada_1' => 'string',
        'link_norma1' => 'string',
        'norma_referenciada_2' => 'string',
        'link_norma2' => 'string',
        'norma_referenciada_3' => 'string',
        'link_norma3' => 'string',
        'norma_referenciada_4' => 'string',
        'link_norma4' => 'string',
        'norma_referenciada_5' => 'string',
        'link_norma5' => 'string',
        'norma_referenciada_6' => 'string',
        'link_norma6' => 'string',
        'norma_referenciada_7' => 'string',
        'link_norma7' => 'string',
        'norma_referenciada_8' => 'string',
        'link_norma8' => 'string',
        'norma_referenciada_9' => 'string',
        'link_norma9' => 'string',
        'norma_referenciada_10' => 'string',
        'link_norma10' => 'string',
        'norma_referenciada_11' => 'string',
        'link_norma11' => 'string',
        'norma_referenciada_12' => 'string',
        'link_norma12' => 'string',
        'titulo_tipo_obrigacao' => 'string',
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
        'id_ciclo_obrigacao' => 'string',
        'documento_obrigacao' => 'string',
        'id_documento_obrigacao' => 'string',
        'codigo_receita' => 'string',
        'id_codigo_receita' => 'string',
        'especificidade' => 'string',
        'link_obrigacao' => 'string',
        'data_publicacao_obg' => 'date',
        'data_vigencia_inicio_obg' => 'date',
        'data_vigencia_fim_obg' => 'date',
        'data_busca' => 'date',
        'idx_ordem' => 'string'
    ];

    /**
     * validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
/*
Create
CREATE TABLE `conteudo_tributario_plan` (
  `id` int(11) DEFAULT NULL,
  `fonte` text,
  `id_fonte` int(11) DEFAULT NULL,
  `orgao` text,
  `id_Orgao` int(11) DEFAULT NULL,
  `area_tematica` text,
  `id_area_tematica` int(11) DEFAULT NULL,
  `assunto` text,
  `id_assunto` int(11) DEFAULT NULL,
  `tributo` text,
  `id_tributo` int(11) DEFAULT NULL,
  `estado` text,
  `id_estado` int(11) DEFAULT NULL,
  `municipio` text,
  `id_cidade` int(11) DEFAULT NULL,
  `segmentos` text,
  `id_segmentos` int(11) DEFAULT NULL,
  `tipo_ato` text,
  `id_tipo_ato` int(11) DEFAULT NULL,
  `titulo` text,
  `cod_ato` text,
  `artigo_clausula` text,
  `resumo_ato` text,
  `data_referencia` text,
  `data_publicacao` text,
  `data_leitura_ato` text,
  `data_vigencia_inicial` text,
  `data_vigencia_final` text,
  `link_acesso` text,
  `link_oficial` text,
  `impacto_efeito` text,
  `id_impacto_efeito` int(11) DEFAULT NULL,
  `modulos` text,
  `processos` int(11) DEFAULT NULL,
  `usuario` text,
  `homologador` text,
  `aprovador` text,
  `workflows` text,
  `tipo_efeito` text,
  `id_tipo_efeito` int(11) DEFAULT NULL,
  `resumo_efeito` text,
  `api` text,
  `norma_referenciada_1` text,
  `link_norma1` text,
  `norma_referenciada_2` text,
  `link_norma2` text,
  `norma_referenciada_3` text,
  `link_norma3` text,
  `norma_referenciada_4` text,
  `link_norma4` text,
  `norma_referenciada_5` text,
  `link_norma5` text,
  `norma_referenciada_6` text,
  `link_norma6` text,
  `norma_referenciada_7` text,
  `link_norma7` text,
  `norma_referenciada_8` text,
  `link_norma8` text,
  `norma_referenciada_9` text,
  `link_norma9` text,
  `norma_referenciada_10` text,
  `link_norma10` text,
  `norma_referenciada_11` text,
  `link_norma11` text,
  `norma_referenciada_12` text,
  `link_norma12` text,
  `titulo_tipo_obrigacao` text,
  `id_tipo_obrigacao` text,
  `periodo_obrigacao` text,
  `id_periodo_obrigacao` text,
  `data_vencimento` text,
  `ulti_dia_mes` text,
  `dias_vencimento` text,
  `mes_vencimento` text,
  `regra_dia_nao_util` text,
  `tipo_dia` text,
  `ciclo_obrigacao` text,
  `id_ciclo_obrigacao` text,
  `documento_obrigacao` text,
  `id_documento_obrigacao` text,
  `codigo_receita` text,
  `id_codigo_receita` text,
  `especificidade` text,
  `link_obrigacao` text,
  `data_publicacao_obg` text,
  `data_vigencia_inicio_obg` text,
  `data_vigencia_fim_obg` text,
  `data_busca` text,
  `idx_ordem` text,
  `id_tabela` int(11) NOT NULL AUTO_INCREMENT,
  `cnae` varchar(45) DEFAULT NULL,
  `id_cnae` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_tabela`)
) ENGINE=InnoDB AUTO_INCREMENT=1417 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


*/