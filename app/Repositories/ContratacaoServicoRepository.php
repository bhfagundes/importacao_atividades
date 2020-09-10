<?php

namespace App\Repositories;

use App\Models\ContratacaoServico;
use App\Repositories\BaseRepository;

/**
 * Class ContratacaoServicoRepository
 * @package App\Repositories
 * @version September 4, 2020, 1:11 pm UTC
*/

class ContratacaoServicoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_servico',
        'cnae_origem',
        'cnae_destino',
        'id_cidade_origem',
        'id_estado_origem',
        'id_cidade_destino',
        'id_estado_destino',
        'id_cidade_fato_gerador',
        'generico_1',
        'chave_banco',
        'id_item_nota',
        'valor_servico',
        'valor_desconto_incondicional',
        'valor_desconto_condicional',
        'valor_deducoes',
        'generico_2',
        'valor_abatido_inss',
        'tipo_nota',
        ' timestamp_recepcao_sigvc',
        'timestamp_devolucao_systax',
        'svc',
        'id_perfil_remetente',
        'id_perfil_destinatario',
        'id_filial',
        'id_fornecedor',
        'natureza_operacao'
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
        return ContratacaoServico::class;
    }
}
