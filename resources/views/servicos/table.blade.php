<div class="table-responsive-sm">
    <table class="table table-striped" id="servicos-table">
        <thead>
            <tr>
                <th>Id Status Servico</th>
        <th>Ativo</th>
        <th>Id Mao Obra Servico</th>
        <th>Id Classe Servico</th>
        <th>Id Subclasse Servico</th>
        <th>Flag Credito Distribuidora</th>
        <th>Flag Credito Prestadora</th>
        <th>Id Lc 116</th>
        <th>Flag Entrada Saida</th>
        <th>Id Cidade</th>
        <th>Id Lc 116 Systax</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th>Id Usuario</th>
        <th>Duvida Tecnica</th>
        <th>Duvida Tecncia</th>
        <th>Id Lc 116 Definitivo</th>
        <th>Retorno Duvida Tecnica</th>
        <th>Id Servico Rfb</th>
        <th>Aliquota Ir</th>
        <th>Aliquota Inss</th>
        <th>Aliquota Pis</th>
        <th>Aliquota Cofins</th>
        <th>Aliquota Csll</th>
        <th>Aliquota Cprb</th>
        <th>Percentual Reducao Inss</th>
        <th>Indicador Pis</th>
        <th>Indicador Cofins</th>
        <th>Indicador Iss</th>
        <th>Alquota Iss</th>
        <th>Codigo Servico Municipio</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($servicos as $servico)
            <tr>
                <td>{{ $servico->id_status_servico }}</td>
            <td>{{ $servico->ativo }}</td>
            <td>{{ $servico->id_mao_obra_servico }}</td>
            <td>{{ $servico->id_classe_servico }}</td>
            <td>{{ $servico->id_subclasse_servico }}</td>
            <td>{{ $servico->flag_credito_distribuidora }}</td>
            <td>{{ $servico->flag_credito_prestadora }}</td>
            <td>{{ $servico->id_lc_116 }}</td>
            <td>{{ $servico->flag_entrada_saida }}</td>
            <td>{{ $servico->id_cidade }}</td>
            <td>{{ $servico->id_lc_116_systax }}</td>
            <td>{{ $servico->created_at }}</td>
            <td>{{ $servico->updated_at }}</td>
            <td>{{ $servico->id_usuario }}</td>
            <td>{{ $servico->duvida_tecnica }}</td>
            <td>{{ $servico->duvida_tecncia }}</td>
            <td>{{ $servico->id_lc_116_definitivo }}</td>
            <td>{{ $servico->retorno_duvida_tecnica }}</td>
            <td>{{ $servico->id_servico_rfb }}</td>
            <td>{{ $servico->aliquota_ir }}</td>
            <td>{{ $servico->aliquota_inss }}</td>
            <td>{{ $servico->aliquota_pis }}</td>
            <td>{{ $servico->aliquota_cofins }}</td>
            <td>{{ $servico->aliquota_csll }}</td>
            <td>{{ $servico->aliquota_cprb }}</td>
            <td>{{ $servico->percentual_reducao_inss }}</td>
            <td>{{ $servico->indicador_pis }}</td>
            <td>{{ $servico->indicador_cofins }}</td>
            <td>{{ $servico->indicador_iss }}</td>
            <td>{{ $servico->alquota_iss }}</td>
            <td>{{ $servico->codigo_servico_municipio }}</td>
                <td>
                    {!! Form::open(['route' => ['servicos.destroy', $servico->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('servicos.show', [$servico->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('servicos.edit', [$servico->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>