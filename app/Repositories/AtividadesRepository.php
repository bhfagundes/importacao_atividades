<?php

namespace App\Repositories;

use App\Models\Atividades;
use App\Repositories\BaseRepository;

/**
 * Class AtividadesRepository
 * @package App\Repositories
 * @version May 4, 2020, 11:21 pm UTC
*/

class AtividadesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_tipo_atividade',
        'id_obrigacao',
        'id_codigo_receita',
        'ordem',
        'is_critica',
        'data',
        'regra_dia_util',
        'usuario_responsavel',
        'tipo_dia',
        'quantidade_dias',
        'id_status_atividade_api',
        'mandatoria',
        'conclusao_auto',
        'created_at',
        'updated_at',
        'id_filial',
        'contagem_dia'
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
        return Atividades::class;
    }
}
