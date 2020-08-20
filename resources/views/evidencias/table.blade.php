<div class="table-responsive-sm">
    <table class="table table-striped" id="evidencias-table">
        <thead>
            <tr>
                <th>Codigo</th>
        <th>Evidencia</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($evidencias as $evidencia)
            <tr>
                <td>{{ $evidencia->codigo }}</td>
            <td>{{ $evidencia->evidencia }}</td>
                <td>
                    {!! Form::open(['route' => ['evidencias.destroy', $evidencia->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('evidencias.show', [$evidencia->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('evidencias.edit', [$evidencia->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>