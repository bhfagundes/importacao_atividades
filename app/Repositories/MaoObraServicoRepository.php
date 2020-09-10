<?php

namespace App\Repositories;

use App\Models\MaoObraServico;
use App\Repositories\BaseRepository;

/**
 * Class MaoObraServicoRepository
 * @package App\Repositories
 * @version August 26, 2020, 8:08 pm UTC
*/

class MaoObraServicoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'mao_obra',
        'descrica_mao_obra'
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
        return MaoObraServico::class;
    }
}
