<?php

namespace App\Repositories;

use App\Models\DataAtividadeEvidencia;
use App\Repositories\BaseRepository;

/**
 * Class DataAtividadeEvidenciaRepository
 * @package App\Repositories
 * @version July 29, 2020, 2:35 am UTC
*/

class DataAtividadeEvidenciaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_data_atividade',
        'id_evidencia',
        'url_anexo',
        'valor',
        'comentario',
        'integracao'
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
        return DataAtividadeEvidencia::class;
    }
}
