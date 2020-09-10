<?php

namespace App\Repositories;

use App\Models\Servico;
use App\Repositories\BaseRepository;

/**
 * Class ServicoRepository
 * @package App\Repositories
 * @version September 8, 2020, 1:56 pm UTC
*/

class ServicoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_status_servico',
        'ativo',
        'id_mao_obra_servico',
        'id_classe_servico',
        'id_subclasse_servico',
        'flag_credito_distribuidora',
        'flag_credito_prestadora',
        'id_lc_116',
        'flag_entrada_saida',
        'id_cidade',
        'id_lc_116_systax',
        'created_at',
        'updated_at',
        'id_usuario',
        'duvida_tecnica',
        'duvida_tecncia',
        'id_lc_116_definitivo',
        'retorno_duvida_tecnica',
        'id_servico_rfb',
        'aliquota_ir',
        'aliquota_inss',
        'aliquota_pis',
        'aliquota_cofins',
        'aliquota_csll',
        'aliquota_cprb',
        'percentual_reducao_inss',
        'indicador_pis',
        'indicador_cofins',
        'indicador_iss',
        'alquota_iss',
        'codigo_servico_municipio'
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
        return Servico::class;
    }
}
