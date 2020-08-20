<?php

namespace App\Repositories;

use App\Models\Evidencia;
use App\Repositories\BaseRepository;

/**
 * Class EvidenciaRepository
 * @package App\Repositories
 * @version July 29, 2020, 2:27 am UTC
*/

class EvidenciaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'codigo',
        'evidencia'
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
        return Evidencia::class;
    }
}
