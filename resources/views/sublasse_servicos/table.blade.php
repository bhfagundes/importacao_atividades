<div class="table-responsive-sm">
    <table class="table table-striped" id="sublasseServicos-table">
        <thead>
            <tr>
                <th>Subclasse</th>
        <th>Descrica Subclasse</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($sublasseServicos as $sublasseServico)
            <tr>
                <td>{{ $sublasseServico->subclasse }}</td>
            <td>{{ $sublasseServico->descrica_subclasse }}</td>
                <td>
                    {!! Form::open(['route' => ['sublasseServicos.destroy', $sublasseServico->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('sublasseServicos.show', [$sublasseServico->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('sublasseServicos.edit', [$sublasseServico->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>