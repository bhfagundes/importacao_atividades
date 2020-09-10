<?php

namespace App\Repositories;

use App\Models\StatusServico;
use App\Repositories\BaseRepository;

/**
 * Class StatusServicoRepository
 * @package App\Repositories
 * @version August 26, 2020, 8:10 pm UTC
*/

class StatusServicoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'descricao'
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
        return StatusServico::class;
    }
}
