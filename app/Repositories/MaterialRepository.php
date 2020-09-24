<?php

namespace App\Repositories;

use App\Models\Material;
use App\Repositories\BaseRepository;

/**
 * Class MaterialRepository
 * @package App\Repositories
 * @version September 13, 2020, 1:43 pm UTC
*/

class MaterialRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Material::class;
    }
}
