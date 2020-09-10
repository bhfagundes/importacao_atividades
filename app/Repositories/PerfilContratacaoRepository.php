<?php

namespace App\Repositories;

use App\Models\PerfilContratacao;
use App\Repositories\BaseRepository;

/**
 * Class PerfilContratacaoRepository
 * @package App\Repositories
 * @version September 4, 2020, 1:18 pm UTC
*/

class PerfilContratacaoRepository extends BaseRepository
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
        return PerfilContratacao::class;
    }
}
