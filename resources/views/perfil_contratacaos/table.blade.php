<div class="table-responsive-sm">
    <table class="table table-striped" id="perfilContratacaos-table">
        <thead>
            <tr>
                <th>Codigo</th>
        <th>Descricao</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($perfilContratacaos as $perfilContratacao)
            <tr>
                <td>{{ $perfilContratacao->codigo }}</td>
            <td>{{ $perfilContratacao->descricao }}</td>
                <td>
                    {!! Form::open(['route' => ['perfilContratacaos.destroy', $perfilContratacao->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('perfilContratacaos.show', [$perfilContratacao->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('perfilContratacaos.edit', [$perfilContratacao->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>