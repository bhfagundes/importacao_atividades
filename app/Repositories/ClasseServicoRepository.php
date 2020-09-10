<?php

namespace App\Repositories;

use App\Models\ClasseServico;
use App\Repositories\BaseRepository;

/**
 * Class ClasseServicoRepository
 * @package App\Repositories
 * @version August 26, 2020, 8:11 pm UTC
*/

class ClasseServicoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'classe'
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
        return ClasseServico::class;
    }
}
