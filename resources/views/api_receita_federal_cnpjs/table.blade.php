<div class="table-responsive-sm">
    <table class="table table-striped" id="apiReceitaFederalCnpjs-table">
        <thead>
            <tr>
                <th>Cnpj</th>
        <th>Inscricao Estadual</th>
        <th>Codigo Ibge</th>
        <th>Email</th>
        <th>Data Abertura</th>
        <th>Situacao Cadastral</th>
        <th>Codigo Situacao Cadastral</th>
        <th>Data Situacao Cadastral</th>
        <th>Motivo Situacao Cadastral</th>
        <th>Numero Consulta</th>
        <th>Consulta</th>
        <th>Numero Inscricao</th>
        <th>Tipo Empresa</th>
        <th>Nome Empresarial</th>
        <th>Titulo Estabelecimento</th>
        <th>Porte</th>
        <th>Codigo Descricao Atividades</th>
        <th>Codigo Descricao Atividade Secundaria</th>
        <th>Codigo Descricao Nat Juridica</th>
        <th>Logradouro</th>
        <th>Numero</th>
        <th>Complemento</th>
        <th>Cep</th>
        <th>Bairro</th>
        <th>Municipio</th>
        <th>Uf</th>
        <th>Telefone</th>
        <th>Ente Federativo Responsavel</th>
        <th>Status</th>
        <th>Situacao Especial</th>
        <th>Data Situacao Especial</th>
        <th>Cnpj Qsa</th>
        <th>Nome Empresarial Qsa</th>
        <th>Capital Social Qsa</th>
        <th>Nome Empresarial Qualificacao Qsa</th>
        <th>Status Transacao</th>
        <th>Ind Bloqueio</th>
        <th>Tipo Forn Cliente</th>
        <th>Inscricao Municipal</th>
        <th>Created At</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($apiReceitaFederalCnpjs as $apiReceitaFederalCnpj)
            <tr>
                <td>{{ $apiReceitaFederalCnpj->cnpj }}</td>
            <td>{{ $apiReceitaFederalCnpj->inscricao_estadual }}</td>
            <td>{{ $apiReceitaFederalCnpj->codigo_ibge }}</td>
            <td>{{ $apiReceitaFederalCnpj->email }}</td>
            <td>{{ $apiReceitaFederalCnpj->data_abertura }}</td>
            <td>{{ $apiReceitaFederalCnpj->situacao_cadastral }}</td>
            <td>{{ $apiReceitaFederalCnpj->codigo_situacao_cadastral }}</td>
            <td>{{ $apiReceitaFederalCnpj->data_situacao_cadastral }}</td>
            <td>{{ $apiReceitaFederalCnpj->motivo_situacao_cadastral }}</td>
            <td>{{ $apiReceitaFederalCnpj->numero_consulta }}</td>
            <td>{{ $apiReceitaFederalCnpj->consulta }}</td>
            <td>{{ $apiReceitaFederalCnpj->numero_inscricao }}</td>
            <td>{{ $apiReceitaFederalCnpj->tipo_empresa }}</td>
            <td>{{ $apiReceitaFederalCnpj->nome_empresarial }}</td>
            <td>{{ $apiReceitaFederalCnpj->titulo_estabelecimento }}</td>
            <td>{{ $apiReceitaFederalCnpj->porte }}</td>
            <td>{{ $apiReceitaFederalCnpj->codigo_descricao_atividades }}</td>
            <td>{{ $apiReceitaFederalCnpj->codigo_descricao_atividade_secundaria }}</td>
            <td>{{ $apiReceitaFederalCnpj->codigo_descricao_nat_juridica }}</td>
            <td>{{ $apiReceitaFederalCnpj->logradouro }}</td>
            <td>{{ $apiReceitaFederalCnpj->numero }}</td>
            <td>{{ $apiReceitaFederalCnpj->complemento }}</td>
            <td>{{ $apiReceitaFederalCnpj->cep }}</td>
            <td>{{ $apiReceitaFederalCnpj->bairro }}</td>
            <td>{{ $apiReceitaFederalCnpj->municipio }}</td>
            <td>{{ $apiReceitaFederalCnpj->uf }}</td>
            <td>{{ $apiReceitaFederalCnpj->telefone }}</td>
            <td>{{ $apiReceitaFederalCnpj->ente_federativo_responsavel }}</td>
            <td>{{ $apiReceitaFederalCnpj->status }}</td>
            <td>{{ $apiReceitaFederalCnpj->situacao_especial }}</td>
            <td>{{ $apiReceitaFederalCnpj->data_situacao_especial }}</td>
            <td>{{ $apiReceitaFederalCnpj->cnpj_qsa }}</td>
            <td>{{ $apiReceitaFederalCnpj->nome_empresarial_qsa }}</td>
            <td>{{ $apiReceitaFederalCnpj->capital_social_qsa }}</td>
            <td>{{ $apiReceitaFederalCnpj->nome_empresarial_qualificacao_qsa }}</td>
            <td>{{ $apiReceitaFederalCnpj->status_transacao }}</td>
            <td>{{ $apiReceitaFederalCnpj->ind_bloqueio }}</td>
            <td>{{ $apiReceitaFederalCnpj->tipo_forn_cliente }}</td>
            <td>{{ $apiReceitaFederalCnpj->inscricao_municipal }}</td>
            <td>{{ $apiReceitaFederalCnpj->created_at }}</td>
                <td>
                    {!! Form::open(['route' => ['apiReceitaFederalCnpjs.destroy', $apiReceitaFederalCnpj->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('apiReceitaFederalCnpjs.show', [$apiReceitaFederalCnpj->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('apiReceitaFederalCnpjs.edit', [$apiReceitaFederalCnpj->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>