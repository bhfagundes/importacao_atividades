<div class="table-responsive-sm">
    <table class="table table-striped" id="atividadeEvidencias-table">
        <thead>
            <tr>
                <th>Id Atividade</th>
        <th>Id Evidencia</th>
        <th>Mandatoria</th>
        <th>Conclusao Auto</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($atividadeEvidencias as $atividadeEvidencia)
            <tr>
                <td>{{ $atividadeEvidencia->id_atividade }}</td>
            <td>{{ $atividadeEvidencia->id_evidencia }}</td>
            <td>{{ $atividadeEvidencia->mandatoria }}</td>
            <td>{{ $atividadeEvidencia->conclusao_auto }}</td>
                <td>
                    {!! Form::open(['route' => ['atividadeEvidencias.destroy', $atividadeEvidencia->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('atividadeEvidencias.show', [$atividadeEvidencia->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('atividadeEvidencias.edit', [$atividadeEvidencia->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>