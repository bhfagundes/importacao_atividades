<div class="table-responsive-sm">
    <table class="table table-striped" id="atividades-table">
        <thead>
            <tr>
                <th>Id Tipo Atividade</th>
        <th>Id Obrigacao</th>
        <th>Id Codigo Receita</th>
        <th>Ordem</th>
        <th>Is Critica</th>
        <th>Data</th>
        <th>Regra Dia Util</th>
        <th>Usuario Responsavel</th>
        <th>Tipo Dia</th>
        <th>Quantidade Dias</th>
        <th>Id Status Atividade Api</th>
        <th>Mandatoria</th>
        <th>Conclusao Auto</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th>Id Filial</th>
        <th>Contagem Dia</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($atividades as $atividades)
            <tr>
                <td>{{ $atividades->id_tipo_atividade }}</td>
            <td>{{ $atividades->id_obrigacao }}</td>
            <td>{{ $atividades->id_codigo_receita }}</td>
            <td>{{ $atividades->ordem }}</td>
            <td>{{ $atividades->is_critica }}</td>
            <td>{{ $atividades->data }}</td>
            <td>{{ $atividades->regra_dia_util }}</td>
            <td>{{ $atividades->usuario_responsavel }}</td>
            <td>{{ $atividades->tipo_dia }}</td>
            <td>{{ $atividades->quantidade_dias }}</td>
            <td>{{ $atividades->id_status_atividade_api }}</td>
            <td>{{ $atividades->mandatoria }}</td>
            <td>{{ $atividades->conclusao_auto }}</td>
            <td>{{ $atividades->created_at }}</td>
            <td>{{ $atividades->updated_at }}</td>
            <td>{{ $atividades->id_filial }}</td>
            <td>{{ $atividades->contagem_dia }}</td>
                <td>
                    {!! Form::open(['route' => ['atividades.destroy', $atividades->id_atividade], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('atividades.show', [$atividades->id_atividade]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('atividades.edit', [$atividades->id_atividade]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>