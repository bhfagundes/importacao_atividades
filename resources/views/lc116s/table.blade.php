<div class="table-responsive-sm">
    <table class="table table-striped" id="lc116s-table">
        <thead>
            <tr>
                <th>Codigo</th>
        <th>Descricao</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($lc116s as $lc116)
            <tr>
                <td>{{ $lc116->codigo }}</td>
            <td>{{ $lc116->descricao }}</td>
                <td>
                    {!! Form::open(['route' => ['lc116s.destroy', $lc116->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('lc116s.show', [$lc116->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('lc116s.edit', [$lc116->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>