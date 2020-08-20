<?php

namespace App\Repositories;

use App\Models\Cruzamentos;
use App\Repositories\BaseRepository;

/**
 * Class CruzamentosRepository
 * @package App\Repositories
 * @version August 14, 2020, 12:19 am UTC
*/

class CruzamentosRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'estabelecimento',
        'uf',
        'escrituracao',
        'periodo_inicial',
        'periodo_final',
        'cruzamentos',
        'alertas',
        'erros',
        'status',
        'link_download'
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
        return Cruzamentos::class;
    }
}
