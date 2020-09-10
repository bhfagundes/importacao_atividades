<div class="table-responsive-sm">
    <table class="table table-striped" id="classeServicos-table">
        <thead>
            <tr>
                <th>Classe</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($classeServicos as $classeServico)
            <tr>
                <td>{{ $classeServico->classe }}</td>
                <td>
                    {!! Form::open(['route' => ['classeServicos.destroy', $classeServico->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('classeServicos.show', [$classeServico->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('classeServicos.edit', [$classeServico->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>