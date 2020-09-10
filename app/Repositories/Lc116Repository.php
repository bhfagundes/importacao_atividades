<?php

namespace App\Repositories;

use App\Models\Lc116;
use App\Repositories\BaseRepository;

/**
 * Class Lc116Repository
 * @package App\Repositories
 * @version August 26, 2020, 8:09 pm UTC
*/

class Lc116Repository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'codigo',
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
        return Lc116::class;
    }
}
