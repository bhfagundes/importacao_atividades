<?php

namespace App\Repositories;

use App\Models\SublasseServico;
use App\Repositories\BaseRepository;

/**
 * Class SublasseServicoRepository
 * @package App\Repositories
 * @version August 26, 2020, 8:11 pm UTC
*/

class SublasseServicoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'subclasse',
        'descrica_subclasse'
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
        return SublasseServico::class;
    }
}
