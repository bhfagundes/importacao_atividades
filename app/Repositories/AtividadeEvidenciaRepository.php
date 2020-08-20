<?php

namespace App\Repositories;

use App\Models\AtividadeEvidencia;
use App\Repositories\BaseRepository;

/**
 * Class AtividadeEvidenciaRepository
 * @package App\Repositories
 * @version July 29, 2020, 2:19 am UTC
*/

class AtividadeEvidenciaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_atividade',
        'id_evidencia',
        'mandatoria',
        'conclusao_auto'
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
        return AtividadeEvidencia::class;
    }
}
