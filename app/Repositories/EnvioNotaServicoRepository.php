<?php

namespace App\Repositories;

use App\Models\EnvioNotaServico;
use App\Repositories\BaseRepository;

/**
 * Class EnvioNotaServicoRepository
 * @package App\Repositories
 * @version September 10, 2020, 3:59 pm UTC
*/

class EnvioNotaServicoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'path_arquivo',
        'created_at',
        'updated_at',
        'enviado',
        'identificador_nota'
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
        return EnvioNotaServico::class;
    }
}
