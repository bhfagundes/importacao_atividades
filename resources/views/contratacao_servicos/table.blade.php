<div class="table-responsive-sm">
    <table class="table table-striped" id="contratacaoServicos-table">
        <thead>
            <tr>
                <th>Id Servico</th>
        <th>Cnae Origem</th>
        <th>Cnae Destino</th>
        <th>Id Cidade Origem</th>
        <th>Id Estado Origem</th>
        <th>Id Cidade Destino</th>
        <th>Id Estado Destino</th>
        <th>Id Cidade Fato Gerador</th>
        <th>Generico 1</th>
        <th>Chave Banco</th>
        <th>Id Item Nota</th>
        <th>Valor Servico</th>
        <th>Valor Desconto Incondicional</th>
        <th>Valor Desconto Condicional</th>
        <th>Valor Deducoes</th>
        <th>Generico 2</th>
        <th>Valor Abatido Inss</th>
        <th>Tipo Nota</th>
        <th> Timestamp Recepcao Sigvc</th>
        <th>Timestamp Devolucao Systax</th>
        <th>Svc</th>
        <th>Id Perfil Remetente</th>
        <th>Id Perfil Destinatario</th>
        <th>Id Filial</th>
        <th>Id Fornecedor</th>
        <th>Natureza Operacao</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($contratacaoServicos as $contratacaoServico)
            <tr>
                <td>{{ $contratacaoServico->id_servico }}</td>
            <td>{{ $contratacaoServico->cnae_origem }}</td>
            <td>{{ $contratacaoServico->cnae_destino }}</td>
            <td>{{ $contratacaoServico->id_cidade_origem }}</td>
            <td>{{ $contratacaoServico->id_estado_origem }}</td>
            <td>{{ $contratacaoServico->id_cidade_destino }}</td>
            <td>{{ $contratacaoServico->id_estado_destino }}</td>
            <td>{{ $contratacaoServico->id_cidade_fato_gerador }}</td>
            <td>{{ $contratacaoServico->generico_1 }}</td>
            <td>{{ $contratacaoServico->chave_banco }}</td>
            <td>{{ $contratacaoServico->id_item_nota }}</td>
            <td>{{ $contratacaoServico->valor_servico }}</td>
            <td>{{ $contratacaoServico->valor_desconto_incondicional }}</td>
            <td>{{ $contratacaoServico->valor_desconto_condicional }}</td>
            <td>{{ $contratacaoServico->valor_deducoes }}</td>
            <td>{{ $contratacaoServico->generico_2 }}</td>
            <td>{{ $contratacaoServico->valor_abatido_inss }}</td>
            <td>{{ $contratacaoServico->tipo_nota }}</td>
            <td>{{ $contratacaoServico-> timestamp_recepcao_sigvc }}</td>
            <td>{{ $contratacaoServico->timestamp_devolucao_systax }}</td>
            <td>{{ $contratacaoServico->svc }}</td>
            <td>{{ $contratacaoServico->id_perfil_remetente }}</td>
            <td>{{ $contratacaoServico->id_perfil_destinatario }}</td>
            <td>{{ $contratacaoServico->id_filial }}</td>
            <td>{{ $contratacaoServico->id_fornecedor }}</td>
            <td>{{ $contratacaoServico->natureza_operacao }}</td>
                <td>
                    {!! Form::open(['route' => ['contratacaoServicos.destroy', $contratacaoServico->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('contratacaoServicos.show', [$contratacaoServico->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('contratacaoServicos.edit', [$contratacaoServico->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>