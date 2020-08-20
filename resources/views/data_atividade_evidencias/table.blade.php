<div class="table-responsive-sm">
    <table class="table table-striped" id="dataAtividadeEvidencias-table">
        <thead>
            <tr>
                <th>Id Data Atividade</th>
        <th>Id Evidencia</th>
        <th>Url Anexo</th>
        <th>Valor</th>
        <th>Comentario</th>
        <th>Integracao</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($dataAtividadeEvidencias as $dataAtividadeEvidencia)
            <tr>
                <td>{{ $dataAtividadeEvidencia->id_data_atividade }}</td>
            <td>{{ $dataAtividadeEvidencia->id_evidencia }}</td>
            <td>{{ $dataAtividadeEvidencia->url_anexo }}</td>
            <td>{{ $dataAtividadeEvidencia->valor }}</td>
            <td>{{ $dataAtividadeEvidencia->comentario }}</td>
            <td>{{ $dataAtividadeEvidencia->integracao }}</td>
                <td>
                    {!! Form::open(['route' => ['dataAtividadeEvidencias.destroy', $dataAtividadeEvidencia->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('dataAtividadeEvidencias.show', [$dataAtividadeEvidencia->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('dataAtividadeEvidencias.edit', [$dataAtividadeEvidencia->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>